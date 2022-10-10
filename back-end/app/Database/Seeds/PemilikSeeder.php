<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PemilikSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_pemilik' => 'aull',
                'username' => 'darth',
                'email'    => 'hshadyw@gmail.com',
                'no_telp'  => '082738174658',
                'no_wa'    => '083728193312',
                'alamat_ktp' => 'jalan lagarutu',
                'password' => '210705',
                'salt'  => 'hahaha',
            ],
            [
                'nama_pemilik' => 'alal',
                'username' => 'alsls',
                'email'    => 'hahaha@gmail.com',
                'no_telp'  => '082738227393',
                'no_wa'    => '083728328254',
                'alamat_ktp' => 'jalan tau',
                'password' => '283924',
                'salt'  => 'hdssd',
            ],
            [
                'nama_pemilik' => 'suaos',
                'username' => 'wieie',
                'email'    => 'dhcrnxjj@gmail.com',
                'no_telp'  => '082734289258',
                'no_wa'    => '084829023312',
                'alamat_ktp' => 'jalan merpati',
                'password' => '439535',
                'salt'  => 'eirghev',
            ],
            [
                'nama_pemilik' => 'suwql',
                'username' => 'wfiujecc',
                'email'    => 'ryurygfh@gmail.com',
                'no_telp'  => '082732492348',
                'no_wa'    => '082130942312',
                'alamat_ktp' => 'jalan otista',
                'password' => '382391',
                'salt'  => 'gruigfhb',
            ],
            [
                'nama_pemilik' => 'werefw',
                'username' => 'frccerh',
                'email'    => '5ergvf@gmail.com',
                'no_telp'  => '082348147158',
                'no_wa'    => '082124443312',
                'alamat_ktp' => 'inpres',
                'password' => '293810',
                'salt'  => 'weaijhc',
            ],
        ];

        // using query builder
        $this->db->table('pemilik')->insertBatch($data);
    }
}
