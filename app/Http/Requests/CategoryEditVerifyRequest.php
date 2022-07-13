<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryEditVerifyRequest extends FormRequest
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
            'Name' => 'required|max:50|',
            'Type' => 'required'
        ];
    }
}
