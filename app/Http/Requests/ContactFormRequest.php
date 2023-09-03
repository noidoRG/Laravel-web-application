<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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
            'Name' => 'required|string|min:3|regex:/^[\p{L}\s]+$/u',
            'Gender' => 'required|in:male,female,secret',
            'Age' => 'required|in:under14,14-17,18-24,25-35,over35',
            'Birth-date' => 'required|date_format:M/d/Y', //
            'Message' => 'required|string|min:1|max:1000',
            'Mail' => 'required|email',
            'Phone-number' => ['required', 'regex:/^[\+][7|3][\d]{7,9}[\d]$/']];
    }
    
    
    public function submitForm(Request $request)
    {
        // $rules = [
            // 'Name' => 'required|string|min:3|regex:/^[\p{L}\s]+$/u',
            // // 'Name' => 'required|string|min:3|regex:/^[A-Za-z]+ [A-Za-z]+[A-Zaz]+$/',
            // 'Gender' => 'required|in:male,female,secret',
            // 'Age' => 'required|in:under14,14-17,18-24,25-35,over35',
            // // 'Age' => 'required|in:<14,14-17,18-24,25-35,>35',
            // 'Birth-date' => 'required|date_format:M/d/Y', //
            // 'Message' => 'required|string|min:1|max:1000',
            // 'Mail' => 'required|email',
            // 'Phone-number' => ['required', 'regex:/^[\+][7|3][\d]{7,9}[\d]$/'],
            //     'Name' => 'required|string|min:3|max:255',
            //     'Gender' => 'required|in:male,female,secret', //
        //     'Age' => 'required|in:under14,14-17,18-24,25-35,over35',
        //     'Birth-date' => 'required|date_format:m/d/Y',
        //     'Message' => 'required',
        //     'Mail' => 'required|email',
        //     'Phone-number' => ['required', 'regex:/^[\+][7|3][\d]{7,9}[\d]$/'],
        // ];

        // $request->validate($rules);

        // If validation passes, proceed with storing the data
        // ...
    }
}
