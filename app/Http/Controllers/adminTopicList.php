<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\topicRequest;
use Illuminate\Support\Facades\DB;
use App\subDomain;
use App\researchDomain;
use App\faculty;
use App\thesisType;
use App\researchGroup;

class adminTopicList extends Controller
{
    public function index(){

        $topics = DB::select("select sub_domain.subDom_id,sub_domain.subDom_name,sub_domain.subDom_desc,thesis_type.type_name,domain_research.dom_name,faculty.faculty_fname,faculty.faculty_lname from sub_domain,thesis_type,domain_research,faculty where sub_domain.type_id=thesis_type.type_id and sub_domain.dom_id=domain_research.dom_id and sub_domain.fid=faculty.fid");

        return view('admin.adminTopicList.index', ['topic'=>$topics]);
    }


    public function topicUpdate($id){
        
        $topics = subDomain::find($id);
        $one_domain = researchDomain::find($topics['dom_id']);
        $one_faculty = faculty::find($topics['fid']);
        $one_type = thesisType::find($topics['type_id']);
        $domains = researchDomain::all();
        $teachers = faculty::all()->where('status',1);
        $types = thesisType::all();
        return view('admin.adminTopicList.update', ['topic'=>$topics, 'onedomain'=>$one_domain, 'onefaculty'=>$one_faculty, 'onetype'=>$one_type, 'domain'=>$domains, 'teacher'=>$teachers, 'type'=>$types]);
    }


    public function topicUpdateDone($id, topicRequest $req){

        $topic 					= subDomain::all()->where('subDom_id', $id)->first();
        $topic->subDom_name 	= $req->name;
        $topic->subDom_desc 	= $req->description;
        $topic->type_id 		= $req->type;
        $topic->dom_id 			= $req->domain;
        $topic->fid 			= $req->supervisor;
    

        if($topic->save()){
            return redirect()->route('topicList.index');
        }else{
            return redirect()->route('adminUpdateTopic', $id);
        }
    }


    public function topicDelete($id){
        
        $topics = subDomain::find($id);
        $one_domain = researchDomain::find($topics['dom_id']);
        $one_faculty = faculty::find($topics['fid']);
        $one_type = thesisType::find($topics['type_id']);

        return view('admin.adminTopicList.delete', ['topic'=>$topics, 'onedomain'=>$one_domain, 'onefaculty'=>$one_faculty, 'onetype'=>$one_type]);
    }


    public function topicDeleteDone($id, Request $req){

        if(DB::table('research_group')->where('subDom_id', '=' , $id)->delete()){ 
        	if(DB::table('sub_domain')->where('subDom_id', '=' , $id)->delete()){  
            	return redirect()->route('topicList.index');
	        }else{
	            return redirect()->route('adminDeleteTopic', $id);
	        } 
        }else{
            return redirect()->route('adminDeleteTopic', $id);
        }
    }
}
