<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FeatureSeeder extends Seeder
{
    public function run(): void
    {
        $features = [
            [
                'title' => 'Notre Mission',
                'description' => 'Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.',
                'image' => '',
            ],
            [
                'title' => 'Notre Valeurs',
                'description' => 'Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.',
                'image' => '',
            ],
            [
                'title' => 'notre asbl',
                'description' => 'Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.',
                'image' => '',
            ],
        ];

        foreach ($features as $feature) {
            DB::table('features')->insert([
                'title' => $feature['title'],
                'slug' => Str::slug($feature['title']),
                'description' => $feature['description'],
                'image' => $feature['image'],
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
