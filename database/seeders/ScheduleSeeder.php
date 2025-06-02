<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScheduleSeeder extends Seeder
{
    public function run(): void
    {
        // DB::table('schedules')->insert([
        //     [
        //         'train_id' => 1,
        //         'departure_station_id' => 1,
        //         'arrival_station_id' => 2,
        //         'departure_time' => '2025-05-01 08:00:00',
        //         'arrival_time' => '2025-05-01 14:00:00',
        //         'price' => 350000,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'train_id' => 2,
        //         'departure_station_id' => 2,
        //         'arrival_station_id' => 3,
        //         'departure_time' => '2025-05-02 09:00:00',
        //         'arrival_time' => '2025-05-02 17:00:00',
        //         'price' => 400000,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        // ]);
    }
}

