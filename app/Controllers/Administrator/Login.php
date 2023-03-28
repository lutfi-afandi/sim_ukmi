<?php

namespace App\Controllers\Administrator;

use App\Controllers\BaseController;
use App\Models\ModelLogin;

class Login extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function masuk()
    {
        $modelLogin = new ModelLogin();
        $username = $this->request->getPost('username');
        $pass = $this->request->getPost('password');

        // dd($username);
        // $validation = Services::validation();

        $valid = $this->validate([
            'username'    => [
                'label' => 'Username',
                'rules' => 'required',
                'errors'    => [
                    'required'  => '{field} tidak boleh kosong'
                ]
            ],
            'password'    => [
                'label' => 'Password',
                'rules' => 'required',
                'errors'    => [
                    'required'  => '{field} tidak boleh kosong'
                ]
            ],
        ]);

        if (!$valid) {
            // $sessError = [
            //     'errIdUser' => $validation->getError('username'),
            //     'errPassword' => $validation->getError('pass'),
            // ];
            echo " <script>
            alert('username atau password salah!');
            history.go(-1);
          </script>";
        } else {



            $cekUserLogin = $modelLogin->where('username', $username)->first();
            // dd($cekUserLogin);
            if ($cekUserLogin == null) {
                echo " <script>
                alert('User tidak ditemukan!');
                history.go(-1);
              </script>";
            } else {
                // $passwordUser = $cekUserLogin['password'];
                $passwordUser = true;
                if ($passwordUser) {
                    // if (password_verify($pass, $passwordUser)) {
                    $idlevel = $cekUserLogin['level'];
                    $simpan_session = [
                        'username'    => $username,
                        'nama'  => $cekUserLogin['nama'],
                        'status'  => $cekUserLogin['status'],
                        'gambar'  => $cekUserLogin['gambar'],
                        'id'  => $cekUserLogin['id'],
                        'level'   => $idlevel
                    ];
                    session()->set($simpan_session);
                    // dd(session()->get());
                    return redirect()->to('/dashboard');
                } else {
                    echo " <script>
		            alert('Gagal Login: Cek username dan password anda!');
		            history.go(-1);
		          </script>";
                }
            }
        }
    }
}
