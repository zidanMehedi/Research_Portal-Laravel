<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class file extends Model
{
    protected $table = "file";
    public $timestamps = false;
    protected $primaryKey = 'file_id';
}
