<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateInitialTables extends Migration
{
    public function up()
    {
        // Settings Table
        $this->forge->addField([
            'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'key' => ['type' => 'VARCHAR', 'constraint' => 100],
            'value' => ['type' => 'TEXT', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('settings');

        // Projects Table
        $this->forge->addField([
            'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'title' => ['type' => 'VARCHAR', 'constraint' => 255],
            'category' => ['type' => 'VARCHAR', 'constraint' => 100],
            'thumbnail' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'video_url' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'description' => ['type' => 'TEXT', 'null' => true],
            'sort_order' => ['type' => 'INT', 'constraint' => 11, 'default' => 0],
            'created_at' => ['type' => 'DATETIME', 'null' => true],
            'updated_at' => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('projects');

        // Services Table
        $this->forge->addField([
            'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'title' => ['type' => 'VARCHAR', 'constraint' => 255],
            'description' => ['type' => 'TEXT', 'null' => true],
            'icon' => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('services');

        // Testimonials Table
        $this->forge->addField([
            'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'client_name' => ['type' => 'VARCHAR', 'constraint' => 255],
            'content' => ['type' => 'TEXT'],
            'image' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('testimonials');

        // Admins Table
        $this->forge->addField([
            'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'username' => ['type' => 'VARCHAR', 'constraint' => 100],
            'password' => ['type' => 'VARCHAR', 'constraint' => 255],
            'created_at' => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('admins');
    }

    public function down()
    {
        $this->forge->dropTable('settings');
        $this->forge->dropTable('projects');
        $this->forge->dropTable('services');
        $this->forge->dropTable('testimonials');
        $this->forge->dropTable('admins');
    }
}
