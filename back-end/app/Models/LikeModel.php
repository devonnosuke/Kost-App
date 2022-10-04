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
}
