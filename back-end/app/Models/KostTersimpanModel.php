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

    public function getKostTersimpan()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table($this->table);
        $builder->select('id_kost_tersimpan, kost_tersimpan.id_kost, kost_tersimpan.id_user, foto, alamat_kost, jenis, fasilitas, longitude, latitude, nama_kost');
        $builder->join('kost', "kost.id_kost = $this->table.id_kost");
        $builder->join('user', "user.id_user = $this->table.id_user");
        return $builder->get()->getResult();
    }
}
