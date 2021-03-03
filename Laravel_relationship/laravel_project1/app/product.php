<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
     protected $fillable = [
     	'product_name', 'product_code','quantity','price'
    ];
}