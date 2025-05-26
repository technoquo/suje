<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class YearSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('years')->insert([
            [
                'year' => '2022',
                'image' => '',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'year' => '2023',
                'image' => '',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'year' => '2024',
                'image' => '',
                'active' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
