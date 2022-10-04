<?php

namespace App\Models;

use CodeIgniter\Model;

class KostTersimpanModel extends Model
{
    protected $table            = 'kost_tersimpan';
    protected $primaryKey       = 'id_kost_tersimpan';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['id_kost', 'id_user', 'created_at'];

    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $useTimestamps = true;
}
