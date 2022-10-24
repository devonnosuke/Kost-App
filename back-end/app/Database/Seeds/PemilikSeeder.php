<?php

namespace App\Database\Seeds;

use App\Models\PemilikModel;
use CodeIgniter\Test\Fabricator;
use CodeIgniter\Database\Seeder;

class PemilikSeeder extends Seeder
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
                'nama_pemilik'  => 'name',
                'username'  => 'userName',
                'email' => 'email',
                'no_telp' => 'e164PhoneNumber',
                'no_wa' => 'e164PhoneNumber',
                'alamat_ktp' => 'address',
                'password' => 'password',
                'salt' => 'sha256',
            ];

            // Meng-inisialiasikan Faker baru
            $fabricator = new Fabricator(PemilikModel::class, $formatters, 'id_ID');

            // Mengenerate data Faker
            $data = $fabricator->make();

            // menambah data yang baru dibuat ke database
            $this->db->table('pemilik')->insert($data);
        }
    }
}
