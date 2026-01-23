<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'firstname',
        'lastname',
        'email',
        'phone',
        'country',
        'address',
        'city',
        'state',
        'zipcode',
        'shipping_method_id',
        'subtotal',
        'discount',
        'shipping',
        'tax',
        'total',
        'payment_method',
        'status'
    ];

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function shippingMethod()
    {
        return $this->belongsTo(ShippingMethod::class);
    }
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
