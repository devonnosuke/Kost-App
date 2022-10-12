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
        $builder->select('*');
        $builder->join('kost', "kost.id_kost = $this->table.id_kost");
        $builder->join('user', "user.id_user = $this->table.id_user");
        return $builder->get()->getResult();
    }
}
