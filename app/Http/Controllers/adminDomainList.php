<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\researchDomainRequest;
use Illuminate\Support\Facades\DB;
use App\researchDomain;

class adminDomainList extends Controller
{
    public function index(){

		$domains = researchDomain::all();
    			
    	return view('admin.adminDomainList.index', ['domain'=>$domains]);
    }


    public function domainUpdate($id){
        
        $domain = researchDomain::all()->where('dom_id', $id)->first();
        return view('admin.adminDomainList.update', $domain);
    }


    public function domainUpdateDone($id, researchDomainRequest $req){

        $domain 			= researchDomain::all()->where('dom_id', $id)->first();
        $domain->dom_name 	= $req->name;
        $domain->dom_desc 	= $req->des;
    

        if($domain->save()){
            return redirect()->route('domainList.index');
        }else{
            return redirect()->route('adminUpdateDomain', $id);
        }
    }


    public function domainDelete($id){
        
        $domain = researchDomain::all()->where('dom_id', $id)->first();
        return view('admin.adminDomainList.delete', $domain);
    }


    public function domainDeleteDone($id, Request $req){

        if(DB::table('domain_research')->where('dom_id', '=' , $id)->delete()){  
            return redirect()->route('domainList.index');

        }else{
            return redirect()->route('adminDeleteDomain', $id);
        }
    }
}
