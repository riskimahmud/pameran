<?php

namespace App\Models;

use CodeIgniter\Model;

class TokoModel extends Model
{
    protected $table      = 'toko';
    protected $allowedFields = ['nama_toko', 'alamat', 'pemilik', 'telp', 'folder'];
}
