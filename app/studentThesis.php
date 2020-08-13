<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class studentThesis extends Model
{
    protected $table = "student_thesis";
    public $timestamps = false;
    protected $primaryKey = 'thesis_id';
}
