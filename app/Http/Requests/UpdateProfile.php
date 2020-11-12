<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UpdateProfile extends FormRequest
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
            'name' => ['required', 'string','max:50'],
            'email' => [
                'required',
                'string',
                'email',
                'max:75',
                Rule::unique('users','email')->ignore(Auth::id()),
                ],

        ];

           }

           public function messages()
           {
               return [
                   'name.required' => 'Please enter your name.',
                   'email.required' => 'please enter your Email',
                   'name.max' => 'maximum 50 characters allowed'
               ];

           }


}
