<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserSignup2VerifyRequest extends FormRequest
{
    /**
     *
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     *
     *
     * @return array
     */
    public function rules()
    {
        return [
            'Full_name' =>'required|max:50',
            'Email' =>'required|email|unique:users',
            'Password' =>'required|max:15',
            'Phone' =>'required|max:13'

        ];
    }
}
