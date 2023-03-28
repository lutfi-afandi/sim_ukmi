<?php

namespace App\Models;

use CodeIgniter\Model;

class Modeldevisi extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'devisi';
    protected $primaryKey       = 'id_devisi';
    protected $allowedFields    = [
        'nama_devisi', 'keterangan', 'kategori'
    ];
}
