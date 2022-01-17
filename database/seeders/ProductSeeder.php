<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'id'    => 1,
                'description' => 'Camisa Blanca',
                'color_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id'    => 2,
                'description' => 'Camisa Negra',
                'color_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id'    => 3,
                'description' => 'Camisa Roja',
                'color_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id'    => 4,
                'description' => 'Camisa Verde',
                'color_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id'    => 5,
                'description' => 'Camisa Azul',
                'color_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        Product::insert($products);
    }
}
