<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('teams')->insert([
            [
                'full_name' => 'Olivia Andrium',
                'position' => 'Product Manager',
                'email' => 'olivia@example.com',
                'image' => '',
                'facebook' => 'https://facebook.com/olivia',
                'twitter' => 'https://twitter.com/olivia',
                'linkedin' => 'https://linkedin.com/in/olivia',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'full_name' => 'Jemse Kemorun',
                'position' => 'Product Designe',
                'email' => 'jemse@example.com',
                'image' => '',
                'facebook' => null,
                'twitter' => 'https://twitter.com/Jemse',
                'linkedin' => 'https://linkedin.com/in/Jemse',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'full_name' => 'Avi Pestarica',
                'position' => 'Web Designer',
                'email' => 'avi@example.com',
                'image' => '',
                'facebook' => null,
                'twitter' => 'https://twitter.com/avi',
                'linkedin' => 'https://linkedin.com/in/avi',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
