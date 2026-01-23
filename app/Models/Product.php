<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id',
        'brand_id',
        'name',
        'price',
        'original_price',
        'discount_percent',
        'short_description',
        'status',
        'colors',
        'sizes',
        'color_size',
    ];

    protected $casts = [
        'colors' => 'array',
        'sizes' => 'array',
        'color_size' => 'array',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }
}
