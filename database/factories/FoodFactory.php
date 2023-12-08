<?php

namespace Database\Factories;

use App\Models\FoodCategoryRegion;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Food;
use App\Models\FoodCategory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Food>
 */
class FoodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Food::class;

    
    public function definition()
    {
        $regionIds = FoodCategoryRegion::pluck('id')->toArray();
        $userIds = User::pluck('id')->toArray();
        $categoryIds= FoodCategory::pluck('id')->toArray();

        return [
            'users_id' => $this->faker->randomElement($userIds),
            'created_at' => now(),
            'deleted_flag' => $this->faker->numberBetween(0, 1),
            'name' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'views' => $this->faker->numberBetween(100, 1000),
            'total_like' => $this->faker->numberBetween(10, 100),
            'food_category_regions_id' => $this->faker->randomElement($regionIds),
            'food_categories_id' => $this->faker->randomElement($categoryIds),
            'thumbnail' => $this->faker->imageUrl(),
            'video' => $this->faker->url,
            'prep_time' => $this->faker->numberBetween(10, 60),
            'cooking_time' => $this->faker->numberBetween(20, 120),
            'servings' => $this->faker->numberBetween(2, 10),
        ];
    }
}
