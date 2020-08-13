<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\verification;
use App\student;
use App\user;

class adminApproveStudentList extends Controller
{
    public function index(){

        $student = DB::select("select verification.ver_id, verification.ver_fileName, student.* from verification, student where verification.sid = student.sid");

        return view('admin.adminPendingStudentList.index', ['penStudent'=>$student]);
    }


    public function studentProfile($id){
        
        $student = student::all()->where('sid', $id)->first();
        return view('admin.adminPendingStudentList.profile', $student);
    }


    public function download($id){

	    $file= public_path(). "/storage/upload/verification/".$id;

        return Response::download($file, $id);
	}


	public function accept($id){
        
        $student = student::all()->where('sid', $id)->first();
        return view('admin.adminPendingStudentList.accept', $student);
    }


    public function acceptDone($id, Request $req){

        if(DB::table('student')->where('sid', $id)->update(['status' => 1])){
        	if(DB::table('verification')->where('sid', '=' , $id)->delete()){
        		return redirect()->route('approveStudentList.index');
	        }else{
	            return redirect()->route('adminStudentApprovalAccept', $id);
	        }
        }else{
            return redirect()->route('adminStudentApprovalAccept', $id);
        }
    }


    public function decline($id){
        
        $student = student::all()->where('sid', $id)->first();
        return view('admin.adminPendingStudentList.decline', $student);
    }


    public function declineDone($id, Request $req){

    	$student = student::find($id);
        
    	if(DB::table('verification')->where('sid', '=' , $id)->delete()){
            if(DB::table('student')->where('sid', '=' , $id)->delete()){
            	if(DB::table('user')->where('user_id_name', '=' , $student['student_id'])->delete()){
	            	return redirect()->route('approveStudentList.index');
		        }else{
		            return redirect()->route('adminStudentApprovalDecline', $id);
		        }
	        }else{
	            return redirect()->route('adminStudentApprovalDecline', $id);
	        }
        }else{
            return redirect()->route('adminStudentApprovalDecline', $id);
        }
       
    }
}
