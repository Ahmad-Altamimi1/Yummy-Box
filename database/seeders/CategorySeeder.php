<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();

        // Insert new data
        DB::table('categories')->insert([
            'name' => 'kind',
            'image' => 'uplods/hero_1.jpg',
            'description' => 'Donate to a learning center or educational goods.',
        ],
            [
                'name' => 'kind',
                'image' => 'uplods/hero_2.jpg',
                'description' => 'Donate to a learning center or educational goods.',
            ],
            [
                'name' => 'kind',
                'image' => 'uplods/hero_3.jpg',
                'description' => 'Donate to a learning center or educational goods.',
            ]
    );


     DB::table('categories')->insert(
        
            [
                'name' => 'kind',
                'image' => 'uplods/hero_2.jpg',
                'description' => 'Donate to a learning center or educational goods.',
            ]);
    }
    }

