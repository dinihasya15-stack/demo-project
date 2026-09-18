<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Size;
use App\Models\Color;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::Factory(5)->create();

        Product::create([
            'name' => 'Sofa',
            'size_id' => Size::inRandomOrder()->first()->id,
            'color_id' => Color::inRandomOrder()->first()->id,
        ]);
    }
}
