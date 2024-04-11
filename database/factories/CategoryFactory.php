<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Collection;
use Faker\Factory as FakerFactory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            //'status' => $this->faker->unique()->status(),
            //'full_name' => $this->localizedFaker->name(),
            //'phone_number' => $phone_number,
            //
        ];
    }
}
