<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\researchDomainRequest;
use Illuminate\Support\Facades\DB;
use App\researchDomain;

class adminAddDomain extends Controller
{
    public function index(){

    	return view('admin.adminAddDoamin.index');
    }


    public function addDomain(researchDomainRequest $req){

    	$domain 				= new researchDomain();
        $domain->dom_name     	= $req->name;
        $domain->dom_desc     	= $req->des;


        if($domain->save()){
        	return redirect()->route('domainList.index');
        	
        }else{
            return redirect()->route('adminAddDomain.index');
        }
    }
}
