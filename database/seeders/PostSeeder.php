<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('posts')->insert([
            [
                'image' => null,
                'title' => 'La importancia de la accesibilidad digital',
                'description' => 'Exploramos por qué el acceso digital debe ser universal para todas las personas, sin importar su condición.',
                'user_id' => 1,
                'date_published' => Carbon::now()->subDays(10),
                'status' => 'published',
                'link_video' => 'https://www.youtube.com/watch?v=video1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => null,
                'title' => 'Tecnología y educación inclusiva',
                'description' => 'Cómo las herramientas tecnológicas están abriendo oportunidades para el aprendizaje accesible.',
                'user_id' => 1,
                'date_published' => Carbon::now()->subDays(3),
                'status' => 'draft',
                'link_video' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
