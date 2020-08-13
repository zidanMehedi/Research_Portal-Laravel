<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\semesterRequest;
use Illuminate\Support\Facades\DB;
use App\semester;

class adminSemesterList extends Controller
{
    public function index(){

		$semesters = semester::all();
    			
    	return view('admin.adminSemesterList.index', ['semester'=>$semesters]);
    }


    public function semesterUpdate($id){
        
        $semester = semester::all()->where('sem_id', $id)->first();
        return view('admin.adminSemesterList.update', $semester);
    }


    public function semesterUpdateDone($id, semesterRequest $req){

        $semester 				= semester::all()->where('sem_id', $id)->first();
        $semester->sem_name 	= $req->name;
    

        if($semester->save()){
            return redirect()->route('semesterList.index');
        }else{
            return redirect()->route('adminUpdateSemester', $id);
        }
    }


    public function semesterDelete($id){
        
        $semester = semester::all()->where('sem_id', $id)->first();
        return view('admin.adminSemesterList.delete', $semester);
    }


    public function semesterDeleteDone($id, Request $req){

        if(DB::table('semester')->where('sem_id', '=' , $id)->delete()){  
            return redirect()->route('semesterList.index');

        }else{
            return redirect()->route('adminDeleteSemester', $id);
        }
    }
}
