<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\File;
use App\Verification;

class FileUpload extends Controller
{
    public function index(Request $req)
    {
    	$group = DB::select("SELECT * FROM semester WHERE sem_status=1");

    	return view('faculty.uploadFile.content',['sem'=>$group]);
    }

    public function semWise($id,Request $req)
    {
    	$data = DB::select("SELECT * FROM sub_domain,research_group,domain_research,thesis_type,semester WHERE sub_domain.dom_id=domain_research.dom_id AND sub_domain.subDom_id=research_group.subDom_id AND thesis_type.type_id=sub_domain.type_id AND sub_domain.fid=(SELECT fid FROM faculty WHERE faculty.faculty_id=?) AND semester.sem_id=".$id." order by research_group.group_id ASC",[$req->session()->get('username')]);

    	return view('faculty.ajaxSearch.ajaxDomainSem',['data'=>$data]);
    }

    public function uploadFile(Request $req)
    {
        $validate = Validator::make($req->all(), [
            'file' => 'required|mimes:pdf,doc,docx,txt|max:5600',
            'sem' => 'required',
            'gid' => 'required'
        ]);

        if ($validate->fails()) {
            return redirect('/uploadFiles')
                        ->withErrors($validate);
        }
        else
        {
            $upload = new File();
            $upload->fileName = $req->session()->get('username').'_'.'Group_No.-'.$req->group_id.'_'.$req->file('file')->getClientOriginalName();
        $upload->pathName = $req->file('file')->store('public/upload/faculty');
        $upload->group_id = $req->gid;

        if($upload->save()){

            return redirect('/uploadFiles')
                        ->withErrors('File upload Success');
        }else{
            
            return redirect('/uploadFiles')
                        ->withErrors("File upload failed");
        }
        }
    }




    public function downloadVer($id)
    {
        $file = Verification::WHERE('ver_fileName',$id)->first();


     return Storage::download($file->pathName,$file->ver_fileName);
    }


    public function downloadUpFile($id)
    {
        $file = File::WHERE('fileName',$id)->first();
        return Storage::download($file->pathName,$file->fileName);
    }


}
