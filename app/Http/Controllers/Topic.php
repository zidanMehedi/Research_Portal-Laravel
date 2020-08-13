<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Thesis_type;
use App\Sub_domain;
use App\Domain_research;
use App\Faculty;
use App\Research_group;

class Topic extends Controller
{
    public function index(Request $req)
    {
    	$type = Thesis_type::all();
    	$domain = Domain_research::all();
    	$faculty = Faculty::where('faculty_id',$req->session()->get('username'))->first();

    	return view('faculty.topicAdd.content',['type'=>$type,
												'domain'=>$domain,
												'faculty'=>$faculty]);
    }

    public function addTopic(Request $req)
    {
    	$validate = Validator::make($req->all(), [
            'topicName' => 'required',
            'type' => 'required',
            'domain' => 'required',
            'topicDes' => 'required',
        ]);

    	if ($validate->fails()) {
    		return redirect('/topicAdd')
                        ->withErrors($validate)
                        ->withInput();
    	}
    	else
    	{
    		$SD = new Sub_domain;
    		$SD->subDom_id = NULL;
    		$SD->subDom_name = $req->topicName;
    		$SD->subDom_desc = $req->topicDes;
    		$SD->type_id = $req->type;
    		$SD->dom_id = $req->domain;
    		$SD->fid = $req->supervisor;

    		

    		if ($SD->save()) {
    			$group = new Research_group;
    			$id = Sub_domain::orderBy('subDom_id', 'desc')->first();
    			$group->group_id = NULL;
    			$group->subDom_id = $id['subDom_id'];
    			if ($group->save()) {
    				return redirect('/topicAdd')
                        ->withErrors('New Topic Added');
    			}
    			else
    			{
    				return redirect('/topicAdd')
                        ->withErrors('Something Wrong');
    			}
    			
    		}
    		else
    		{
    			return redirect('/topicAdd')
                        ->withErrors('Something Wrong');
    		}

    	}
    }


    public function viewTopic(Request $req)
    {

    	$faculty = Faculty::where('faculty_id',$req->session()->get('username'))->first();
    	$fid = $faculty['fid'];
    	$details = DB::select('SELECT * FROM sub_domain,research_group,domain_research,thesis_type WHERE sub_domain.dom_id=domain_research.dom_id AND sub_domain.subDom_id=research_group.subDom_id AND thesis_type.type_id=sub_domain.type_id AND sub_domain.fid=? order by research_group.group_id ASC',[$fid]);
    	  

    	 return view('faculty.viewTopic.content',['details'=>$details]);
    }


    public function viewAbotTopic(Request $req,$id)
    {
        $data = DB::select("Select * from student_thesis,student,semester,sub_domain,thesis_type,domain_research WHERE student.sid=student_thesis.sid and semester.sem_id=student_thesis.sem_id AND sub_domain.type_id=thesis_type.type_id AND sub_domain.dom_id=domain_research.dom_id AND group_id=?",[$id]);

       $student = DB::select("Select DISTINCT student.student_id,student.student_fname,student.student_lname,student.student_email,student.student_contact from student_thesis,student,semester,sub_domain,thesis_type,domain_research WHERE student.sid=student_thesis.sid and semester.sem_id=student_thesis.sem_id AND sub_domain.type_id=thesis_type.type_id AND sub_domain.dom_id=domain_research.dom_id AND group_id=?",[$id]);

       $groupFile = DB::select("Select * from file where group_id=?",[$id]);


        return view('faculty.topicDetails.content',['data'=>$data,'data1'=>$student,'files'=>$groupFile,'id'=>$id-1]);
    }

    public function ajaxSemWiseTopic(Request $req,$id)
    {
        $faculty = Faculty::where('faculty_id',$req->session()->get('username'))->first();
        $fid = $faculty['fid'];
        $details = DB::select('SELECT DISTINCT sub_domain.subDom_id,sub_domain.subDom_name,thesis_type.type_name,domain_research.dom_desc,student_thesis.group_id,domain_research.dom_name FROM student_thesis,semester,sub_domain,domain_research,thesis_type WHERE semester.sem_id=student_thesis.sem_id AND sub_domain.subDom_id=student_thesis.subDom_id AND domain_research.dom_id=sub_domain.dom_id AND sub_domain.type_id=thesis_type.type_id AND sub_domain.fid=? AND semester.sem_id=? ORDER BY student_thesis.group_id
         ASC',[$fid,$id]);

         return view('faculty.ajaxSearch.ajaxSemesterDetails',['details'=>$details]);
    }

    public function SemWiseTopic()
    {
        
        $data = DB::select('SELECT * from semester');
        return view('faculty.semesterWiseTopic.content',['sem'=>$data]);
    }

}
