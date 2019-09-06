<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true ;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'category' => 'required',
            'description' => 'required',
            'stock' => 'required',
            'manufacture' => 'required',
            'dimensions' => 'required',
            'capacity' => 'required',
            'unit_type' => 'required',
            'unit_value' => 'required',
            'product_description' => 'required',
            'base_price' => 'required',
            'discounted_price' => 'required',
            'image' => 'required',
        ];
    }

}
