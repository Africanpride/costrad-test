<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Invoice extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'participant_id',
        'transaction_id',
        'status'
    ];

    public $incrementing = false;
    protected $keyType = 'string';
    public function getRouteKeyName()
    {
        return 'id';
    }

    public function participant() {
        return $this->belongsTo(User::class, 'participant_id', 'id');
    }

    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }

}
