<?php

namespace App\Rules;

use Illuminate\Support\Facades\Http;
use Illuminate\Contracts\Validation\Rule;

class Recaptcha implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        // $response = Http::asForm()->post("https://www.google.com/recaptcha/api/siteverify", [
        //         'secret' => config('recaptcha.api_secret_key'),
        //         'response' => $value,
        //         'ip' => request()->ip(),
        // ]);

        // if ($response->successful() && $response->json('success') && $response->json('score') > config('recaptcha.min_score')) {
        //     return true;
        // }

        // dd($value);
        // return false;
        // if ($value = true ) {
        //     return true;
        // }

        if ($value > config('recaptcha.min_score') ) {
            return true;
        }


        return false;
    }

    public function message()
    {
        return 'Failed to validate ReCaptcha.';
    }
}
