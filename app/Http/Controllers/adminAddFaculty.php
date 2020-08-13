<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\facultyRegisterRequest;
use App\faculty;
use App\user;

class adminAddFaculty extends Controller
{
    public function index(){

    	return view('admin.adminAddFaculty.index');
    }


    public function facultyRegister(facultyRegisterRequest $req){

    	$random = str_shuffle('abcdefghjklmnopqrstuvwxyzABCDEFGHJKLMNOPQRSTUVWXYZ234567890!$%^&!$%^&');
		$randomPassword = substr($random, 0, 10);

        $faculty 					= new faculty();
        $faculty->faculty_id 		= $req->userid;
        $faculty->faculty_fname 	= $req->fname;
        $faculty->faculty_lname 	= $req->lname;
        $faculty->faculty_email     = $req->email;
        $faculty->faculty_contact   = $req->contact;
        $faculty->faculty_regDate   = date("Y-m-d");
        $faculty->faculty_dept     	= $req->dept;
        $faculty->status     		= 1;


        $user 					= new user();		
        $user->user_id_name 	= $req->userid;
        $user->password 		= $randomPassword;
        $user->rid 				= 2;


        if($faculty->save()){
        	if ($user->save()){
        	    return redirect()->route('activeFacultyList.index');
        	}else{
        		return redirect()->route('adminAddFaculty.index');
        	}    
        }else{
            return redirect()->route('adminAddFaculty.index');
        }
    }
}


