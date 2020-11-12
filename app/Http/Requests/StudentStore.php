<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentStore extends FormRequest
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
            'index' => ['required', 'string'],
            'firstname' => ['required', 'string'],
            'lastname' => ['required', 'string'],
            'gender' => ['required'],
            'birthday' => ['required'],
            'mobile' => ['required','max:10'],
            'address' => ['required'],

        ];
    }

    public function messages()
    {
       return [
           'index.required' => 'Please Enter Your index',
           'firstname.required' => 'Please Enter Your First Name',
           'lastname.required' => 'Please Enter Your First Name',
           'gender.required' => 'Please Select Your Gender',
           'birthday.required' => 'Please Select Your Birthday',
           'mobile.required' => 'Please Enter Your Mobile',
           'address.required' => 'please Enter Your Address'
       ];
    }
}
