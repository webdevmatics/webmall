<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function shop()
    {
        return $this->belongsTo(Shop::class, 'shop_id');
    }
}
