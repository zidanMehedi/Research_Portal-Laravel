<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class verification extends Model
{
    protected $table = "verification";
    public $timestamps = false;
    protected $primaryKey = 'ver_id';
}
