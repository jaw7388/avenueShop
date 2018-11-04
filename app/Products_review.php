<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products_review extends Model
{
    public $timestamps = false;
    protected $fillable = ['product_id', 'product_rate', 'product_review', 'user_id'];
}
