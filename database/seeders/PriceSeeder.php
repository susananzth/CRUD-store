<?php

namespace Database\Seeders;

use App\Models\Price;
use Illuminate\Database\Seeder;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prices = [
            [
                'id'    => 1,
                'description' => '20',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id'    => 2,
                'description' => '20',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id'    => 3,
                'description' => '50',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id'    => 4,
                'description' => '10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id'    => 5,
                'description' => '15',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        Price::insert($prices);
    }
}
