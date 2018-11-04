<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipment_type extends Model
{
    public $timestamps = false;
    protected $fillable = ['id','type_name'];
}
