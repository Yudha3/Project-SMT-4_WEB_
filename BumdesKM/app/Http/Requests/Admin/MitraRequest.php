<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class MitraRequest extends FormRequest
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
            'nama_mtr' => 'required|max:255',
            'alamat' => 'required|max:255',
            'no_telp' => 'required|max:12',
            'tgl_gabung' => 'required|date',
            'image' => 'required|image'
        ];
    }
}
