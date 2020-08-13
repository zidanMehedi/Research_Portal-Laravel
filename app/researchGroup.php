<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class researchGroup extends Model
{
    protected $table = "research_group";
    public $timestamps = false;
    protected $primaryKey = 'group_id';
}
