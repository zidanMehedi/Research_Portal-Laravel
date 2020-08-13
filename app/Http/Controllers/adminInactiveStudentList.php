<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;

class adminInactiveStudentList extends Controller
{
    public function index(){

		$students = student::all()->where('status', 0);
    			
    	return view('admin.adminInactiveStudentList.index', ['student'=>$students]);
    }
}
