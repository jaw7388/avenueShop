<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipment_status extends Model
{
    public $timestamps = false;
    protected $fillable = ['id','shipment_id','status_catalog_id','status_time','notes'];
}
