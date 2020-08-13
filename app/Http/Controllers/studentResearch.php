<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\domain_research;
use App\thesis_type;
use App\faculty;
use App\student;
use App\sub_domain;
use App\student_thesis;
use App\semester;
use App\research_group;
use App\file;
use Illuminate\Support\Facades\DB;

class studentResearch extends Controller
{
     public function index(Request $req){

     	$student = student::where('student_id', $req->session()->get('username'))->first();
     	$thesis = DB::table('student_thesis')
     				->join('student','student_thesis.sid','=','student.sid')
     				->join('research_group','student_thesis.group_id','=','research_group.group_id')
     				->join('semester','student_thesis.sem_id','=','semester.sem_id')
     				->where('student_thesis.sid', $student->sid)
     				->first();
    	if($thesis==null){
    		return view('student.myResearch.content')->with(['thesis'=>$thesis]);
    	}
    	$topic = DB::table('sub_domain')
     			   ->join('research_group','sub_domain.subDom_id','=','research_group.subDom_id')
     			   ->join('faculty','sub_domain.fid','=','faculty.fid')
     			   ->join('domain_research','sub_domain.dom_id','=','domain_research.dom_id')
     			   ->join('thesis_type','sub_domain.type_id','=','thesis_type.type_id')
     			   ->where('group_id',$thesis->group_id)
     			   ->first();
    	return view('student.myResearch.content')->with(['thesis'=>$thesis, 'topic'=>$topic]);
    }

    public function groupMembers(Request $req){
        $student = student::where('student_id', $req->session()->get('username'))->first();
        $group = student_thesis::where('sid',$student->sid)->first();
        if($group==null){
            return view('student.group.content')->with(['group'=>$group]);
        }
        $groupMember = DB::table('student_thesis')
                          ->join('student','student.sid','=','student_thesis.sid')
                          ->where('group_id',$group->group_id)->get();

        return view('student.group.content')->with(['group'=>$groupMember]);
    }
}
