<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\thesisTypeRequest;
use Illuminate\Support\Facades\DB;
use App\thesisType;

class adminAddThesisType extends Controller
{
    public function index(){

    	return view('admin.adminAddThesisType.index');
    }


    public function addThesisType(thesisTypeRequest $req){

    	$thesis 				= new thesisType();
        $thesis->type_name     	= $req->name;


        if($thesis->save()){
        	return redirect()->route('thesisList.index');
        	
        }else{
            return redirect()->route('adminAddThesisType.index');
        }
    }
}
