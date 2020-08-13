<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangePassRequest extends FormRequest
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
            'oldpass'=>'required',
            'newpass'=>'required',
            'cnewpass'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'oldpass.required'=>'You must enter your old passsword',
            'newpass.required'=>'You must enter a new password',
            'cnewpass.required'=>'You must enter a confirm new password',
        ];
    }
}
