<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TableTeguran extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'sp_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'sp_title' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'sp_range' => [
                'type'       => 'INT',
                'constraint' => '5',
            ],
            'sp_description' => [
                'type' => 'TEXT',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('sp_id', true);
        $this->forge->createTable('teguran');
    }

    public function down()
    {
        $this->forge->dropTable('teguran');
    }
}
