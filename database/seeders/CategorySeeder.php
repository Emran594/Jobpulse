<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Sample categories data
        $categories = [
            ['name' => 'Full Stack Developer'],
            ['name' => 'Designer'],
            ['name' => 'Front End Developer'],
            ['name' => 'Backend Deveoloper'],
            ['name' => 'Digital Marketer'],
            // Add more categories as needed
        ];

        // Insert data into the categories table
        DB::table('categories')->insert($categories);
    }
}
