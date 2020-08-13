<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Research_group extends Model
{
    protected $table = "research_group";
    public $timestamps = false;
    protected $primaryKey = 'group_id';
}
