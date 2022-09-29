<?php

namespace App\Models;

use CodeIgniter\Model;

class KostModel extends Model
{
    protected $table            = 'kost';
    protected $primaryKey       = 'id_kost';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['id_pemilik', 'nama_kost', 'alamat_kost', 'longitude', 'latitude', 'jenis', 'fasilitas', 'foto', 'created_at', 'updated_at'];
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $useTimestamps = true;
}
