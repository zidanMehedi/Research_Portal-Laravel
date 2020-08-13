<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class uploadRequest extends FormRequest
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
            'file'=>'required|mimes:pdf,doc,docx|max:5600',
        ];
    }
    public function messages()
    {
        return [
            'file.required'=>'You must select a file to upload',
            'file.mimes'=>'Please select a valid file',
            'file.max'=>'Your uploaded file size is too large',
        ];
    }
}
