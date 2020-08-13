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
            'oldPass'=>'required',
            'newPass'=>'required|confirmed|max:30|min:8',
            'newPass_confirmation'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'oldPass.required'=>'You must enter your old passsword',
            'newPass.required'=>'You must enter a new password',
            'newPass_confirmation.required'=>'You must confirm your new password',
            'newPass.confirmed'=>"Password didn't matched",
            'newPass.max'=>'Your new password is too long',
            'newPass.min'=>'Your new password must be within 8 characters',
        ];
    }
}
