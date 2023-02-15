<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'tiktok_username' => 'required|unique:users|alpha_dash',
            'email' => 'required|unique:users|email',
            'password' => 'required|string|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/|confirmed'
        ];
    }
    public function messages()
    {
        return [
            'first_name.required'=> 'First name can not be empty',
            'last_name.required'=> 'Last name can not be empty',
            'tiktok_username.required' => 'Username is required.',
            'tiktok_username.unique' => 'Username already in use',
            'tiktok_username.alpha_dash' => 'Username can only contain letters, numbers, dashes and underscores.',
            'email.required' => 'Email is required.',
            'email.unique' => 'Email is already taken.',
            'email.email' => 'Email must be valid.',
            'password.required'=> 'Please input password',
            'password.min:8'=> 'Password should be more than 8 character',
            'password.regex' => 'The password should contain at least 1 uppercase, 1 lowercase, 1 number, and one special character, at least 8 characters..',
        ];
    }
}
