<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StepFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Step::class;
    public function definition()
    {
        return [
            'number' => $this->faker->numberBetween(1, 10),
            'food_id' => \App\Models\Food::factory(),
            'content' => $this->faker->paragraph,
        ];
    }
}
