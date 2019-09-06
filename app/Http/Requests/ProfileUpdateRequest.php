<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileUpdateRequest extends FormRequest
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
            'email' => 'required',
            'name' => 'required|',
            'mobile' => 'required|max:10|min:10',
            'address' => 'required',
            'gender' => 'required',
            'birthday' => 'required|',
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'Please enter valid email',
            'name.required' => 'Please enter name',
            'mobile.required' => 'Please Enter Mobile number',
            'address.required' => 'Please Enter Address',
            'gender.required' => 'Please select gender',
            'birthday.required' => 'Please Add your birthday',
        ];
    }
}
