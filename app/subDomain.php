<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subDomain extends Model
{
    protected $table = "sub_domain";
    public $timestamps = false;
    protected $primaryKey = 'subDom_id';
}
