<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment_detail extends Model
{
    public $timestamps = false;
    protected $fillable = ['shipment_id', 'payment_data_id', 'value'];
}
