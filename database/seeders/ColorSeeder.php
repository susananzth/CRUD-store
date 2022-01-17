<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $colors = [
            [
                'id'    => 1,
                'description' => 'Blanco',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id'    => 2,
                'description' => 'Negro',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id'    => 3,
                'description' => 'Rojo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id'    => 4,
                'description' => 'Verde',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id'    => 5,
                'description' => 'Azul',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        Color::insert($colors);
    }
}
