<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KostSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id_pemilik' => '435',
                'nama_kost'    => 'kost indah',
                'alamat_kost' => 'jln.dewisartika',
                'longitude' => '243565',
                'latitude' => '349735',
                'jenis' => 'kost perempuan',
                'fasilitas' => 'ada ac kasur dan lemari',
                'foto' => 'kost.jpg',

            ],
            [
                'id_pemilik' => '987',
                'nama_kost'    => 'kost permata',
                'alamat_kost' => 'jln.setiabudi',
                'longitude' => '232334',
                'latitude' => '97563',
                'jenis' => 'kost campuran',
                'fasilitas' => 'tidak ada hanya berisi kost kosong ',
                'foto' => 'kost_permata.jpg',

            ],

            [
                'id_pemilik' => '579',
                'nama_kost'    => 'kost invinite',
                'alamat_kost' => 'jln.kalukubula',
                'longitude' => '97845600',
                'latitude' => '2835690',
                'jenis' => 'kost campuran',
                'fasilitas' => 'kos kosong',
                'foto' => 'kost_api.jpg',

            ],

            [
                'id_pemilik' => '8446',
                'nama_kost'    => 'kost destik',
                'alamat_kost' => 'jln.sParman',
                'longitude' => '97845600',
                'latitude' => '2835690',
                'jenis' => 'kost campuran',
                'fasilitas' => 'kos kosong',
                'foto' => 'kost_api.jpg',

            ],
        ];



        // Using Query Builder
        $this->db->table('kost')->insertBatch($data);
    }
}
