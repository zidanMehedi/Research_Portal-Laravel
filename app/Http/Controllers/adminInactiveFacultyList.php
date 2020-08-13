<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\faculty;

class adminInactiveFacultyList extends Controller
{
    public function index(){

		$faculties = faculty::all()->where('status', 0);
    			
    	return view('admin.adminInactiveFacultyList.index', ['faculty'=>$faculties]);
    }
}
