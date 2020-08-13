<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\studentRegisterRequest;
use App\student;
use App\user;

class adminAddStudent extends Controller
{
    public function index(){

    	return view('admin.adminAddStudent.index');
    }


    public function studentRegister(studentRegisterRequest $req){

    	$random = str_shuffle('abcdefghjklmnopqrstuvwxyzABCDEFGHJKLMNOPQRSTUVWXYZ234567890!$%^&!$%^&');
		$randomPassword = substr($random, 0, 10);

        $student 					= new student();
        $student->student_id 		= $req->userid;
        $student->student_fname 	= $req->fname;
        $student->student_lname 	= $req->lname;
        $student->student_email     = $req->email;
        $student->student_contact   = $req->contact;
        $student->student_credit   	= $req->credit;
        $student->student_cgpa   	= $req->cgpa;
        $student->student_regDate   = date("Y-m-d");
        $student->student_dept     	= $req->dept;
        $student->status     		= 1;


        $user 					= new user();		
        $user->user_id_name 	= $req->userid;
        $user->password 		= $randomPassword;
        $user->rid 				= 3;


        if($student->save()){
        	if ($user->save()){
        	    return redirect()->route('activeStudentList.index');
        	}else{
        		return redirect()->route('adminAddStudent.index');
        	}    
        }else{
            return redirect()->route('adminAddStudent.index');
        }
    }
}