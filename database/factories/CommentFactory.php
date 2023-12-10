<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Comment;
use App\Models\Food;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Comment::class;

    public function definition()
    {
        $foodIds = Food::pluck('id')->toArray();
        return [
            'foods_id' => $this->faker->randomElement($foodIds),
            'username' => $this->faker->userName,
            'content' => $this->faker->sentence,
        ];
    }
}
