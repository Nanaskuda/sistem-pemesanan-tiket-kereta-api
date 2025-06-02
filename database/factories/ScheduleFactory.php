<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Train;
use App\Models\Station;

class ScheduleFactory extends Factory
{
    public function definition(): array
    {
        $departure_station = Station::inRandomOrder()->first();
        $arrival_station = Station::inRandomOrder()->first();

        while ($arrival_station && $departure_station && $departure_station->id === $arrival_station->id) {
            $arrival_station = Station::inRandomOrder()->first();
        }

        return [
            'departure_station_id' => $departure_station->id,
            'arrival_station_id' => $arrival_station->id,
            'departure_time' => $this->faker->dateTimeBetween('now', '+2 days'),
            'arrival_time' => $this->faker->dateTimeBetween('+3 days', '+5 days'),
            'price' => $this->faker->numberBetween(150000, 500000),
        ];
    }
}
