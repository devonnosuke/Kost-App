<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KostSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id_pemilik' => '1',
                'nama_kost'    => 'kost indah',
                'alamat_kost' => 'jln.dewisartika',
                'kecamatan'   => 'palu timur',
                'longitude' => '243565',
                'latitude' => '349735',
                'jenis' => 'kost perempuan',
                'fasilitas' => 'ada ac kasur dan lemari',
                'foto' => 'kost.jpg',

            ],
            [
                'id_pemilik' => '2',
                'nama_kost'    => 'kost permata',
                'alamat_kost' => 'jln.setiabudi',
                'kecamatan' => 'palu barat',
                'longitude' => '232334',
                'latitude' => '97563',
                'jenis' => 'kost campuran',
                'fasilitas' => 'tidak ada hanya berisi kost kosong ',
                'foto' => 'kost_permata.jpg',

            ],

            [
                'id_pemilik' => '3',
                'nama_kost'    => 'kost invinite',
                'alamat_kost' => 'jln.kalukubula',
                'kecamatan' => 'palu selatan',
                'longitude' => '97845600',
                'latitude' => '2835690',
                'jenis' => 'kost campuran',
                'fasilitas' => 'kos kosong',
                'foto' => 'kost_api.jpg',

            ],

            [
                'id_pemilik' => '4',
                'nama_kost'    => 'kost destik',
                'alamat_kost' => 'jln.sParman',
                'kecamatan' => 'palu utara',
                'longitude' => '97845600',
                'latitude' => '2835690',
                'jenis' => 'kost campuran',
                'fasilitas' => 'kos kosong',
                'foto' => 'kost_api.jpg',

            ],

            [
                'id_pemilik' => '5',
                'nama_kost'    => 'kost destik',
                'alamat_kost' => 'jln.sParman',
                'kecamatan' => 'palsel',
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
