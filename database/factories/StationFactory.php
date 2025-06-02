<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StationFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->city . ' Station',
            'city' => $this->faker->city,
        ];
    }
}
