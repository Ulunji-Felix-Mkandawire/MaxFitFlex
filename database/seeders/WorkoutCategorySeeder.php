<?php

namespace Database\Seeders;

use App\Models\WorkoutCategory;
use Illuminate\Database\Seeder;

class WorkoutCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create records with faker
        // WorkoutCategory::factory()->count(3)->create();

        // create real default values
        $categories = collect([
            ['name' => 'upper body'],
            ['name' => 'lower body'],
            ['name' => 'midsection & core'],
        ]);

        $categories->map(fn ($category) => WorkoutCategory::create($category));
    }
}
