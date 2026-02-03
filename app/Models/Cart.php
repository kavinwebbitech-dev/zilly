<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'cart';

    protected $fillable = [
        'user_id',
        'product_id',
        'name',
        'price',
        'qty',
        'original_price',
        'discount_percent',
        'product_image_id'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function productImage()
    {
        return $this->hasOne(ProductImage::class ,'product_id','product_id');
    }
}

