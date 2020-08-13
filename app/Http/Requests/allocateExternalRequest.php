<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class allocateExternalRequest extends FormRequest
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
            'group'=>'required',
            'external'=>'required',
        ];
    }

    public function messages(){
        return [
            'group.required'=>"Group number can't left empty!",
            'external.required'=>"External name can't left empty!",
        ];
    }
}
