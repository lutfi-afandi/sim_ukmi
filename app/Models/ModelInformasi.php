<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelInformasi extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'informasi';
    protected $primaryKey       = 'id_informasi';
    protected $allowedFields    = [
        'id_informasi', 'nama', 'kategori', 'tanggal', 'isi', 'gambar',
    ];
}
