<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminThesisList extends Controller
{
    public function index(){

        $thesises = DB::select("select DISTINCT student_thesis.group_id,semester.sem_name,sub_domain.subDom_name,domain_research.dom_name,student_thesis.external,student_thesis.thesis_progress,faculty.faculty_fname,faculty.faculty_lname from student_thesis,semester,sub_domain,thesis_type,domain_research,faculty where student_thesis.sem_id=semester.sem_id and student_thesis.subDom_id=sub_domain.subDom_id and sub_domain.type_id=thesis_type.type_id and sub_domain.dom_id=domain_research.dom_id and sub_domain.fid=faculty.fid");

        return view('admin.adminThesisList.index', ['thesis'=>$thesises]);
    }


    public function groupDetails($id){

        $groups = DB::select("select student_thesis.group_id,student.student_id,student.student_fname,student.student_lname,student.student_email,student.student_contact,student.student_dept from student_thesis,student where student_thesis.sid=student.sid and student_thesis.group_id=?", [$id]);

        return view('admin.adminThesisList.groupData', ['group'=>$groups, 'mno'=>0]);
    }
}
