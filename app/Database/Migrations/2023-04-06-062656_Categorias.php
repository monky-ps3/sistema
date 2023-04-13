<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Categorias extends Migration
{
    public function up()
    {
        $this->forge->addField(
            [
                'id' => [
                    'type' => 'int',
                    'constraint' => 5,
                    'unsingned' => true,
                    'auto_increment' => true
                ],
                'titulo' => [
                    'type' => 'varchar',
                    'constraint' => 255
                ]
            ]
        );
        $this->forge->addKey('id',true);
        $this->forge->createTable('categorias');
    }

    public function down()
    {
        $this->forge->dropTable('categorias');
    }
}
