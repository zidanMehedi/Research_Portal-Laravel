<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ChangePassRequest;
use App\user;
use App\Student;

class studentPassword extends Controller
{
    public function index(){
    	return view('student.changePassword.content');
    }

    public function update(ChangePassRequest $req){
        $val = $req->validated();
        if($val==null){
            return back()->withError($val);
        }
    	else{
            
            $user = user::where('user_id_name',$req->session()->get('username'))->first();
            if($user->password!=$req->oldPass){
                $req->session()->flash('old','Old Password is incorrect!');
                return back();
            }
            else{
                $user->password = $req->newPass;
                $user->save();
                $req->session()->flash('success', 'Password Updated! You Must Login Again');
                return redirect('/login');
            }
        }
    }
}

