<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductEditVerifyRequest extends FormRequest
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
            'Name' => 'required|max:50',
            'Description' => 'required',
            'Price' => 'required|numeric',
            'Discounted_Price' => 'required|numeric',
            
            'Colors' => 'required',
            'Tags' => 'required'
        ];
    }
}
