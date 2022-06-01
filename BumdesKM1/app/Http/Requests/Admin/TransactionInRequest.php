<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class TransactionInRequest extends FormRequest
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
            'id_product' => 'required|integer',
            'tgl_masuk' => 'required|date',
            'nama_brg' => 'required|max:255',
            'hrg_beli' => 'required|integer',
            'jml_stok' => 'required|integer',
            'hrg_total' => 'required|integer'
        ];
    }
}
