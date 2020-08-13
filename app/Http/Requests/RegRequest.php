<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'userid'=>['required','regex:/^[0-9][0-9]-[0-9][0-9][0-9][0-9][0-9]-[1-3]/','unique:user,user_id_name'],
            'fname'=>['required','regex:/^([a-zA-Z ]+)(\s[a-zA-Z ]+)*$/'],
            'lname'=>['required','regex:/^([a-zA-Z ]+)(\s[a-zA-Z ]+)*$/'],
            'email'=>'required|email',
            'dept'=>'required|alpha',
            'cgpa'=>['required','regex:/^\d*(\.\d{2})?$/','numeric','between:2.50,4.00'],
            'credit'=>'required|numeric|gt:99',
            'contact'=>'required|digits:11|numeric|starts_with:01',
            'myFile'=>'required|mimes:pdf,doc,docx|max:5600',
        ];
    }
   
   //^[0-9][0-9]-[0-9][0-9][0-9][0-9][0-9]-[1-3]
    public function messages()
    {
        return [
            'userid.required'=>"user Id can't be empty",
            'fname.required'=>"First Name Can't be Empty",
            'lname.required'=>"Last Name Can't be Empty",
            'email.required'=>"Email Can't be Empty",
            'dept.required'=>"Department Can't be Empty",
            'cgpa.required'=>"You must provide your CGPA",
            'credit.required'=>"You must provide your Credit",
            'contact.required'=>"Contact Number Can't be Empty",
            'myFile.required'=>"You must attach your course index file",
            'userid.unique'=>"This user already exists",
            'userid.regex'=>"Please Provide a Valid User Id",
            'fname.regex'=>"Please Provide a Valid Name",
            'lname.regex'=>"Please Provide a Valid Name",
            'email.email'=>"You must provide a valid email",
            'dept.alpha'=>"Please Provide a Valid Depratment Name",
            'cgpa.regex'=>"Please Provide a Valid CGPA",
            //'cgpa.in'=>"Please Provide a Valid CGPASSS",
            'credit.numeric'=>"Please Provide a Valid Credit",
            'contact.numeric'=>"Please Provide a Valid Contact Number",
            'contact.digits'=>"Please Provide a Valid Contact Number",
            'contact.starts_with'=>"Please Provide a Valid Contact Number",
            'cgpa.between'=>"The CGPA is out of range",
            'credit.gt'=>"Minimum Credit ammount should be 100",
            'myFile.mimes'=>'Please attach a valid file',
            'myFile.max'=>'Your uploaded file size is too large',
        ];
    }
}
