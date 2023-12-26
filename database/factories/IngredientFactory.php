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
        $bunboIngre = [
            'Bắp bò 500 g',
            'Gân bò 300 g',
            'Móng bò 0.5 kg',
            'Xương ống (lợn hoặc bò) 500 g',
            'Muỗng cà phê mắm ruốc Huế 2',
            'Sả, gừng, hành tím khô, tỏi, ớt bột 10 g each',
            'Muỗng cà phê hạt nêm, đường, dầu điều 1 each',
            'Bún 400 g',
            'Rau sống (rau ngổ, rau mùi, rau giá, hành tươi, hoa chuối thái) 10 g each',
            'Giò lụa, chả thịt, chả cua, tiết lợn 100 g each',
            'Hạt điều màu đỏ, dầu ăn, hành củ, tỏi 45 g each',
            'Rau húng quế, húng bạc hà, giá đỗ, ớt, chanh 10 g each',
            'Bún tươi 600 g',
        ];

        $foodId = Food::where('name','Bún Bò Huế')->pluck('id')->first();
        
        $ingredients = [];
        foreach ($bunboIngre as $ingredient) {
            $ingredients[] = [
                'foods_id' => $foodId,
                'description' => $ingredient,
            ];
        }

        return $ingredients;
    }
}
