<?php

namespace App\Http\Requests\Apasi\User;

use Illuminate\Foundation\Http\FormRequest;

class PelaporanRequest extends FormRequest
{

    /**
     * Get the validation message that applies to the request.
     *
     * @return string
     */
    public function message()
    {
        return 'Silakan periksa kesalahan di bawah ini.';
    }

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
            'nik' => 'required|string|max:8',
            'nama_lengkap' => 'required|string',
            'no_ktp' => 'required|numeric|max:16',
            'tempat_lahir' => 'required|text',
            'tanggal_lahir' => 'required|date_format:Y-m-d',
            'grade' => 'required|string',
            'jabatan' => 'required|string',
            'unit_kerja' => 'required|string',
            'no_telpon' => 'required|string',
            'alamat_kantor' => 'required|string|max:255',
            'alamat_rumah' => 'required|string|max:255',
        ];
    }

    public function getFields()
    {
        $fields = [
            'nik',
            'nama_lengkap',
            'no_ktp',
            'tempat_lahir',
            'tanggal_lahir',
            'grade',
            'jabatan',
            'unit_kerja',
            'no_telpon',
            'alamat_kantor',
            'alamat_rumah',
            'created_at',
            'updated_at'
        ];

        return $this->only($fields);
    }

}
