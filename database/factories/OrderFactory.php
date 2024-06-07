<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use illuminate\Support\Collection;

class OrderFactory extends Factory
{
    private $statuses;

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
        $this->statuses = ["processing", "shipped", "delivered"];
    }

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
            'status' => $this->faker->randomElement($this->statuses),
        ];
    }
}
