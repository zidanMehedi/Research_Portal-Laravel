<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadRequest extends FormRequest
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
            'myFile'=>'required|mimes:pdf,doc,docx|max:5600',
        ];
    }
    public function messages()
    {
        return [
            'myFile.required'=>'You must insert a file to upload',
            'myFile.mimes'=>'Please attach a valid file',
            'myFile.max'=>'Your uploaded file size is too large',
        ];
    }
}
