<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
class FoodCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = FoodCategory::class;
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'type' => $this->faker->numberBetween(1, 3),
            'description' => $this->faker->sentence,
        ];
    }
}
