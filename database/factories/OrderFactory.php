<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            
            'user_id' => $this->faker->numberBetween(1, 100),
            'order_date' => $this->faker->dateTime(),
            'total_amount' => $this->faker->randomFloat(2, 10, 500),
            'status' => $this->faker->randomElement(['processing', 'shipped', 'delivered']),
        ];
    }
}
