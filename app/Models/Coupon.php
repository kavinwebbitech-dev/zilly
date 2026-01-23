<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $fillable = [
        'code',
        'type',
        'value',
        'min_amount',
        'user_limit',
        'is_active',
        'expires_at',
    ];
     protected $casts = [
        'is_active' => 'boolean',
        'expires_at' => 'datetime',
    ];
}
