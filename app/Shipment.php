<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'user_id','time_created','shipment_type_id','payment_type_id',
        'shipping_address','billing_address','products_price',
        'delivery_cost','discount','final_price'
    ];
}