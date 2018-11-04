<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipment_detail extends Model
{
    public $timestamps = false;
    protected $fillable = ['shipment_id','quanitity','price_per_unit','price','product_id'];
}
