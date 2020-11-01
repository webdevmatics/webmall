<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{


    public function values()
    {
        return $this->hasMany(AttributeValue::class);
    }
}
