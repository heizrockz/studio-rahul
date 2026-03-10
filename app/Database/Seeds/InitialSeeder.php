<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class InitialSeeder extends Seeder
{
    public function run()
    {
        // Settings
        $settings = [
            ['key' => 'site_name', 'value' => 'AMBER STUDIO'],
            ['key' => 'contact_email', 'value' => 'hello@amber.studio'],
            ['key' => 'location', 'value' => 'LOS ANGELES, CALIFORNIA'],
            ['key' => 'footer_text', 'value' => '© 2024 AMBER STUDIO. ALL RIGHTS RESERVED.'],
        ];
        $this->db->table('settings')->insertBatch($settings);

        // Admin User (password: admin123)
        $admin = [
            'username' => 'admin',
            'password' => password_hash('admin123', PASSWORD_DEFAULT),
            'created_at' => date('Y-m-d H:i:s'),
        ];
        $this->db->table('admins')->insert($admin);

        // Dummy Projects
        $projects = [
            [
                'title'     => 'OF EARTH',
                'category'  => 'FILMS',
                'thumbnail' => 'https://images.unsplash.com/photo-1492691523567-30730029ad0a?q=80&w=2070&auto=format&fit=crop',
                'description' => 'A visual journey through the elements.',
                'sort_order' => 1,
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title'     => 'NEON NIGHTS',
                'category'  => 'COMMERCIAL',
                'thumbnail' => 'https://images.unsplash.com/photo-1514306191717-452ec28c7814?q=80&w=2070&auto=format&fit=crop',
                'description' => 'Urban vibes and city lights.',
                'sort_order' => 2,
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title'     => 'SILENT PEAKS',
                'category'  => 'STILLS',
                'thumbnail' => 'https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?q=80&w=2070&auto=format&fit=crop',
                'description' => 'The serenity of high altitudes.',
                'sort_order' => 3,
                'created_at' => date('Y-m-d H:i:s'),
            ],
        ];
        $this->db->table('projects')->insertBatch($projects);
    }
}
