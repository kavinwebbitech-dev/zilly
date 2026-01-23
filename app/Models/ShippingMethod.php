<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShippingMethod extends Model
{
    use HasFactory;

    // Fillable fields
    protected $fillable = [
        'name',      // Shipping method name, e.g., "Free Shipping"
        'estimate',  // Estimated delivery time, e.g., "7/10 - 10/10/2025"
        'price',     // Shipping cost
    ];
}
