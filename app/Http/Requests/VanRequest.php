<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VanRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
         return [
            'name' => 'required|string|max:150',
            
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Please provide a Van Name',
        ];
    }


}
