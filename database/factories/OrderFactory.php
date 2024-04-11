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
            'user_id' => $this->faker->unique()->user id(),
            'order_date' => $faker->dateTime();
            'status' => $this->faker->unique()->status(),
            'full_name' => $this->localizedFaker->name(),
            'phone_number' => $phone_number,
            //
        ];
    }
}
