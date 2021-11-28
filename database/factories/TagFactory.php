<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence($nbWords = 2, $variableNbWords = false), //nbwords es la cantidad de palabras y variableNbWords en true activado y en false desactivado
            'description' =>$this->faker->sentence($nbWords = 4, $variableNbWords = false)
        ];
    }
}
