<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $d['judul'] = 'Dashboard';
        $d['menu'] = 'Dashboard';
        $kalender_progja = $this->db->query("SELECT
        waktu.id_progja
        , waktu.id_waktu
        , waktu.tanggal
        , progja.bentuk
        , progja.nama_kegiatan
        , devisi.nama_devisi
        , progja.frekuensi
        , progja.tempat
        , progja.target
        , progja.status
        FROM progja
        INNER JOIN waktu ON (progja.id_progja = waktu.id_progja)
        INNER JOIN devisi ON (devisi.id_devisi = progja.id_devisi) where progja.status='Y'")
            ->getResultArray();
        // dd($kalender_progja);
        $d['kalender_progja'] = $kalender_progja;
        return view('dashboard_admin', $d);
    }
}
