<?php

namespace App\Http\Requests\Admin;

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
            'title' => 'required|max:255',
            'description' => 'required',
            'materials' => 'required|max:255',
            'price_buy' => 'required|integer',
            'price' => 'required|integer',
            'stock' => 'required|integer',
            'weight' => 'required|integer',
            'sold' => 'required|integer',
            'image' => 'required|image'
        ];
    }
}
