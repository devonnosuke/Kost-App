<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KostTersimpanSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id_kost'           => 1,
                'id_user'           => 1,
            ],
            [
                'id_kost'           => 2,
                'id_user'           => 2,
            ],
            [
                'id_kost'           => 3,
                'id_user'           => 3,
            ],
            [
                'id_kost'           => 4,
                'id_user'           => 5,
            ],
            [
                'id_kost'           => 5,
                'id_user'           => 5,
            ],
        ];

        // using query builder
        $this->db->table('kost_tersimpan')->insertBatch($data);
    }
}
