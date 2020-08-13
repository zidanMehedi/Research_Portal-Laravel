<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\thesisTypeRequest;
use Illuminate\Support\Facades\DB;
use App\thesisType;

class adminThesisTypeList extends Controller
{
    
	public function index(){

		$types = thesisType::all();
    			
    	return view('admin.adminThesisTypeList.index', ['type'=>$types]);
    }


    public function thesisTypeUpdate($id){
        
        $type = thesisType::all()->where('type_id', $id)->first();
        return view('admin.adminThesisTypeList.update', $type);
    }


    public function thesisTypeUpdateDone($id, thesisTypeRequest $req){

        $type 				= thesisType::all()->where('type_id', $id)->first();
        $type->type_name 	= $req->name;
    

        if($type->save()){
            return redirect()->route('thesisTypeList.index');
        }else{
            return redirect()->route('adminUpdateThesisType', $id);
        }
    }


    public function thesisTypeDelete($id){
        
        $type = thesisType::all()->where('type_id', $id)->first();
        return view('admin.adminThesisTypeList.delete', $type);
    }


    public function thesisTypeDeleteDone($id, Request $req){

        if(DB::table('thesis_type')->where('type_id', '=' , $id)->delete()){  
            return redirect()->route('thesisTypeList.index');

        }else{
            return redirect()->route('adminDeleteThesisType', $id);
        }
    }

}
