<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Faculty;
use App\User;

class facultyHome extends Controller
{
    public function index()
    {
    	return view('faculty.home.content');
    }

    public function profileDetails(Request $req)
    {
    	$faculty = Faculty::where('faculty_id',$req->session()->get('username'))->first();
    	return view('faculty.profile.content',['details'=>$faculty]);
    }

    public function updateProfile(Request $req)
    {
    	$validate = Validator::make($req->all(), [
            'fname' => 'required|max:30',
            'lname' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

    	if ($validate->fails()) {
    		return redirect('/profile')
                        ->withErrors($validate)
                        ->withInput();
    	}
    	else
    	{
    		$user = User::where('user_id_name',$req->session()->get('username'))->first();

    		$faculty = Faculty::where('faculty_id',$req->session()->get('username'))->first();

    		$faculty->faculty_fname = $req->fname;
    		$faculty->faculty_lname = $req->lname;
    		$faculty->faculty_email = $req->email;

    		if ($user->password!=$req->password) {
    			return redirect('/profile')->withErrors("Current Password Wrong");
    		}
    		else
    		{
    			if ($faculty->save()) {
    				return redirect('/profile')->withErrors("Profile Update successfully");
    			}
    		}
    	}
    }


    public function changePasswordView()
    {
    	return view('faculty.passChange.content');
    }


    public function updatePassword(Request $req)
    {

    	$user = User::where('user_id_name',$req->session()->get('username'))->first();

    	$validate = Validator::make($req->all(), [
            'oldPass' => 'required',
            'newPass' => 'required',
            'confirmNewPass' => 'required'
        ]);

    	if ($validate->fails()) {
    		return redirect('/changePassword')
                        ->withErrors($validate);
    	}

    	else
    	{
    		if ($user->password!=$req->oldPass) {
    			return redirect('/changePassword')
                        ->withErrors('Current Password wrong');
    		}
    		else
    		{
    			if ($req->newPass!=$req->confirmNewPass) {
    				return redirect('/changePassword')
                        ->withErrors('New or Confirm Password wrong');
    			}
    			else
    			{
    				$user->password = $req->newPass;
    				if ($user->save()) {
    					return redirect('/logout');
    				}
    				else
    				{
    					return print("Something wrong!!");
    				}
    			}
    		}
    	}

    }


    

}


