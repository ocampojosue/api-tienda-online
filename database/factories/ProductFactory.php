<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence($nbWords = 2, $variableNbWords = false),
            'cost' => $this->faker->randomFloat($nbMaxDecimals = null, $min = 6, $max = 8),
            'price' => $this->faker->randomFloat($nbMaxDecimals = null, $min = 2, $max = 4),
            'stock' => $this->faker->numberBetween(100,1000),
            'category_id' => Category::all()->random()->id,
        ];
    }
}
