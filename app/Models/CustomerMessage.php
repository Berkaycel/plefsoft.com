<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerMessage extends Model
{
    protected $fillable = ['name','surname','email','message'];
}
