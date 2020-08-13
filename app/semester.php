<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class semester extends Model
{
    protected $table = "semester";
    public $timestamps = false;
    protected $primaryKey = 'sem_id';
}
