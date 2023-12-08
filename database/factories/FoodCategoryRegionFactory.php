<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\FoodCategoryRegion;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FoodCategoryRegion>
 */
class FoodCategoryRegionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = FoodCategoryRegion::class;
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->sentence,
        ];
    }
}
