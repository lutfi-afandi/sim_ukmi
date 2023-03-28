<?php

namespace App\Controllers\Administrator;

use App\Controllers\BaseController;
use App\Models\Modeldevisi;

class Devisi extends BaseController
{
    public function __construct()
    {
        // parrent::__construct();
        // dd(session()->get());
        $this->devisi = new Modeldevisi();
    }
    public function index()
    {
        $d['judul'] = 'Data Divisi';
        $d['menu'] = 'Devisi';
        $d['devisi'] = $this->devisi->findAll();


        return view('administrator/devisi/daftar', $d);
    }

    public function tambah()
    {
        $d['judul'] = 'Data Divisi';
        $d['menu'] = 'Devisi';

        return view('administrator/devisi/form', $d);
    }

    public function simpan()
    {
        $in['nama_devisi'] = $this->request->getPost('nama_devisi');
        $in['keterangan'] = $this->request->getPost('keterangan');
        $in['kategori'] = $this->request->getPost('kategori');

        $this->devisi->insert($in);

        session()->setFlashdata('success', 'Data Berhasil ditambah');
        return redirect()->to(base_url('administrator/devisi'));
    }

    public function edit($id)
    {
        $d['judul'] = 'Edit Divisi';
        $d['menu'] = 'Devisi';
        $devisi = $this->devisi->find($id);
        $d['id_devisi'] = $id;
        $d['nama_devisi'] = $devisi['nama_devisi'];
        $d['keterangan'] = $devisi['keterangan'];
        $d['kategori'] = $devisi['kategori'];

        return view('administrator/devisi/form_edit', $d);
    }

    public function updateData($id)
    {
        $in['nama_devisi'] = $this->request->getPost('nama_devisi');
        $in['keterangan'] = $this->request->getPost('keterangan');
        $in['kategori'] = $this->request->getPost('kategori');

        $this->devisi->update($id, $in);
        session()->setFlashdata('success', 'Data Berhasil di ubah');
        return redirect()->to(base_url('administrator/devisi'));
    }

    public function hapus($id)
    {

        $this->devisi->delete($id);
        session()->setFlashdata('success', 'Data Berhasil di Hapus');

        return redirect()->to(base_url('administrator/devisi'));
    }
}
