<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\studentRegisterRequest;
use Illuminate\Support\Facades\DB;
use App\student;

class adminStudentAccountManage extends Controller
{
    public function studentUpdate($id){
        
        $student = student::all()->where('student_id', $id)->first();
        return view('admin.adminStudentOperation.update', $student);
    }


    public function studentUpdateDone($id, studentRegisterRequest $req){

        $student 					= student::all()->where('student_id', $id)->first();
        $student->student_id        = $req->userid;
        $student->student_fname     = $req->fname;
        $student->student_lname     = $req->lname;
        $student->student_email     = $req->email;
        $student->student_contact   = $req->contact;
        $student->student_dept     	= $req->dept;
        $student->student_credit    = $req->credit;
        $student->student_cgpa   	= $req->cgpa;
        

        if($student->save()){
            return redirect()->route('adminHome.index');
        }else{
            return redirect()->route('adminUpdateStudent', $id);
        }
    }


    public function studentBlock($id){
        
        $student = student::all()->where('sid', $id)->first();
        return view('admin.adminStudentOperation.block', $student);
    }


    public function studentBlockDone($id, Request $req){
        if(DB::table('student')->where('sid', $id)->update(['status' => 0])){
            return redirect()->route('activeStudentList.index');
        }else{
            return redirect()->route('adminBlockStudent', $id);
        }
    }


    public function studentDelete($id){
        
        $student = student::all()->where('student_id', $id)->first();
        return view('admin.adminStudentOperation.delete', $student);
    }


    public function studentDeleteDone($id, Request $req){
        if(DB::table('student')->where('student_id', '=' , $id)->delete()){
            if(DB::table('user')->where('user_id_name', '=' , $id)->delete()){
            	return redirect()->route('adminHome.index');
	        }else{
	            return redirect()->route('adminDeleteStudent.index', $id);
	        }
        }else{
            return redirect()->route('adminDeleteStudent.index', $id);
        }
    }


    public function studentUnblock($id){
        
        $student = student::all()->where('sid', $id)->first();
        return view('admin.adminStudentOperation.unblock', $student);
    }


    public function studentUnblockDone($id, Request $req){
        if(DB::table('student')->where('sid', $id)->update(['status' => 1])){
            return redirect()->route('inactiveStudentList.index');
        }else{
            return redirect()->route('adminUnblockStudent', $id);
        }
    }
}
