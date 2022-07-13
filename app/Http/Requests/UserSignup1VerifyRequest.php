<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserSignup1VerifyRequest extends FormRequest
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
            
            'Area' =>'required|max:20|alpha',
            'City' =>'required|max:50|alpha',
            'Zip' =>'required|numeric'

        ];
    }
}
