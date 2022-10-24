<?php

namespace App\Database\Seeds;

use App\Models\KostModel;
use CodeIgniter\Test\Fabricator;
use CodeIgniter\Database\Seeder;
use CodeIgniter\Test\Interfaces\FabricatorModel;

class KostSeeder extends Seeder
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
                'nama_kost'  => 'company',
                'alamat_kost'  => 'address',
                'kecamatan' => 'state',
                'longitude' => 'longitude',
                'latitude' => 'latitude',
                'jenis' => 'realText',
                'fasilitas' => 'realText',
            ];

            // Meng-inisialiasikan Faker baru
            $fabricator = new Fabricator(KostModel::class, $formatters, 'id_ID');

            // Mengenerate data Faker
            $data = $fabricator->make();

            // menambah Id_pemilik berdasaran id yang tersedia di pemilik
            $data['id_pemilik'] = getRandId('pemilik', 'id_pemilik');

            // menambah data yang baru dibuat ke database
            $this->db->table('kost')->insert($data);
        }
    }
}
