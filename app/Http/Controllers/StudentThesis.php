<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Student_thesis;

class StudentThesis extends Controller
{
    public function index(Request $req)
    {
    	$progress = DB::select("SELECT DISTINCT student_thesis.group_id,sub_domain.subDom_name,student_thesis.thesis_progress,semester.sem_name FROM student_thesis,sub_domain,semester WHERE semester.sem_id=student_thesis.sem_id AND student_thesis.subDom_id=sub_domain.subDom_id AND sub_domain.fid=(SELECT fid FROM faculty WHERE faculty_id='".$req->session()->get('username')."')");

    	return view('faculty.progress.progressUpdate',['data'=>$progress]);
    }


    public function updateView(Request $req,$id)
    {
    	$group = DB::select("SELECT DISTINCT student_thesis.group_id,sub_domain.subDom_name,student_thesis.thesis_progress,semester.sem_name FROM student_thesis,sub_domain,semester WHERE semester.sem_id=student_thesis.sem_id AND student_thesis.subDom_id=sub_domain.subDom_id AND sub_domain.fid=(SELECT fid FROM faculty WHERE faculty_id=?) and student_thesis.group_id=?",[$req->session()->get('username'),$id]);

    	return view('faculty.progress.content',['data'=>$group]);
    }



    public function update(Request $req,$id)
    {

    	$validate = Validator::make($req->all(), [
            'progressValue' => 'required|integer|between:0,100'
        ]);

    	if ($validate->fails()) {
    		return redirect('/progressUpdate/update/'.$id)
                        ->withErrors($validate);
    	}
    	else
    	{
    		$update = Student_thesis::where('group_id',$id)->first();
    		$update->thesis_progress = $req->progressValue;
    		
    		if ($update->save()) {
    			return redirect('/progressUpdate')
                        ->withErrors('Progress update success');
    		}
    		else
    		{
    			return redirect('/progressUpdate/update/'.$id)
                        ->withErrors('Something wrong');
    		}
    	}


    }
}
