<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            'student_fname'=>['required','regex:/^([a-zA-Z ]+)(\s[a-zA-Z ]+)*$/'],
            'student_lname'=>['required','regex:/^([a-zA-Z ]+)(\s[a-zA-Z ]+)*$/'],
            'student_dept'=>'required|alpha',
            'student_cgpa'=>['required','regex:/^\d*(\.\d{2})?$/','numeric','between:2.50,4.00'],
            'student_credit'=>'required|numeric|gt:99',
            'student_contact'=>'required|digits:11|numeric|starts_with:01',
        ];
    }
   
   //^[0-9][0-9]-[0-9][0-9][0-9][0-9][0-9]-[1-3]
 public function messages()
    {
        return [
            'student_fname.required'=>"First Name Can't be Empty",
            'student_lname.required'=>"Last Name Can't be Empty",
            'student_dept.required'=>"Department Can't be Empty",
            'student_cgpa.required'=>"You must provide your CGPA",
            'student_credit.required'=>"You must provide your Credit",
            'student_contact.required'=>"Contact Number Can't be Empty",
            'student_fname.regex'=>"Please Provide a Valid Name",
            'student_lname.regex'=>"Please Provide a Valid Name",
            'student_dept.alpha'=>"Please Provide a Valid Depratment Name",
            'student_cgpa.regex'=>"Please Provide a Valid CGPA",
            //'student_cgpa.in'=>"Please Provide a Valid CGPASSS",
            'student_credit.numeric'=>"Please Provide a Valid Credit",
            'student_contact.numeric'=>"Please Provide a Valid Contact Number",
            'student_contact.digits'=>"Please Provide a Valid Contact Number",
            'student_contact.starts_with'=>"Please Provide a Valid Contact Number",
            'student_cgpa.between'=>"The CGPA is out of range",
            'student_credit.gt'=>"Credit Can't be less than 100",       
        ];
    }
}

