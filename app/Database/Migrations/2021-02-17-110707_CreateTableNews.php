<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableNews extends Migration
{
    public function up(): void
    {
        $this->forge->addField(
            [
                'id' => [
                    'type' => 'INT',
                    'constraint' => 11,
                    'unsigned' => true,
                    'auto_increment' => true,
                ],
                'title' => [
                    'type' => 'VARCHAR',
                    'constraint' => '128',
                    'null' => false,
                ],
                'slug' => [
                    'type' => 'VARCHAR',
                    'constraint' => '128',
                    'null' => false,
                ],
                'body' => [
                    'type' => 'TEXT',
                    'null' => false,
                ],
            ]
        );
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('news');
    }

    public function down(): void
    {
        $this->forge->dropTable('news');
    }
}
