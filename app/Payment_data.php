<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment_data extends Model
{
    public $timestamps = false;
    protected $fillable = ['payment_type_id', 'data_name', 'data_type'];
}
