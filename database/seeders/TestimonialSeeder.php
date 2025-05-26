<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('testimonials')->insert([
            [
                'full_name' => 'Andrea Castillo',
                'position' => 'Estudiante de LESCO',
                'image' =>  null,
                'testimony' => 'El curso fue una experiencia maravillosa. Aprendí mucho y ahora me siento más conectada con la comunidad sorda.',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'full_name' => 'Luis Martínez',
                'position' => 'Director de Inclusión',
                'image' => null,
                'testimony' => 'Gracias a la consultoría, logramos hacer nuestra web accesible y fácil de navegar para todos.',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'full_name' => 'Carla Méndez',
                'position' => null,
                'image' => null,
                'testimony' => 'Recomiendo totalmente este servicio, el equipo fue muy profesional y empático.',
                'status' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
