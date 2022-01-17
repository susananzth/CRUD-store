<?php

namespace Database\Seeders;

use App\Models\Size;
use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sizes = [
            [
                'id'    => 1,
                'description' => 'XS',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id'    => 2,
                'description' => 'S',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id'    => 3,
                'description' => 'M',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id'    => 4,
                'description' => 'L',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id'    => 5,
                'description' => 'XL',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id'    => 6,
                'description' => 'XXL',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        Size::insert($sizes);
    }
}
