<?php

namespace App\Http\Controllers\Apasi\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class MenuController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $data = DB::table('menu')->get();

        return view('apasi/admin/menu', compact('data'));
    }

    public function form()
    {
        return view('apasi/admin/form_menu');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'keterangan' => 'required'
        ], [
            'nama.required' => 'Nama Menu wajib diisi',
            'keterangan.required' => 'Keterangan wajib diisi'
        ]);

        DB::table('menu')->insert(
            [
                'nama' => $request->nama,
                'keterangan' => $request->keterangan,
                'url' => $request->url,
                'role' => $request->url,
                'created_by' => Session::get('nik'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        return redirect('/data-menu')->withSuccessMessage('Menu Berhasil Ditambahkan');
    }
}
