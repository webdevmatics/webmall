<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    // protected $casts=[
    //     'product_attributes'=>'array'
    // ];

    protected static function booted()
    {
        static::saving(function ($product) {

            $product->product_attributes = json_encode(request('product_attributes'));
        });
    }

    public function shop()
    {
        return $this->belongsTo(Shop::class, 'shop_id');
    }


}
