<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Collection;
use Faker\Factory as FakerFactory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    private $localizedFaker;

    public function __construct($count = null,
        ?Collection $states = null,
        ?Collection $has = null,
        ?Collection $for = null,
        ?Collection $afterMaking = null,
        ?Collection $afterCreating = null,
        $connection = null,
        ?Collection $recycle = null)
    {
        parent::__construct($count, $states, $has, $for, $afterMaking, $afterCreating, $connection, $recycle);
        $this->localizedFaker = FakerFactory::create('en_NG');
    }

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $phone_number = 0;
        switch ($this->faker->numberBetween(1, 3)) {
            case 1:
                $phone_number = $this->faker->numberBetween(6999999999, 7200000000);
                break;
            case 2:
                $phone_number = $this->faker->numberBetween(7999999999, 8200000000);
                break;
            case 3:
                $phone_number = $this->faker->numberBetween(8999999999, 9200000000);
                break;
        }

        return [
            'username' => $this->faker->unique()->username(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'email' => $this->faker->unique()->safeEmail(),
            'full_name' => $this->localizedFaker->name(),
            'phone_number' => $phone_number,
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
