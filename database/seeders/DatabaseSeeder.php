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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // User::factory(5)->create()->each(function ($user) {
        //     $user->foods()->saveMany(
        //         Food::factory(5)->create()->each(function ($food) {
        //             $food->category()->saveMany(FoodCategory::factory(10)->create());
        //             $food->region()->saveMany(FoodCategoryRegion::factory(3)->create());
        //             $food->comments()->saveMany(Comment::factory(3)->create());
        //             $food->step()->save(Step::factory()->create());
        //             $food->ingredients()->save(Ingredient::factory()->create());
        //         })
        //     );
        // });
        User::factory(10)->create();
        FoodCategory::factory(50)->create();
        FoodCategoryRegion::factory(5)->create();
        Food::factory(100)->create();
        Comment::factory(500)->create();
        Step::factory(10)->create();
        Ingredient::factory(100)->create();
    }
}
