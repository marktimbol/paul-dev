<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RegisterUserRequest extends Request
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
            'email'             =>      'required|email',
            'password'  => 'required|confirmed|min:6',
            'password_confirmation' => 'required',
            'firstName'     => 'required|min:3',
            'lastName'      => 'required|min:3',
            'country'       => 'required',
            'phoneNumber'   => 'required',
            'terms'         => 'accepted'
        ];
    }
}
