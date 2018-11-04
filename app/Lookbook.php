<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lookbook extends Model
{
    public $timestamps = false;
    protected $fillable = ['product_id', 'user_id'];
}
