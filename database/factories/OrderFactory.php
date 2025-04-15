<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;
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
            
            'user_id' => User::inRandomOrder()->first()->id,
            'order_date' => $this->faker->dateTime(),
            'total_amount' => $this->faker->randomFloat(2, 10, 500),
            'status' => $this->faker->randomElement(['processing', 'shipped', 'delivered']),
            'product_id' => Product::inRandomOrder()->first()->id,
        ];
    }
}
