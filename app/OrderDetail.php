<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
