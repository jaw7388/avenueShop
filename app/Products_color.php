<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products_color extends Model
{
    public $timestamps = false;
    protected $fillable = ['color_id', 'product_id']; 
}
