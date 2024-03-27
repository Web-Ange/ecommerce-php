<?php

namespace Database\Factories;

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
            'name' => substr($this->faker->sentence(), 0, -1),
            'description' => $this->faker->paragraphs(3, true),
            'price' => $this->faker->randomFloat(2, 0, 999999),
            'stock_quantity' => $this->faker->randomNumber(4)
        ];
    }
}
