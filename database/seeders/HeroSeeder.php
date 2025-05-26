<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeroSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('heroes')->insert([
            [
                'name' => 'Suje',
                'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam placerat sem non elit ornare hendrerit.',
                'description' => 'at faucibus lacus sagittis a. Sed viverra elementum dolor in placerat. Donec elit metus, luctus eu consectetur non, dignissim vel tellus. Maecenas at ullamcorper nisi, sed consectetur orci. Fusce at pretium nisi, vel fermentum diam. Integer tincidunt vehicula cursus. Vivamus ut pharetra arc',
                'lines' => 'bus 82, train gare luxemburgo.”',
                'hour_office' => 'Lundi - Vendredi : 08:00 - 17:00',
                'email' => 'info.suje@gmail.com',
                'phone' => '3221234567',
                'address' => 'Rue Louis Hap 16, 1040 Etterbeek',
                'image' => '',
                'logo' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
