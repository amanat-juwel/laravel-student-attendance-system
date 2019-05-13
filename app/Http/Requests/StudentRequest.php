<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StudentRequest extends Request
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
            'metric_id' => 'required|string|max:150',
            'name' => 'required|string|max:150',
            
        ];
    }

    public function messages()
    {
        return [
            'metric_id.required' => 'Please provide a Metric ID',
            'name.required' => 'Please provide a Student Name',
            
        ];
    }
}
