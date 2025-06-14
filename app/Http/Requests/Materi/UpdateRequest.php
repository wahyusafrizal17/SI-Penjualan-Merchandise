<?php

namespace App\Http\Requests\Materi;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
   public function rules()
    {
        return [
            'nama_materi'     => 'required',
            'materi'          => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nama_materi.required'          => 'Nama materi tidak boleh kosong',
            'materi.required'               => 'Materi tidak boleh kosong',
        ];
    }
}
