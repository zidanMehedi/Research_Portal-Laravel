<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class thesisType extends Model
{
    protected $table = "thesis_type";
    public $timestamps = false;
    protected $primaryKey = 'type_id';
}
