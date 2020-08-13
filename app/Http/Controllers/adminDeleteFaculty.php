<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\faculty;
use App\user;

class adminDeleteFaculty extends Controller
{
    public function index($id){
        
        $faculty = faculty::all()->where('faculty_id', $id)->first();
        return view('admin.adminFacultyOperation.delete', $faculty);
    }


    public function facultyDelete($id, Request $req){
        if(DB::table('faculty')->where('faculty_id', '=' , $id)->delete()){
            if(DB::table('user')->where('user_id_name', '=' , $id)->delete()){
            	return redirect()->route('adminHome.index');
	        }else{
	            return redirect()->route('adminDeleteFaculty.index', $id);
	        }
        }else{
            return redirect()->route('adminDeleteFaculty.index', $id);
        }
    }
}
