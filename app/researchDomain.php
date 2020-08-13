<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class researchDomain extends Model
{
    protected $table = "domain_research";
    public $timestamps = false;
    protected $primaryKey = 'dom_id';
}
