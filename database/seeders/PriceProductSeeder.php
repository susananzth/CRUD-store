<?php

namespace Database\Seeders;

use App\Models\Price;
use App\Models\Product;
use Illuminate\Database\Seeder;

class PriceProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i < 6 ; $i++) {
            $price = Price::findOrFail($i);
            Product::findOrFail($i)->prices()->sync($price);
        }
    }
}
