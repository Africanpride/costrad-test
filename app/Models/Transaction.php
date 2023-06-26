<?php

namespace App\Models;

use App\Models\Institute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{

    use HasUuids;

    protected $fillable = [

        'amount',
        'description',
        'fees',
        'participant_id',
        'invoice_id',
        'authorization_code',
        'reference',
        'transaction_date',
        'currency',
        'institute_id',
        'ipAddress'
    ];

    public $incrementing = false;
    protected $keyType = 'string';
    public function getRouteKeyName()
    {
        return 'id';
    }
    public static function latestFormattedAmount(): string
    {
        $latest = self::latest()->first();

        if ($latest) {
            return 'GHS ' . number_format($latest->amount / 100, 2, '.', ',');
        }

        // Handle the case where no records are available
        return 'No records found';
    }



    protected $hidden = ['authorization_code'];

    public function participant()
    {
        return $this->belongsTo(User::class, 'participant_id');
    }

    public function institute()
    {
        return $this->belongsTo(Institute::class, 'institute_id');
    }

}
