<?php

namespace App\Database\Seeds;

use App\Models\UserModel;
use CodeIgniter\Test\Fabricator;
use CodeIgniter\Database\Seeder;


class UserSeeder extends Seeder
{


    public function run()
    {
        for ($i = 0; $i  < 10; $i++) {
            # code...
            // menggunakan getid_helper
            helper('getid');

            // Melakukan setting format data yang akan dibuat
            $formatters = [
                // 'id_pemilik'  => '1',
                'nama_user'  => 'name',
                'username'  => 'userName',
                'email' => 'email',
                'password' => 'password',
                'salt' => 'sha256',
            ];

            // Meng-inisialiasikan Faker baru
            $fabricator = new Fabricator(UserModel::class, $formatters, 'id_ID');

            // Mengenerate data Faker
            $data = $fabricator->make();

            // menambah data yang baru dibuat ke database
            $this->db->table('user')->insert($data);
        }
    }
}
