<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Firebase\JWT\JWT;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Storage;

class LoginController extends Controller {
    protected $public_key;

    public function __construct()
    {
        $this->public_key = Storage::get("public.pem");
    }

    public function authorizes()
    {
        $query = http_build_query([
            'client_id' => 'apasilocal',
            'redirect_uri' => 'http://localhost:8000/sso',
            'response_type' => 'code',
            'scope' => ''
        ]);

        return redirect('http://10.254.1.180:8080/auth/oauth/authorize?'.$query);
    }

    public function accessToken(Request $request)
    {
        $client = new Client();

        $response = $client->post('http://10.254.1.180:8080/auth/oauth/token', [
            'form_params' => [
                'grant_type' => 'authorization_code',
                'client_id' => 'apasilocal',
                'client_secret' => 'apasilocal',
                'redirect_uri' => 'http://localhost:8000/sso',
                'code' => $request->code,
            ],
        ]);

        if($response->getstatusCode() == 200) {
            $content = $response->getBody()->getContents();
            $objResponse = json_decode($content);
            $decodedData = JWT::decode($objResponse->access_token, $this->public_key, ["RS256"]);
        }

        return $this->doLogin($decodedData);
    }

    public function doLogin($data)
    {
        // print_r($data);die;
        $user = User::where('nik', $data->nik)->first();

        if(!empty($user)) {
            Session::put('nik', $data->nik);
            Session::put('name', $data->nama_lengkap);
            Session::put('role', $user->role_name);
            Session::put('jabatan', $data->nama_jabatan);
            Session::put('unit_kerja', $data->nama_unit_kerja);
            Session::put('grade', $data->kode_grade);
            Session::put('phone', $data->phone1);
            Session::put('tgl_lahir', $data->tanggal_lahir);
            Session::put('login', TRUE);
        }

        return redirect()->route('apasi.home');
    }

    public function doLogout()
    {
        Session::flush();
        return redirect('http://10.254.1.180:8080/auth/logout');
    }
}
