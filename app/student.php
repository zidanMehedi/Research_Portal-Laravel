<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $table = "student";
    public $timestamps = false;
    protected $primaryKey = 'sid';
}
