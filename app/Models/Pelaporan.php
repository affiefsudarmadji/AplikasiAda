<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelaporan extends Model
{
    protected $table = 'identitas_pelapor';

    protected $fillable = [
        "nik",
        "nama_lengkap",
        "no_ktp",
        "tempat_lahir",
        "tanggal_lahir",
        "grade",
        "jabatan",
        "unit_kerja",
        "no_telpon",
        "alamat_kantor",
        "alamat_rumah",
        "alamat_domisili"
    ];
}
