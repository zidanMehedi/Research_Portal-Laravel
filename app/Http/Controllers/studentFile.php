<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UploadRequest;
use App\file;
use App\student;
use App\research_group;
use App\student_thesis;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class studentFile extends Controller
{
    public function uploadIndex(){
       return view('student.upload.content');
    }

    public function upload(UploadRequest $req){
         $val = $req->validated();
        if($val==null){
            return back()->withError($val)
                         ->withInput();
        }else{
            $group = DB::table('student_thesis')
                    ->join('research_group','research_group.group_id','=','student_thesis.group_id')
                    ->join('student','student.sid','=','student_thesis.sid')
                    ->where('student.student_id',$req->session()->get('username'))
                    ->first();
            if($group!=null){
                $upload = new file();
                $upload->fileName = $req->session()->get('username').'_'.random_int(100000000, 999999999).'_'.$req->file('myFile')->getClientOriginalName();
                $upload->filePath = $req->file('myFile')->store('public/upload/student');
                $upload->group_id = $group->group_id;
                if($upload->save()){
                    $req->session()->flash('uploadSuccess','File Uploaded Successfully!');
                    return view('student.upload.content');
                }else{
                    $req->session()->flash('uploadError','Upload Failed!');
                    return view('student.upload.content');
                }
            }else{
                $req->session()->flash('permision','You are not permitted to upload files!');
                return view('student.upload.content');
            } 
        }
    }

    public function downloadIndex(Request $req){
    	$group = DB::table('student_thesis')
    				->join('research_group','research_group.group_id','=','student_thesis.group_id')
    				->join('student','student.sid','=','student_thesis.sid')
    				->where('student.student_id',$req->session()->get('username'))
    				->first();
    	if($group==null){
    		$req->session()->flash('group_alert','Oops! You have no group yet!!');
    		return view('student.download.content');
    	}
    	$files = file::where('group_id',$group->group_id)->get();
    	if(count($files)==0){
    		$req->session()->flash('group_alert','No Files to Download');
    		return view('student.download.content');
    	}
    	return view('student.download.content')->with(['files'=>$files]);
    }

    public function download($file){
        $myFile = file::find($file);
        return Storage::download($myFile->filePath, $myFile->fileName);
    }
}
