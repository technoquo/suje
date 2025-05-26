<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('clients')->insert([
            [
                'name' => 'Incluyeme.com',
                'image' => 'incluyeme.png',
                'url' => 'https://www.incluyeme.com/',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Hands On',
                'image' => 'handson.png',
                'url' => 'https://www.handson.org/',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'TechForAll',
                'image' => 'techforall.png',
                'url' => 'https://www.techforall.org/',
                'status' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
