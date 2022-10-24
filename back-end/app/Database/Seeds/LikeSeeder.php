<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class LikeSeeder extends Seeder
{
    public function run()
    {
        for ($i = 0; $i  < 10; $i++) {
            helper('getid');
            $data =
                [
                    'id_kost' => getRandId('kost', 'id_kost'),
                    'id_user'    => getRandId('user', 'id_user')
                ];



            // using query builder
            $this->db->table('like')->insert($data);
        }
    }
}
