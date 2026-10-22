<?php

namespace Database\Seeders;

use App\Models\WorkoutCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkoutCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WorkoutCategory::factory()->count(3)->create();
    }
}
