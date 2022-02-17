<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public $tempstamps = false;

    protected $fillable = ['name','email','salary'];
}
