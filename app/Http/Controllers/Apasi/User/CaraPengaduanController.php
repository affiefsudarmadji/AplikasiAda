<?php

namespace App\Http\Controllers\Apasi\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CaraPengaduanController extends Controller
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
    public function index()
    {
        return view('apasi/user/step');
    }
}
