<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->truncate();

        // Insert new data
        DB::table('admins')->insert([
            'name' => 'Admin',
                'last_name' => 'admin',
                'email' => 'admin@admin.com',
                'password' =>Hash::make('adminadmin123456') ,


            ],
            
    );


    

            // Admin::factory()->count(1)->create();
    }

    }

