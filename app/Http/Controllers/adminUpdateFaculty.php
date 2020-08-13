<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\facultyRegisterRequest;
use App\faculty;

class adminUpdateFaculty extends Controller
{
    public function index($id){
        
        $faculty = faculty::all()->where('faculty_id', $id)->first();
        return view('admin.adminFacultyOperation.update', $faculty);
    }


    public function facultyUpdate($id, facultyRegisterRequest $req){

        $faculty 					= faculty::all()->where('faculty_id', $id)->first();
        $faculty->faculty_id        = $req->userid;
        $faculty->faculty_fname     = $req->fname;
        $faculty->faculty_lname     = $req->lname;
        $faculty->faculty_email     = $req->email;
        $faculty->faculty_contact   = $req->contact;
        

        if($faculty->save()){
            return redirect()->route('adminHome.index');
        }else{
            return redirect()->route('adminUpdateFaculty.index', $id);
        }
    }
}
