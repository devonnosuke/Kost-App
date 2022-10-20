<?php

namespace App\Models;

use CodeIgniter\Model;

class LikeModel extends Model
{
    protected $table            = 'like';
    protected $primaryKey       = 'id_like';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['id_kost', 'id_user', 'created_at'];

    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $useTimestamps = true;

    public function getLike()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table($this->table);
        $builder->select('id_like, like.id_kost, like.id_user, nama_kost, alamat_kost, jenis, foto');
        $builder->join('kost', "kost.id_kost = $this->table.id_kost");
        $builder->join('user', "user.id_user = $this->table.id_user");
        return $builder->get()->getResult();
    }

    public function getKostLike($id_kost)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table($this->table);
        $builder->select('id_like, like.id_kost, like.id_user, nama_kost, alamat_kost, jenis, foto');
        $builder->join('kost', "kost.id_kost = $this->table.id_kost");
        $builder->join('user', "user.id_user = $this->table.id_user");
        $builder->where('like.id_kost', $id_kost);
        return $builder->get()->getResult();
    }
}
