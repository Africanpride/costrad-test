<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Donations extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [

        'amount',
        'fees',
        'donor_name',
        'donor_email',
        'ip_address',
        'user_id'
    ];

    public $incrementing = false;
    protected $keyType = 'string';
    public function getRouteKeyName()
    {
        return 'id';
    }
    public static function getEmail($email)
    {
        if(Auth::check()) {
           return Auth::user()->email;
        }

        if(!is_null($email)) {
            return $email;
        }

        return config('app.email');
    }
    public static function getDonor()
    {
        $defaultDonor = User::whereEmail(config('app.email'))->first(); // Default donor is webmaster ;-)
        if(Auth::check()) {
           return Auth::user()->id;
        }

        return $defaultDonor->id;
    }

    public static function generateOrderId()
    {
        return Str::random(10) . '-' . 'donation';
    }

    public function donor()
    {
        $this->belongsTo(User::class, 'user_id');
    }
}
