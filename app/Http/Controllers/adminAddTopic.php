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


class adminAddTopic extends Controller
{
    public function index(){
        
        $domains = researchDomain::all();
        $teachers = faculty::all()->where('status',1);
        $types = thesisType::all();
        return view('admin.adminAddTopic.index', ['domain'=>$domains, 'teacher'=>$teachers, 'type'=>$types]);
    }


    public function addTopic(topicRequest $req){

        $subDomain 					= new subDomain();
        $subDomain->subDom_name 	= $req->name;
        $subDomain->subDom_desc 	= $req->description;
        $subDomain->type_id 		= $req->type;
        $subDomain->dom_id     		= $req->domain;
        $subDomain->fid   			= $req->supervisor;



        if($subDomain->save()){

        	$subDomId 			= DB::table('sub_domain')->max('subDom_id');
        	$group 				= new researchGroup();		
        	$group->subDom_id 	= $subDomId;

        	if ($group->save()){
        	    return redirect()->route('topicList.index');
        	}else{
        		return redirect()->route('adminAddTopic.index');
        	}    
        }else{
            return redirect()->route('adminAddTopic.index');
        }
    }
}
