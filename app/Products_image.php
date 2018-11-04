<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products_image extends Model
{
    public $timestamps = false;
    protected $fillable = ['image_id', 'product_id'];    
}
