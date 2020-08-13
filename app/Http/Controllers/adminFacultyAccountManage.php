<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\faculty;

class adminFacultyAccountManage extends Controller
{
    public function facultyBlock($id){
        
        $faculty = faculty::all()->where('fid', $id)->first();
        return view('admin.adminFacultyOperation.block', $faculty);
    }


    public function facultyBlockDone($id, Request $req){
        if(DB::table('faculty')->where('fid', $id)->update(['status' => 0])){
            return redirect()->route('activeFacultyList.index');
        }else{
            return redirect()->route('adminBlockFaculty', $id);
        }
    }


    public function facultyUnblock($id){
        
        $faculty = faculty::all()->where('fid', $id)->first();
        return view('admin.adminFacultyOperation.unblock', $faculty);
    }


    public function facultyUnblockDone($id, Request $req){
        if(DB::table('faculty')->where('fid', $id)->update(['status' => 1])){
            return redirect()->route('inactiveFacultyList.index');
        }else{
            return redirect()->route('adminUnblockFaculty', $id);
        }
    }
}
