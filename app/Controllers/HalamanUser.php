<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelInformasi;

class HalamanUser extends BaseController
{
    public function __construct()
    {
        $this->modelInfo = new ModelInformasi();
    }
    public function index()
    {
        // dd($uri);
        $d['judul'] = 'Dashboard';
        $d['menu'] = 'Dashboard';



        // $d['tot'] = $offset;
        // $tot_hal = $this->app_model->getAllData("informasi");
        // $config['base_url'] = site_url() . '/administrator/informasi/index/';
        // $config['total_rows'] = $tot_hal->num_rows();
        // $config['per_page'] = $limit;
        // $config['uri_segment'] = 4;
        // $config['first_link'] = 'Awal';
        // $config['last_link'] = 'Akhir';
        // $config['next_link'] = 'Selanjutnya';
        // $config['prev_link'] = 'Sebelumnya';
        // $this->pagination->initialize($config);
        // $d["paginator"] = $this->pagination->create_links();

        $d['data'] = $this->db->query("SELECT * from informasi  ORDER BY id_informasi");



        // $d['content'] = $this->load->view('dashboard_user', $d, true);
        // $this->load->view('halaman_user', $d);

        return view('dashboard_user', $d);
    }
}
