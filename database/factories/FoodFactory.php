<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Food;
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
        return [
            'users_id' => \App\Models\User::factory(),
            'created_at' => now(),
            'deleted_flag' => $this->faker->numberBetween(0, 1),
            'name' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'views' => $this->faker->numberBetween(100, 1000),
            'total_like' => $this->faker->numberBetween(10, 100),
            'food_category_regions_id' => \App\Models\FoodCategoryRegion::factory(),
            'food_categories_id' => \App\Models\FoodCategory::factory(),
            'thumbnail' => $this->faker->imageUrl(),
            'video' => $this->faker->url,
            'prep_time' => $this->faker->numberBetween(10, 60),
            'cooking_time' => $this->faker->numberBetween(20, 120),
            'servings' => $this->faker->numberBetween(2, 10),
        ];
    }
}
