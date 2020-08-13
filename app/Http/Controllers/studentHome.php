<?php

namespace App\Http\Controllers;

use App\student;
use Illuminate\Http\Request;
use App\Http\Requests\StudentRequest;

class studentHome extends Controller
{
    public function index(Request $req)
    {
        $student = student::where('student_id', $req->session()->get('username'))->first();
        $req->session()->put('sid', $student->sid);
        return view('student.home.content', $student);
    }

    public function update(StudentRequest $request)
    {
        $val = $request->validated();

        if($val==null){
            return back()->withError($val)->withInput();
            //print("Something wrong");
        }else{
            //echo $request->student_lname;
            $student=student::findOrfail($request->session()->get('sid'));
            $student->student_fname = $request->student_fname;
            $student->student_lname = $request->student_lname;
            $student->student_dept = $request->student_dept;
            $student->student_credit = $request->student_credit;
            $student->student_cgpa = $request->student_cgpa;
            $student->student_contact = $request->student_contact;
            $student->save();
            $request->session()->flash('updateMssg', 'Update Successful!');
            return redirect()->route('studentHome');
        }
        

    }
}
