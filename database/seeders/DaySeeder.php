<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('days')->insert(
            [
                [
                    'id' => 1,
                    'day' => 'Sunday',
                ],
                [
                    'id' => 2,
                    'day' => 'Monday',
                ],
                [
                    'id' => 3,
                    'day' => 'Tuesday',
                ],
                [
                    'id' => 4,
                    'day' => 'Wednesday',
                ],
                [
                    'id' => 5,
                    'day' => 'Thursday',
                ],
            ]
        );
    }
}
