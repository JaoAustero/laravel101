<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostCreateRequest extends FormRequest
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
            'title' => 'required|string|max:60',
            'body'  => 'required'
        ];
    }

    /**
     * Custom message for validation
     * 
     * @return array
     */
    public function messages()
    {
        return [
            'required'  => 'The :attribute cannot be blank.',
            'string'    => 'The :attribute must be a string.'
        ];
    }
}
