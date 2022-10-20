<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kost extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_kost' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_pemilik' => [
                'type'           => 'INT',
                'constraint'     => 5,

            ],
            'nama_kost' => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,

            ],
            'alamat_kost' => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,

            ],
            'kecamatan' => [
                'type'          => 'VARCHAR',
                'constraint'     => 100,
            ],
            'longitude' => [
                'type'           => 'FLOAT',

            ],
            'latitude' => [
                'type'           => 'FLOAT',

            ],
            'jenis' => [
                'type'           => 'VARCHAR',
                'constraint'     => 25,

            ],
            'fasilitas' => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,

            ],
            'foto' => [
                'type'           => 'VARCHAR',
                'constraint'     => 225,

            ],
            'created_at' => [
                'type'               => 'DATETIME',
                'null'               => true,

            ],
            'updated_at' => [
                'type'   => 'DATETIME',
                'null'   => true,
            ],

        ]);
        $this->forge->addKey('id_kost', true);
        $this->forge->createTable('kost');
    }

    public function down()
    {
        $this->forge->dropTable('kost');
    }
}
