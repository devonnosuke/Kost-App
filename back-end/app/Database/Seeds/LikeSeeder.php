<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class LikeSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id_kost' => 323,
                'id_user'    => 32,
            ],
            [
                'id_kost' => 994,
                'id_user'    => 53,
            ],
            [
                'id_kost' => 833,
                'id_user'    => 22,
            ],
            [
                'id_kost' => 235,
                'id_user'    => 48,
            ],
            [
                'id_kost' => 322,
                'id_user'    => 66,
            ],
        ];

        // using query builder
        $this->db->table('like')->insertBatch($data);
    }
}
