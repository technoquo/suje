<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('services')->insert([
            [
                'title' => 'Crafted for Startups',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In convallis tortor',
                'image' => '',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'High-quality Design',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In convallis tortor.',
                'image' => '',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'All Essential Sections',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In convallis tortor.',
                'image' => '',
                'status' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
