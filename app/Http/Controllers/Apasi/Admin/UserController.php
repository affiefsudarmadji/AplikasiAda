<?php

namespace App\Http\Controllers\Apasi\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;
use DB;

class UserController extends Controller
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
    public function index()
    {
        $data = DB::table('users')->get();

        return view('apasi/admin/user', compact('data'));
    }

    public function form()
    {
        return view('apasi/admin/form_user');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required',
            'name' => 'required'
        ], [
            'nik.required' => 'NIK wajib diisi',
            'name.required' => 'Nama wajib diisi'
        ]);

        DB::table('users')->insert(
            [
                'nik' => $request->nik,
                'name' => $request->name,
                'role_name' => 'admin',
                'created_by' => Session::get('nik'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

        return redirect('/data-user')->withSuccessMessage('User Berhasil Ditambahkan');
    }
}
