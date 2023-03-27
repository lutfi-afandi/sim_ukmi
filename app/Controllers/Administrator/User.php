<?php

namespace App\Controllers\Administrator;

use App\Controllers\BaseController;
use App\Models\ModelUsers;

class User extends BaseController
{
    public function __construct()
    {
        // $this->cek = session()->get('logged_in');
        $this->level = session()->get('level');
        $this->id_user = session()->get('id');
        $this->user = new ModelUsers();
    }

    public function index()
    {
        $d['judul'] = 'Data User';
        $d['kategori'] = 'Dashboard';
        $d['sub'] = 'Informasi data User';
        $d['menu'] = 'Dashboard';
        // dd($this->level);
        if ($this->level == 4) {
            $d['data'] = $this->db->query("SELECT * from users where id='$this->id_user'  ORDER BY id  ASC  ");
            $d['view'] = 'administrator/user/daftar_anggota';
        } else if ($this->level == 3) {
            $d['data'] = $this->db->query("SELECT * from users where id='$this->id_user'  ORDER BY id  ASC  ");
            $d['view'] = 'administrator/user/daftar_anggota';
        } else if ($this->level == 2) {
            $d['data'] = $this->db->query("SELECT * from users where id='$this->id_user'  ORDER BY id  ASC  ");
            $d['view'] = 'administrator/user/daftar_anggota';
        } else if ($this->level == 1) {
            $d['data'] = $this->db->query("SELECT * from users where id='$this->id_user'  ORDER BY id  ASC  ");
            $d['view'] = 'administrator/user/daftar_anggota';
        } else {
            $d['data'] = $this->db->query("SELECT * from users")->getResultArray();
            $d['view'] = 'administrator/user/daftar';
        }
        // dd($d['data']);
        return view($d['view'], $d);
    }

    public function tambah()
    {
        $d['judul'] = 'Tambah Data User';
        $d['kategori'] = 'Data User';
        $d['sub'] = 'Menambahkan Data User';
        $d['menu'] = 'Dashboard';
        return view('administrator/user/form', $d);
    }

    public function simpan()
    {
        $in['nama'] = $this->request->getPost('nama');
        $in['username'] = $this->request->getPost('username');
        $in['password'] = password_hash($this->request->getVar('password'), PASSWORD_BCRYPT);
        $in['level'] = $this->request->getPost('level');
        $in['status'] = $this->request->getPost('status');

        $this->user->insert($in);
        echo "<script>
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Data berhasil di simpan',
            showConfirmButton: false,
            timer: 1500
          })
</script>";
        return redirect()->to(base_url('administrator/user'));
    }

    public function edit()
    {
        # code...
    }
}
