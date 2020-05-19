<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','included','price','pic'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
