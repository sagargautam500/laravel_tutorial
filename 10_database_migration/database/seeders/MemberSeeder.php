<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // You can use the factory to create test data
        // Example: \App\Models\Member::factory(10)->create();

      // Or you can manually insert data
        DB::table('members')->insert([
            ['name' => 'John Doe', 'email' => 'john@example.com', 'message' => 'Hello, this is a test message.'],
            ['name' => 'Jane Smith', 'email' => 'jane@example.com', 'message' => 'Hi, I would like to know more about your services.'],
            ['name' => 'Alice Johnson', 'email' => 'alice@example.com', 'message' => 'Greetings! I have a question regarding my account.'],
        ]);
    }
}
