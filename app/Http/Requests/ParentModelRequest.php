<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ParentModelRequest extends FormRequest
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
            'father'    => 'required|string|max:50',
            'mother'    => 'required|string|max:50',
            'address'   => 'required|string|max:500',
            'mobile_no' => 'required|string|max:13',
            'occupation'=> 'required|string|max:50'
        ];
    }

    public function messages()
    {
        return [
            'father.required'       => 'Please provide a father name',
            'mother.required'       => 'Please provide a mother name',
            'address.required'      => 'Please address',
            'mobile_no.required'    => 'Please mobile no',
            
            'occupation.required'   => 'Please provide occupation',
        ];
    }
}
