<?php

namespace Database\Factories;

use App\Models\Color;
use App\Models\Size;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Product::class;
    
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'size_id' => Size::inRandomOrder()->first()->id,
            'color_id' => Color::inRandomOrder()->first()->id,
        ];
    }
}
