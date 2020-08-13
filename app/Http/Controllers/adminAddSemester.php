<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\semesterRequest;
use Illuminate\Support\Facades\DB;
use App\semester;

class adminAddSemester extends Controller
{
    public function index(){

    	return view('admin.adminAddSemester.index');
    }


    public function addSemester(semesterRequest $req){

    	$semester 				= new semester();
        $semester->sem_name     = $req->name;
        $semester->sem_status   = 1;


        if($semester->save()){
        	$semesterId = DB::table('semester')->max('sem_id');
        	if (DB::table('semester')->where('sem_id', '!=' , $semesterId)->update(['sem_status' => 0])){
        	    return redirect()->route('semesterList.index');
        	}else{
        		return redirect()->route('adminAddSemester.index');
        	}    
        }else{
            return redirect()->route('adminAddSemester.index');
        }
    }
}
