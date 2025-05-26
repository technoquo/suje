<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GallerySeeder extends Seeder
{
    public function run(): void
    {
        // Obtener los años por ID
        $years = DB::table('years')->pluck('id', 'year'); // ['2022' => 1, ...]

        DB::table('galleries')->insert([
            [
                'title' => 'Lorem ipsum dolor sit amet',
                'image' => '',
                'status' => true,
                'year_id' =>  1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Lorem ipsum dolor sit amet',
                'image' => '',
                'status' => true,
                'year_id' =>  1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Lorem ipsum dolor sit amet',
                'image' => '',
                'status' => true,
                'year_id' =>  1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
