<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelLogin extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $allowedFields    = [
        'id', 'username', 'password', 'nama', 'level', 'status', 'email', 'telepon', 'gambar', 'id_anggota'
    ];
}
