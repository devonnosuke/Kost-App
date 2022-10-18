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

    public function getPemilik()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table($this->table);
        $builder->select('id_pemilik, nama_pemilik, username, email, no_telp, no_wa, alamat_ktp, password, salt');
        return $builder->get()->getResult();
    }
}
