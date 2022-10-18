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


    public function getKost()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table($this->table);
        $builder->select('id_kost, kost.id_pemilik, nama_kost, foto, alamat_kost, jenis, fasilitas, longitude, latitude, nama_pemilik, email, no_telp, no_wa');
        $builder->join('pemilik', "pemilik.id_pemilik = $this->table.id_pemilik");
        return $builder->get()->getResult();
    }
}
