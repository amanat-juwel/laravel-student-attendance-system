<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SectionRequest extends FormRequest
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

   public function rules()
    {
         return [
            'name' => 'required|string|max:150',
            
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Please provide a Class Name',
        ];
    }
}
