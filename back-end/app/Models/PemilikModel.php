<?php

namespace App\Models;

use CodeIgniter\Model;

class PemilikModel extends Model
{
    protected $table            = 'pemilik';
    protected $primaryKey       = 'id_pemilik';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['nama_pemilik', 'username', 'email', 'no_telp', 'no_wa', 'alamat_ktp', 'password', 'salt', 'created_at', 'updated_at'];
    protected $createdField     = 'created_at';
    protected $updatedField     = 'updated_at';
    protected $useTimestamps    = true;
}
