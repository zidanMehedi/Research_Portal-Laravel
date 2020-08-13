<?php

namespace App\Mail;

use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Http\Requests\RegRequest;
use App\student;
use App\user;
use App\verification;

class RegCredentials extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(RegRequest $req)
    {
        $val = $req->validated();
        if($val==null){
            return back()->withError($val)
                         ->withInput();
        }
        else{
            $password = str_random(8);
            $student = new student();
            $student->student_id = $req->userid;
            $student->student_fname = $req->fname;
            $student->student_lname = $req->lname;
            $student->student_email = $req->email;
            $student->student_contact = $req->contact;
            $student->student_credit = $req->credit;
            $student->student_cgpa = $req->cgpa;
            $student->student_regDate = date('Y-m-d');
            $student->student_dept = $req->dept;
            $student->status = 0;
            $student->save();
            $user = new user();
            $user->user_id_name = $req->userid;
            $user->password = $password;
            $user->rid = 3;
            $user->save();
            $sid = $student::where('student_id',$req->userid)->first();
            $ver = new verification();
            $ver->ver_fileName = $req->session()->get('username').'_'.random_int(100000000, 999999999).'_'.$req->file('myFile')->getClientOriginalName();
            $ver->filePath = $req->file('myFile')->store('public/upload/verification');
            $ver->sid = $sid->sid;
            $ver->save();
            //$req->file('myFile')->move('upload',$req->file('myFile')->getClientOriginalName());
            $req->session()->flash('success', 'Registration Successful! Please Check your email for Credentials');
            return $this->markdown('RegCredentials',['userid'=>$req->userid, 'password'=>$password])
                        ->from('abc@something.com')
                        ->to('mkzzidan786@gmail.com');
        }
    }
}
