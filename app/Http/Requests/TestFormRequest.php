<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // Тут изначально было false
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
            'name' => 'required|string|min:3|regex:/^[\p{L}\s]+$/u',
            'group' => 'required',
            'question1' => 'required|in:Gaspar',
            'question2' => 'required|in:theoretical_drawing',
            'question3' => 'required|string|in:123',
        ];
            
    }
}
