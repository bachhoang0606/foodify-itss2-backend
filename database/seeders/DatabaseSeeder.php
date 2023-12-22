<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\FoodCategory;
use App\Models\FoodCategoryRegion;
use App\Models\Food;
use App\Models\Comment;
use App\Models\Step;
use App\Models\Ingredient;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        FoodCategory::factory(10)->create();
        FoodCategoryRegion::factory(5)->create();
        Food::factory(50)->create();
        Comment::factory(10)->create();
    }
}
