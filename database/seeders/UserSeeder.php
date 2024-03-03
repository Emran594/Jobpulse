<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create 20 users
        for ($i = 0; $i < 20; $i++) {
            $role = '3'; // default role

            // Adjust role based on conditions
            if ($i === 0) {
                $role = '1'; // one user with role 1
            } elseif ($i < 11) {
                $role = '2'; // 10 users with role 2
            }

            User::create([
                'name' => 'User ' . ($i + 1),
                'email' => 'user' . ($i + 1) . '@example.com',
                'otp' => '0', // Default otp
                'password' => bcrypt('password'), // You may adjust this according to your authentication configuration
                'role' => $role, // Assigning role based on conditions
            ]);
        }
    }
}
