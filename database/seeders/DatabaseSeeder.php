<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // \App\Models\User::factory(10)->create();
        // \App\Models\FoodCategory::factory(20)->create();
        // \App\Models\FoodCategoryRegion::factory(5)->create();
        // \App\Models\Food::factory(20)->create();
        \App\Models\Comment::factory(30)->create();
        // \App\Models\Step::factory(40)->create();
        // \App\Models\Ingreient::factory(10)->create();
    }
}
