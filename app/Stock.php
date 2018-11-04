<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'product_color_id', 'product_size_id', 'stock', 'product_id'
    ];
}
