<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thesis_type extends Model
{
    protected $table = "thesis_type";
    public $timestamps = false;
    protected $primaryKey = 'type_id';
}
