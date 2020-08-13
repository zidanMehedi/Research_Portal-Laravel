<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Student;

class StudentDetails extends Controller
{
    public function index()
    {
    	$student = Student::all();
    	return view('faculty.studentDetails.content',['details'=>$student]);
   }


   public function studentApproveView()
   {
   		$student = DB::select('SELECT * FROM verification,student where verification.sid=student.sid and student.status=0');
    	 return view('faculty.studentApprove.content',['details'=>$student]);
   }

   public function approveStudent($id)
   {
   		$stu = Student::where('sid',$id)->first();

   		$stu->status = 1;

   		if ($stu->save()) {
   			return redirect('/studentApproval');
   		}
   		else
   		{
   			print('Something Wrong');
   		}
   }

   public function studentSearch($id)
   {
      $details = DB::select("Select * from student where student_id like '%".$id."%' or student_email like '%".$id."%' or student_cgpa like '%".$id."%' or student_dept like '%".$id."%' or student_fname like '%".$id."%' or student_lname like '%".$id."%'");


     return view('faculty.ajaxSearch.ajaxStudDetails',['details'=>$details]);

   }

   public function inactiveStudentSearch($id)
   {
      $details = DB::select("SELECT * FROM student,verification WHERE student.sid in (SELECT sid from student WHERE status=0) AND verification.sid=student.sid AND student_id LIKE '%".$id."%'");


     return view('faculty.ajaxSearch.ajaxInactiveStudDetails',['details'=>$details]);

   }
}
