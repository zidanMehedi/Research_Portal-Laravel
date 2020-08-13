<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\student;
use Illuminate\Support\Facades\DB;

class login extends Controller
{
    public function index(){
    	return view('generalLogin.content');
    }


    public function verify(Request $req){
    	$role = DB::table('user')
                   ->where('user.user_id_name',  $req->uname)
                   ->where('user.password', $req->password)
                   ->first();
    	
    	//print_r($role);
    	if($role!=null){

    		if($role->rid==3){
    			$user1 = DB::table('user')
                   ->join('student', 'user.user_id_name','=','student.student_id')
                   ->where('user.user_id_name',  $req->uname)
                   ->where('user.password', $req->password)
                   ->select('student.status AS stdStat')
                   ->first();
    			if($user1->stdStat!=1){
                    $req->session()->flash('msg', 'Your account is not activated yet!!');
                    return redirect('/login');
                }else{
                	$req->session()->put('username', $req->uname);
    				$req->session()->put('password', $req->password);
                	$req->session()->flash('welcome', 'Welcome');
                	return redirect()->route('studentHome');
                }
    		}elseif ($role->rid==2) {
    			$user2 = DB::table('user')
                   ->join('faculty', 'user.user_id_name','=','faculty.faculty_id')
                   ->where('user.user_id_name',  $req->uname)
                   ->where('user.password', $req->password)
                   ->select('faculty.status AS facStat')
                   ->first();
    			if($user2->facStat!=1){
                    $req->session()->flash('msg', 'Your account is temporary blocked!!');
                    return redirect('/login');
                }else{
                	$req->session()->put('username', $req->uname);
    				$req->session()->put('token', md5(md5($req->password)));
    				return redirect('/home');
                }
    		}elseif ($role->rid==1) {
    			$req->session()->put('username', $req->uname);
	    		$req->session()->put('password', $req->password);
	    		return redirect()->route('adminHome.index');
    		}
    	}else{
    		$req->session()->flash('msg', 'Invalid Username or Password');
    		return redirect('/login');
    	}

    }
}