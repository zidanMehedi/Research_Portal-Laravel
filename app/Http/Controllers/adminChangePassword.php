<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ChangePasswordRequest;
use App\user;

class adminChangePassword extends Controller
{
    public function index(){
        
        return view('admin.adminChangePassword.index');
    }


    public function change(ChangePasswordRequest  $req){

        $user = user::where('user_id_name',$req->session()->get('username'))->first();
        if($user->password != $req->oldpass){
                $req->session()->flash('msg1', 'Old Password is incorrect!');
                return redirect('/admin/changePassword');
        }else{
        	if($req->newpass != $req->cnewpass){
                $req->session()->flash('msg2', 'New Password is not matched!');
                return redirect('/admin/changePassword');
            }else{
            	$user->password = $req->newpass;
                $user->save();
                $req->session()->flash('suc', 'Password Changed. Please login again!!!');
                return redirect('/login');
            }
        }
        
    }
}
