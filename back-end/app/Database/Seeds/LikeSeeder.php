<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class LikeSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id_like' => 323,
                'id_user'    => 32,
            ],
            [
                'id_like' => 994,
                'id_user'    => 53,
            ],
            [
                'id_like' => 833,
                'id_user'    => 22,
            ],
            [
                'id_like' => 235,
                'id_user'    => 48,
            ],
            [
                'id_like' => 322,
                'id_user'    => 66,
            ],
        ];

        // using query builder
        $this->db->table('like')->insertBatch($data);
    }
}
