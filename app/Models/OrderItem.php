<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $fillable = ['order_id', 'product_id', 'quantity', 'price', 'subtotal','product_image_id'];

    public function productImage()
    {
        return $this->belongsTo(ProductImage::class, 'product_image_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
