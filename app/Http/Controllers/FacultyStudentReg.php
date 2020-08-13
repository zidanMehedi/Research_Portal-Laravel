<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Student;

class FacultyStudentReg extends Controller
{
    public function studRegView()
    {
    	return view('faculty.addStudent.content');
    }

    public function addStudent(Request $req)
    {
    	$validate = Validator::make($req->all(), [
            'userId' => 'required|regex:/[0-9][0-9]-[0-9][0-9][0-9][0-9][0-9]-[1-3]/',
            'fname' => 'required',
            'lname' => 'required',
            'phnNo' => 'required',
            'cgpa' => 'required',
            'email' => 'required|email',
            'dept' => 'required',
            'credit' => 'required|integer'
        ]);

    	if ($validate->fails()) {
    		return redirect('/studentReg')
                        ->withErrors($validate)
                        ->withInput();
    	}
    	else
    	{
    		$stu = new Student;
    		$stu->sid = NULL;
    		$stu->student_id = $req->userId;
    		$stu->student_fname = $req->fname;
    		$stu->student_lname = $req->lname;
    		$stu->student_email = $req->email;
    		$stu->student_contact = $req->phnNo;
    		$stu->student_credit = $req->credit;
    		$stu->student_regDate = date("Y-m-d");
    		$stu->student_dept = $req->dept;
    		$stu->student_cgpa = $req->cgpa;
    		$stu->status = 1;

    		if ($stu->save()) {
    			return redirect('/studentReg')
                        ->withErrors('New Student Added');
    		}
    		else
    		{
    			print('Something Wrong');
    		}

    	}
    }
}
