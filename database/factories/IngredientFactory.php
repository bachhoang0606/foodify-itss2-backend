<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Ingredient;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\odel=Ingredient>
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
        return [
            'foods_id' => \App\Models\Food::factory(),
            'description' => $this->faker->sentence,
        ];
    }
}
