<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\domain_research;
use App\faculty;
use App\student;
use App\thesis_type;
use App\sub_domain;
use App\student_thesis;
use App\research_group;
use App\semester;
use App\file;
use Illuminate\Support\Facades\DB;

class studentTopicsWindow extends Controller
{
    public function index(){

    	$subDom = DB::table('sub_domain')
    				->join('domain_research','sub_domain.dom_id','=','domain_research.dom_id')
    				->join('faculty','sub_domain.fid','=','faculty.fid')
    				->join('thesis_type','sub_domain.type_id','=','thesis_type.type_id')
    				->get();
    	return view('student.topics.Available.content')->with(['subDom'=>$subDom]);
    }

    public function topicDetails(Request $req, $id){
        $thesis = DB::table('student')
                    ->join('student_thesis','student_thesis.sid','=','student.sid')
                    ->where('student_id', $req->session()->get('username'))
                    ->first();
    	$subDom = DB::table('sub_domain')
    				->join('domain_research','sub_domain.dom_id','=','domain_research.dom_id')
    				->join('faculty','sub_domain.fid','=','faculty.fid')
    				->join('thesis_type','sub_domain.type_id','=','thesis_type.type_id')
    				->where('subDom_id',$id)
    				->first();
    	return view('student.topics.Details.content')->with(['subDom'=>$subDom, 'thesis'=>$thesis]);
    }

       public function apply(Request $req){
        $subDom_id = $req->subDom_id;
        $group = research_group::find($subDom_id);
        $semester = semester::where('sem_status',1)->first();
        $student = student::where('student_id', $req->session()->get('username'))->first();
        $groupMembers = student_thesis::where('group_id',$group->group_id)->get();

        if(count($groupMembers)<4){
            $thesis = new student_thesis();
            $thesis->group_id = $group->group_id;
            $thesis->sid = $student->sid;
            $thesis->sem_id = $semester->sem_id;
            $thesis->subDom_id = $subDom_id;
            $thesis->file_id = null;
            $thesis->external = null;
            $thesis->thesis_progress = 0;
            $thesis->ext_status = 0;
            $thesis->save();

            return redirect()->route('studentResearch');
        }else{
            $req->session()->flash('groupMember', 'This topic has already been booked for a group! Try Another One.');
            return back();
        }

        //echo count($groupMembers);
    }

     public function search($value){
        $subDom = DB::table('sub_domain')
                ->join('domain_research','sub_domain.dom_id','=','domain_research.dom_id')
                ->join('faculty','sub_domain.fid','=','faculty.fid')
                ->join('thesis_type','sub_domain.type_id','=','thesis_type.type_id')
                ->where('subDom_name', 'like', '%' . $value . '%')
                ->orWhere('type_name', 'like', '%' . $value . '%')
                ->orWhere('dom_name', 'like', '%' . $value . '%')
                ->orWhere('faculty_fname', 'like', '%' . $value . '%')
                ->orWhere('faculty_lname', 'like', '%' . $value . '%')
                ->get();


        return view('student.topics.Search.search')->with(['subDom'=>$subDom]);
    }
}
