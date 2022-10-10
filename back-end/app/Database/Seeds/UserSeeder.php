<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{


    public function run()
    {
        $data = [
            [
                'nama_user' => 'mauliani',
                'username'  => 'nyyanii',
                'email'     => 'mauliani020@gmail.com',
                'password'  => 'yanicantik',
            ],
            [
                'nama_user' => 'mark lee',
                'username'  => 'markie',
                'email'     => 'mark@gmail.com',
                'password'  => 'markganteng',
            ],
            [
                'nama_user' => 'auliyasari',
                'username'  => 'uul',
                'email'     => 'auliyasari@gmail.com',
                'password'  => 'uulcantik',
            ],
            [
                'nama_user' => 'mohikhwanaldi',
                'username'  => 'aldi',
                'email'     => 'aldi@gmail.com',
                'password'  => 'aldianjay',
            ],
            [
                'nama_user' => 'jisungpark',
                'username'  => 'jisung',
                'email'     => 'jisung@gmail.com',
                'password'  => 'jisungkiyowo',
            ],
        ];

        // using query builder
        $this->db->table('user')->insertBatch($data);
    }
}
