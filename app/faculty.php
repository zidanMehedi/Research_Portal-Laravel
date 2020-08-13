<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class faculty extends Model
{
    protected $table = "faculty";
    public $timestamps = false;
    protected $primaryKey = 'fid';
}
