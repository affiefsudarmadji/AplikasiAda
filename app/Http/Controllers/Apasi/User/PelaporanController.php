<?php

namespace App\Http\Controllers\Apasi\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Apasi\User\PelaporanRequest;
use App\Models\Pelaporan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use DB;

class PelaporanController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $data = [
            'nik' => $request->session()->get('nik'),
            'name' => $request->session()->get('name'),
            'jabatan' => $request->session()->get('jabatan'),
            'unit_kerja' => $request->session()->get('unit_kerja'),
            'grade' => $request->session()->get('grade'),
            'phone' => $request->session()->get('phone'),
            'tgl_lahir' => $request->session()->get('tgl_lahir'),
        ];

        return view('apasi/user/formlapor', compact('data'));
    }

    public function store(Request $request)
    {
        if (!empty(request()->lampiran_foto)) {
            request()->validate(['lampiran_foto' => 'image|mimes:jpeg,png,jpg|max:2048',]);
            $namaFoto = time() . '.' . request()->lampiran_foto->extension();
            request()->lampiran_foto->move(public_path('img'), $namaFoto);
        } else {
            $namaFoto = null;
        }

        if (!empty(request()->lampiran_dokumen)) {
            request()->validate(['lampiran_dokumen' => 'file|max:4096',]);
            $namaFile = time() . '.' . request()->lampiran_dokumen->extension();
            request()->lampiran_dokumen->move(public_path('dokumen'), $namaFile);
        } else {
            $namaFile = null;
        }

        $data_diri = DB::table('identitas_pelapor')->insertGetId(
            [
                'nik' => $request->nik,
                'nama_lengkap' => $request->nama_lengkap,
                'no_ktp' => $request->no_ktp,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'grade' => $request->grade,
                'jabatan' => $request->jabatan,
                'unit_kerja' => $request->unit_kerja,
                'no_telpon' => $request->no_telpon,
                'alamat_kantor' => $request->alamat_kantor,
                'alamat_rumah' => $request->alamat_rumah,
                'alamat_domisili' => $request->alamat_domisili,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_by' => $request->nik
            ]
        );

        if($data_diri > 0) {
            $pelaporan = DB::table('pelaporan')->insert(
                [
                    'identitas_id' => $data_diri,
                    'gratifikasi_id' => $request->jenis_laporan,
                    'tanggal_pelaporan' => $request->tanggal_pelaporan,
                    'jenis_penerimaan' => $request->jenis_penerimaan,
                    'jenis_peristiwa' => $request->jenis_peristiwa,
                    'nominal_penerimaan' => $request->nominal,
                    'tanggal_penerimaan' => $request->tanggal_penerimaan,
                    'tempat_penerimaan' => $request->tempat_penerimaan,
                    'kronologi_penerimaan' => $request->kronologi,
                    'nama_pemberi'  => $request->nama_pemberi,
                    'pekerjaan_pemberi' => $request->jabatan_pemberi,
                    'hubungan_pemberi' => $request->hubungan_pemberi,
                    'alamat_pemberi' => $request->alamat_pemberi,
                    'alasan_pemberian' => $request->alasan_pemberian,
                    // 'lampiran_dokumen' => $namaFile,
                    'catatan_tambahan' => $request->catatan_tambahan,
                    // 'lampiran_foto' => $namaFoto,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'created_by' => $request->nik
                ]
            );
        }

        return redirect('/form-laporan')->withSuccessMessage('Pengaduan berhasil di Kirim');

    }
}
