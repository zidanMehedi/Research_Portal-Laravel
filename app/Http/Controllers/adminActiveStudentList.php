<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;

class adminActiveStudentList extends Controller
{

	public function index(){

		$students = student::all()->where('status', 1);
    			
    	return view('admin.adminActiveStudentList.index', ['student'=>$students]);
    }
}
