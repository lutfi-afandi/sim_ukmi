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
        // dd(session()->get());

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

        session()->setFlashdata('success', 'Data Berhasil ditambah');
        return redirect()->to(base_url('administrator/user'));
    }

    public function edit($id)
    {
        $d['judul'] = 'Edit Data User';
        $d['kategori'] = 'Data User';
        $d['sub'] = 'Menambahkan Data User';

        $user = $this->user->find($id);
        $d['id'] = $id;
        $d['nama'] = $user['nama'];
        $d['username'] = $user['username'];
        $d['level'] = $user['level'];
        $d['status'] = $user['status'];

        return view('administrator/user/form_edit', $d);
    }

    public function updateUser($id)
    {
        if (!empty($this->request->getVar('password'))) {
            $in['password'] = password_hash($this->request->getVar('password'), PASSWORD_BCRYPT);
        }

        $in['nama'] = $this->request->getPost('nama');
        $in['username'] = $this->request->getPost('username');
        $in['level'] = $this->request->getPost('level');
        $in['status'] = $this->request->getPost('status');

        $this->user->update($id, $in);
        session()->setFlashdata('success', 'Data Berhasil di ubah');
        return redirect()->to(base_url('administrator/user'));
    }

    public function hapus($id)
    {
        if ($id == $this->id_user) {
            session()->setFlashdata('error', 'Tidak bisa menghapus USER yang sedang login');
        } else {
            $this->user->delete($id);
            session()->setFlashdata('success', 'Data Berhasil di Hapus');
        }

        return redirect()->to(base_url('administrator/user'));
    }
}
