<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
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
            'name' => 'bail|required|max:255|unique:products,name,'.$this->product,
            'quantity' => 'bail|required|integer',
            'price' => 'bail|required|numeric',
            'details' => 'bail|required|min:10|max:1000',
            'images.*' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',

        ];
    }
}
