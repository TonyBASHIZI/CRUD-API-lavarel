<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   public $tempstamps = false;

    protected $fillable = ['designation','price','qty','description'];
}
