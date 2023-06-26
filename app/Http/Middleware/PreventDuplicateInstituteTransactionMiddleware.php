<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Institute;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class PreventDuplicateInstituteTransactionMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $id = $request->institute_id;

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
            app('flasher')->addWarning('You have already subscribed to this institute.', 'Duplicate Payment Attempt');
            return redirect()->route('institute.show', $institute);
        }

        return $next($request);
    }
}
