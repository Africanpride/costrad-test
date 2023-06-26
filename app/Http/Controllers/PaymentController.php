<?php

namespace App\Http\Controllers;

use Auth;

use Exception;
use Carbon\Carbon;
use App\Models\User;
use App\Http\Requests;
use App\Models\Invoice;
use App\Models\Donations;
use App\Models\Institute;
use App\Models\Transaction;
use App\Models\ExchangeRate;
use Illuminate\Http\Request;
use App\Payment; // Payment Model
use Paystack; // Paystack package
use Flasher\Prime\FlasherInterface;
use App\Http\Controllers\Controller;
use App\Http\Livewire\InstituteDetails;
use Flasher\Laravel\Facade\Flasher;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;



class PaymentController extends Controller
{


    public function donationGateway(Request $request, FlasherInterface $flasher)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'sometimes',
            'email' => 'sometimes',
            'amount' => 'required|numeric',
        ]);

        $donationID = Donations::generateOrderId();
        $user_id = Donations::getDonor();
        // Get the exchange rate and other inputs for api
        $exchange_rate = ExchangeRate::getExchangeRate();
        $email = Donations::getEmail($request->email);
        $ghs_amount = $request->amount * (($exchange_rate + 0.50) * 100);
        $reference = Paystack::genTranxRef();

        try {
            $data = array(
                "amount" => round($ghs_amount),
                "reference" =>  $reference,
                "email" => $email,
                "currency" => "GHS",
                "orderID" => $donationID,
                "channels" => ['card', 'bank', 'ussd', 'qr', 'mobile_money', 'bank_transfer'],
                "metadata" => [
                    "donation" => true,
                    "orderID" => $donationID,
                    "name" => (isset($request->name) ? $request->name : 'Anonymous Donor'),
                    "user_id" => $user_id,
                ]
            );

            return Paystack::getAuthorizationUrl($data)->redirectNow();
        } catch (\Exception $e) {
            return Redirect::back()->withMessage(['msg' => 'The paystack token has expired. Please refresh the page and try again.', 'type' => 'error']);
        }
    }


    public function redirectToGateway(Request $request)
    {


        try {
            $invoice = new Invoice();
            $invoice->participant_id = Auth::user()->id;
            $invoice->status = 'pending';
            $invoice->save();

            $institute = Institute::whereAcronym($request->institute)->first();
            // Get the exchange rate
            $exchange_rate = ExchangeRate::getExchangeRate();
            $ghs_amount = $institute->price * (($exchange_rate + 0.40) * 100);

            $reference = Paystack::genTranxRef();
            $orderID = $invoice->id;

            $data = array(
                "amount" => round($ghs_amount),
                "reference" =>  $reference,
                "email" => Auth::user()->email,
                "currency" => "GHS",
                "orderID" => $orderID,
                "channels" => ['card', 'bank', 'ussd', 'qr', 'mobile_money', 'bank_transfer'],
                "metadata" => [
                    "institute_id" => $institute->id,
                    "invoice_id" => $invoice->id,


                ]
            );

            return Paystack::getAuthorizationUrl($data)->redirectNow();
        } catch (\Exception $e) {
            return Redirect::back()->withMessage(['msg' => 'The paystack token has expired. Please refresh the page and try again.', 'type' => 'error']);
        }
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();

        if ($paymentDetails && isset($paymentDetails['data']['metadata']['donation'])) {
            // run logic for Donation payment
            // redirect to institute frontpage url
            $donation = new Donations;
            $donation->amount = $paymentDetails['data']['amount'];
            $donation->fees = $paymentDetails['data']['fees'];
            $donation->ip_address = $paymentDetails['data']['ip_address'];
            $donation->donor_email = $paymentDetails['data']['customer']['email'];
            $donation->donor_name = $paymentDetails['data']['metadata']['name'];
            $donation->user_id = $paymentDetails['data']['metadata']['user_id'];
            $donation->save();

            // Donation instance created. Redirect and thank you.
            app('flasher')->addSuccess('Thank you For your Kind Donation.', 'Success');
            return redirect()->route('home');
        } else {

            try {

                if ($paymentDetails['status'] == true) {
                    // Get the invoice generated before sending to paystack and associate it with
                    // transaction later on.
                    $institute = Institute::whereId($paymentDetails['data']['metadata']['institute_id'])->first();
                    // attach the Authenticated user to the institiute
                    $institute->participants()->attach(Auth::user()->id, ['created_at' => now()]);
                    $invoice = Invoice::whereId($paymentDetails['data']['metadata']['invoice_id'])->first();


                    $transaction = new Transaction();
                    $transaction->amount = $paymentDetails['data']['amount'];
                    $transaction->description = 'Payment for services rendered';
                    $transaction->fees = $paymentDetails['data']['fees'];
                    $transaction->participant_id = Auth::user()->id;
                    $transaction->reference = $paymentDetails['data']['reference'];
                    $transaction->authorization_code = $paymentDetails['data']['authorization']['authorization_code'];
                    $transaction->transaction_date = Carbon::parse($paymentDetails['data']['created_at'])->toDateTimeString();
                    $transaction->currency = $paymentDetails['data']['currency'];
                    $transaction->ipAddress = $paymentDetails['data']['ip_address'];
                    $transaction->institute_id = $paymentDetails['data']['metadata']['institute_id'];
                    $transaction->save();

                    // Update invoice
                    $invoice->status = 'paid';
                    $invoice->transaction_id = $transaction->id;
                    $invoice->save();

                    // redirect to institute frontpage url
                    app('flasher')->addSuccess('Payment Successful.', 'Success');

                    return redirect()->route('institute.show', [$institute]);
                }
            } catch (\Exception $e) {
                return Redirect::back()->withMessage(['msg' => 'The paystack token has expired. Please refresh the page and try again.', 'type' => 'error']);
            }
        }



        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }


    private static function preventDuplicateInstituteTransaction($id)
    {
        $institute = Institute::find($id);

        if (!$institute) {
            app('flasher')->addError('Institute not found.', 'Error');
            return redirect()->back();
        }

        $user = Auth::user();

        if (!$user) {
            app('flasher')->addError('User not authenticated.', 'Error');
            return redirect()->back();
        }

        $transaction = Transaction::where('participant_id', $user->id)->where('institute_id', $id)->first();

        if ($transaction && $institute->created_at->year == $transaction->created_at->year) {
            app('flasher')->addWarning('You have already subscribed to this institute.', 'Duplicate Payment');
            return redirect()->route('institute.show', $institute);
        }

        // Continue with the rest of your logic
    }
}
