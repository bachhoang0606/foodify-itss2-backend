<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FoodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Food::class;
    public function definition()
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'created_at' => now(),
            'deleted_flag' => $this->faker->numberBetween(0, 1),
            'name' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'views' => $this->faker->numberBetween(100, 1000),
            'total_like' => $this->faker->numberBetween(10, 100),
            'category_region_id' => \App\Models\FoodCategory::factory(),
            'category_id' => \App\Models\FoodCategory::factory(),
            'thumbnail' => $this->faker->imageUrl(),
            'video' => $this->faker->url,
            'prep_time' => $this->faker->numberBetween(10, 60),
            'cooking_time' => $this->faker->numberBetween(20, 120),
            'servings' => $this->faker->numberBetween(2, 10),
        ];
    }
}
