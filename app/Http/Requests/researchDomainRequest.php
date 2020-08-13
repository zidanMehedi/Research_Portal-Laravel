<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class researchDomainRequest extends FormRequest
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
            'name'=>'required',
            'des'=>'required',
        ];
    }

    public function messages(){
        return [
            'name.required'=>"Domain name can't left empty!",
            'des.required'=>"Domain description can't left empty!",
        ];
    }
}
