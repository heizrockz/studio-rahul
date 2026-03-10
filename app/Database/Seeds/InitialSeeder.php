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
                'title'     => 'AURORA BOREALIS',
                'category'  => 'FILMS',
                'is_featured' => 1,
                'thumbnail' => 'https://images.unsplash.com/photo-1531366930477-4f85e80ad90a?q=80&w=2070&auto=format&fit=crop',
                'video_url' => 'https://assets.mixkit.co/videos/preview/mixkit-stars-in-the-night-sky-slow-motion-26852-large.mp4',
                'description' => 'A cinematic exploration of the northern lights and the silence of the Arctic.',
                'sort_order' => 1,
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title'     => 'MIDNIGHT IN TOKYO',
                'category'  => 'COMMERCIAL',
                'is_featured' => 1,
                'thumbnail' => 'https://images.unsplash.com/photo-1540959733332-eab4deabeeaf?q=80&w=2094&auto=format&fit=crop',
                'video_url' => 'https://assets.mixkit.co/videos/preview/mixkit-city-traffic-at-night-in-time-lapse-1234-large.mp4',
                'description' => 'Capturing the vibrant energy and neon glow of Japan\'s beating heart.',
                'sort_order' => 2,
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title'     => 'THE LAST PEAK',
                'category'  => 'STILLS',
                'is_featured' => 1,
                'thumbnail' => 'https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?q=80&w=2070&auto=format&fit=crop',
                'video_url' => '',
                'description' => 'A photographic study of solitude at the edge of the world.',
                'sort_order' => 3,
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title'     => 'ECHOES OF SILENCE',
                'category'  => 'FILMS',
                'is_featured' => 1,
                'thumbnail' => 'https://images.unsplash.com/photo-1500673922987-e212871fec22?q=80&w=2070&auto=format&fit=crop',
                'video_url' => 'https://assets.mixkit.co/videos/preview/mixkit-person-walking-on-a-shoreline-during-sunset-34532-large.mp4',
                'description' => 'A poetic visual narrative on memory and time.',
                'sort_order' => 4,
                'created_at' => date('Y-m-d H:i:s'),
            ],
        ];
        $this->db->table('projects')->insertBatch($projects);

        // Services
        $services = [
            [
                'title' => 'Narrative Design',
                'description' => 'We weave complex emotional threads into cohesive visual stories that capture the imagination and soul of the viewer.',
            ],
            [
                'title' => 'Cinematic Strategy',
                'description' => 'Every frame is calculated. We develop visual identities that align with brand values while maintaining artistic integrity.',
            ],
            [
                'title' => 'Technical Artistry',
                'description' => 'Fusing cutting-edge camera technology with old-school film techniques to create a unique, timeless aesthetic.',
            ],
            [
                'title' => 'Immersive Soundscapes',
                'description' => 'Sound is half the experience. We compose custom auditory environments that breathe life into every visual moment.',
            ],
        ];
        $this->db->table('services')->insertBatch($services);

        // Testimonials
        $testimonials = [
            [
                'client_name' => 'Sarah Johnson',
                'content' => 'Lograva transformed our vision into a breathtaking cinematic experience. Their attention to detail is unmatched.',
                'image' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=1974&auto=format&fit=crop',
            ],
            [
                'client_name' => 'David Chen',
                'content' => 'The most professional studio we have ever worked with. They truly understand the art of storytelling.',
                'image' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=1974&auto=format&fit=crop',
            ],
        ];
        $this->db->table('testimonials')->insertBatch($testimonials);
    }
}
