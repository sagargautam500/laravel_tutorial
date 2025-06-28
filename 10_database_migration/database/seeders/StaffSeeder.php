<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;



class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('staffs')->insert([
        //     ['name' => 'John Doe', 'email' => 'john@example.com', 'position' => 'Manager'],
        //     ['name' => 'Jane Smith', 'email' => 'jane@example.com', 'position' => 'Developer'],
        //     ['name' => 'Alice Johnson', 'email' => 'alice@example.com', 'position' => 'Designer'],
        // ]);
     
        DB::table('staffs')->insert([
            [
                'name' => Str::random(10),
                'email' => Str::random(10) . '@example.com',
                'position' => Str::random(5),
            ],
        ]);
    }
};
