<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_role extends Model
{
    public $timestamps = false;
    protected $fillable = ['role'];
}
