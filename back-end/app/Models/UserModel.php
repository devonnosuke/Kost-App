<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'user';
    protected $primaryKey       = 'id_user';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['nama_user', 'username', 'email', 'password', 'salt', 'created_at', 'updated_at'];
    protected $updatedField  = 'updated_at';
    protected $createdField  = 'created_at';
    protected $useTimestamps = true;
}
