<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class ExchangeRate extends Model
{
    use HasFactory;

    protected $fillable = ['rate'];

    protected $casts = [
        'rate' => 'decimal:6', // assuming exchange rate is a decimal number with 6 decimal places
    ];

    public static function getExchangeRate()
    {
        $exchange_rate = ExchangeRate::latest()->first(); // get the latest exchange rate from the database

        if (!$exchange_rate || Carbon::parse($exchange_rate->updated_at)->diffInHours(Carbon::now()) >= 24) {
            // fetch exchange rate from API and update database
            $response = Http::get('https://openexchangerates.org/api/latest.json', [
                'app_id' => config('app.openExchange'),
                'symbols' => 'GHS'
            ]);

            $responseData = $response->json();
            $exchange_rate_value = $responseData['rates']['GHS'];

            if ($exchange_rate) {
                // update existing exchange rate in the database
                $exchange_rate->update(['rate' => $exchange_rate_value]);
            } else {
                // create new exchange rate in the database
                ExchangeRate::create(['rate' => $exchange_rate_value]);
            }

            $exchange_rate = $exchange_rate_value; // update $exchange_rate variable with the latest value
        } else {
            $exchange_rate = $exchange_rate->rate;
        }

        return $exchange_rate;
    }
}
