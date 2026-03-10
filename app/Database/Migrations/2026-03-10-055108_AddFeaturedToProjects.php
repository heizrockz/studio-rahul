<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddFeaturedToProjects extends Migration
{
    public function up()
    {
        $this->forge->addColumn('projects', [
            'is_featured' => [
                'type'       => 'TINYINT',
                'constraint' => 1,
                'default'    => 0,
                'after'      => 'category'
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('projects', 'is_featured');
    }
}
