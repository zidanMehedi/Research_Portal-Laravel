<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\faculty;

class adminActiveFacultyList extends Controller
{

	public function index(){

		$faculties = faculty::all()->where('status', 1);
    			
    	return view('admin.adminActiveFacultyList.index', ['faculty'=>$faculties]);
    }
    

}    

