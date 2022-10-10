<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pemilik extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pemilik' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_pemilik' => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,

            ],
            'username' => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,

            ],
            'email' => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,

            ],
            'no_telp' => [
                'type'           => 'VARCHAR',
                'constraint'     => 19,
            ],
            'no_wa' => [
                'type'           => 'VARCHAR',
                'constraint'     => 19,
            ],
            'alamat_ktp' => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,

            ],
            'password' => [
                'type'           => 'VARCHAR',
                'constraint'     => 99,

            ],
            'salt' => [
                'type'           => 'VARCHAR',
                'constraint'     => 225,

            ],
            'created_at'  => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
            'update_at'  => [
                'type'           => 'DATETIME',
                'null'           => true,

            ],

        ]);
        $this->forge->addKey('id_pemilik', true);
        $this->forge->createTable('pemilik');
    }

    public function down()
    {
        $this->forge->dropTable('pemilik');
    }
}
