<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('abouts')->insert([
            'title' => 'Why Choose Us',
            'subtitle' => 'We Make Our customers happy by giving Best services',
            'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum.',
            'image1' => '',
            'image2' => '',
            'image3' => '',
            'link_video' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
