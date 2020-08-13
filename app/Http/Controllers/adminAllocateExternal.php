<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\allocateExternalRequest;
use Illuminate\Support\Facades\DB;
use App\researchGroup;
use App\faculty;
use App\studentThesis;


class adminAllocateExternal extends Controller
{
	public function index(){
        
        $groups = researchGroup::all();
        $teachers = faculty::all()->where('status',1);

        return view('admin.adminAllocateExternal.index', ['group'=>$groups, 'teacher'=>$teachers]);
    }


    public function allocate(allocateExternalRequest $req){


    	if (DB::table('student_thesis')->where('group_id', '=' , $req->group)->update(['external' => $req->external, 'ext_status' => 1])){
    	    return redirect()->route('thesisList.index');
    	}else{
    		return redirect()->route('adminAllocateExternal.index');
    	}    
        
    }
}

