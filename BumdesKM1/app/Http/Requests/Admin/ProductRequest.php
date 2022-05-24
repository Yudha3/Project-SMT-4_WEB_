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
            'nama_brg' => 'required|max:255',
            'tgl_mskBrg' => 'required|date',
            'hrg_beli' => 'required|integer',
            'hrg_jual' => 'required|integer',
            'stok' => 'required|integer',
            'deskripsi' => 'required'
        ];
    }
}
