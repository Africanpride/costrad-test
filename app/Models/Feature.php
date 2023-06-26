<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Feature extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'institute_id'];

    public function institute(): BelongsTo
    {
        return $this->belongsTo(Institute::class,'institute_id','id');
    }
}
