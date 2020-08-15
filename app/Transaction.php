<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $guarded = [];

    public function subOrder()
    {
        return $this->belongsTo(SubOrder::class);
    }

}
