<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\RegCredentials;
use Mail;

class studentReg extends Controller
{
    public function index(){
    	return view('student.reg.RegForm.content');
    }

    public function send()
    {
        Mail::send(new RegCredentials());
        return redirect()->route('login');
    }
}
