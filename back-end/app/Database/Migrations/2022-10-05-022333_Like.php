<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Like extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_like' => [
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
            'created_at' => [
                'type'               => 'DATETIME',
                'null'               => 'true',

            ],
            'updated_at' => [
                'type'   => 'DATETIME',
                'null'   => true,
            ],

        ]);
        $this->forge->addKey('id_like', true);
        $this->forge->createTable('like');
    }

    public function down()
    {
        $this->forge->dropTable('like');
    }
}
