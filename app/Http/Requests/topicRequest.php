<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class topicRequest extends FormRequest
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
            'description'=>'required',
            'domain'=>'required',
            'supervisor'=>'required',
            'type'=>'required',
        ];
    }

    public function messages(){
        return [
            'name.required'=>"Topic name can't left empty!",
            'description.required'=>"Topic description can't left empty!",
            'domain.required'=>"Domain name can't left empty!",
            'supervisor.required'=>"Supervisor name can't left empty!",
            'type.required'=>"Thesis type can't left empty!",
        ];
    }
}
