<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TrainFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->word . ' Express',
            'code' => strtoupper($this->faker->unique()->bothify('??##')),
            'seat_capacity' => $this->faker->numberBetween(80, 200),
        ];
    }
}
