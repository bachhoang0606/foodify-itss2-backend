<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Step;
use App\Models\Food;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Step>
 */
class StepFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Step::class;

    public function definition()
    {
        $foodStep = [
            ''
        ];
        $foodIds = Food::pluck('id')->toArray();
        return [
            'number' => $this->faker->unique()->numberBetween(6, 10),
            'foods_id' => $this->faker->randomElement($foodIds),
            'content' => $this->faker->paragraph,
        ];
    }
}
