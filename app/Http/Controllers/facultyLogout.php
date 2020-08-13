<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class facultyLogout extends Controller
{
    public function index(Request $req)
    {
    	$req->session()->flush();
    	return redirect('/');
    }
}
