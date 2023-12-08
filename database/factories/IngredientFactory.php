<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Ingredient;
use App\Models\Food;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ingredient>
 */
class IngredientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Ingredient::class;
    public function definition()
    {
        $foodIds = Food::pluck('id')->toArray();
        return [
            'foods_id' => $this->faker->randomElement($foodIds),
            'description' => $this->faker->sentence,
        ];
    }
}
