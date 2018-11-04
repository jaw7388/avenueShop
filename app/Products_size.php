<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products_size extends Model
{
    public $timestamps = false;
    protected $fillable = ['product_id', 'size_id'];
}
