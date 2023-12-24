<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
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
        $this->call(FoodCategorySeeder::class);
        $this->call(FoodCategoryRegionSeeder::class);
        User::factory(10)->create();
        Food::factory(100)->create();
        Comment::factory(500)->create();
        $this->call(StepSeeder::class);
        $this->call(IngredientSeeder::class);
        Step::factory(100)->create();
        Ingredient::factory(100)->create();
    }
}
