<?php

namespace Database\Seeders;

use App\Models\Size;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sizes = Size::get('id');
        for ($i=1; $i < 6 ; $i++) {
            Product::findOrFail($i)->sizes()->sync($sizes);
        }
    }
}
