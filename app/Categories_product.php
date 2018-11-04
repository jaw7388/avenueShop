<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories_product extends Model
{
    public $timestamps = false;
    protected $fillable = ['id','product_id','category_id','timestamp'];
}
