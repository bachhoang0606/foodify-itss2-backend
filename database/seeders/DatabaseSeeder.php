<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

/**
 * Class DatabaseSeeder.
 */
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\User::factory(10)->create();
        \App\Models\FoodCategory::factory(50)->create();
        \App\Models\Food::factory(20)->create();
        \App\Models\Comment::factory(100)->create();
        \App\Models\Step::factory(10)->create();
        \App\Models\Ingredient::factory(50)->create();
    }
}
