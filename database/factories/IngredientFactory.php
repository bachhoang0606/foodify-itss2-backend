<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class IngredientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Ingredient::class;
    public function definition()
    {
        return [
            'food_id' => \App\Models\Food::factory(),
            'description' => $this->faker->sentence,
        ];
    }
}
