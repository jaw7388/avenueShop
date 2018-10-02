<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;

    protected $fillable = ['product_name', 'product_description','product_little_description', 'product_video','product_price', 'product_specs'];

}
