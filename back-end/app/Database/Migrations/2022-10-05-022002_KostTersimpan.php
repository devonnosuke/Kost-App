<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class KostTersimpan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_kost_tersimpan' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_kost' => [
                'type'           => 'INT',
                'constraint'     => 5,

            ],
            'id_user' => [
                'type'           => 'INT',
                'constraint'     => 5,

            ],

        ]);
        $this->forge->addKey('id_kost_tersimpan', true);
        $this->forge->createTable('kost_tersimpan');
    }

    public function down()
    {
        $this->forge->dropTable('kost_tersimpan');
    }
}
