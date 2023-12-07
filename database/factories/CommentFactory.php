<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Comment::class;
    public function definition()
    {
        return [
            'food_id' => \App\Models\Food::factory(),
            'username' => $this->faker->userName,
            'content' => $this->faker->sentence,
        ];
    }
}
