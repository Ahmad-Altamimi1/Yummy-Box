<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plan;
use Illuminate\Support\Facades\DB;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plans')->insert([
            [
                'name' => 'Kids Standard Plan',
                'price' => 10,
                'description' => 'Business Plan',
                'meals'=>5,
                    'time' => 7,

                "delivery" => 'Free Delivery'

            ],
            [
                'name' => 'Kids Premium plan',
                'price' => 30,
                'description' => 'Premium',
                'meals' => 20,
                    'time' => 30,

                "delivery"=> 'Free Delivery'
            ],
            [
                'name' => 'Employee Premium plan',
                
                'price' => 19.99,
                'description' => 'Premium',
                'meals' => 5,
                    'time' => 7,

                "delivery" => 'Free Delivery'
            ],
            [
                'name' => 'Employee Premium plan',
                'price' => 59,
                'description' => 'Premium', 
                 'meals' => 20,
                 'time' => 30,
                "delivery" => 'Free Delivery'
            ]
            ]
        );
        // foreach ($plans as $plan) {
        //     Plan::create($plan);
        // }
    }
}
