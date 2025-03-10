<?php

namespace Database\Seeders;

use App\Models\Courses;
use App\Models\Double;
use App\Models\Maker;
use App\Models\Students;
use App\Models\Test;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory(10)->create();
        // Double::factory(100)->create();
        Students::factory(100)->create();
        Courses::factory(100)->create();
    }
}
