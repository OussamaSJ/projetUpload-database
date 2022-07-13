<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserLoginVerifyRequest extends FormRequest
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
            'email' => 'required|email',
            'pass' => 'required|max:20'
        ];
    }
}
