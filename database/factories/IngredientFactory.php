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
        $ingredients = [
            'Hành tỏi',
            'Hành lá',
            'Nghệ',
            'Gừng',
            'Hành tây',
            'Cà chua',
            'Ớt chuông',
            'Ớt cay',
            'Ớt xanh',
            'Cà rốt',
            'Khoai tây',
            'Củ cải',
            'Bắp cải',
            'Dưa chuột',
            'Dưa leo',
            'Cà rốt',
            'Bông cải xanh',
            'Cà chua cherry',
            'Khoai lang',
            'Rau diếp',
            'Rau cải',
            'Rau muống',
            'Cải bắp',
            'Rau răm',
            'Cần tây',
            'Cải xoong',
            'Rau cần',
            'Cà rốt baby',
            'Cải thảo',
            'Ổi xanh'
        ];
        $ingredients_no_accent = [
            'Hanh toi',
            'Hanh la',
            'Nghe',
            'Gung',
            'Hanh tay',
            'Ca chua',
            'Ot chuong',
            'Ot cay',
            'Ot xanh',
            'Ca rot',
            'Khoai tay',
            'Cu cai',
            'Bap cai',
            'Dua cuot',
            'Dua leo',
            'Ca rot',
            'Bong cai xanh',
            'Ca chua cherry',
            'Khoai lang',
            'Rau diep',
            'Rau cai',
            'Rau muong',
            'Cai bap',
            'Rau ram',
            'Can tay',
            'Cai xoong',
            'Rau can',
            'Ca rot baby',
            'Cai thao',
            'Oi xanh'
        ];
        $quantities = [
            '1 gam',
            '2 lạng',
            '1 thìa',
            '3 quả',
            '4 lá',
            '200ml',
            '1 củ',
            '1/2 củ',
            '5 trái',
            '300ml',
            '1 bịch',
            '1/4 củ',
            '100g',
            '2 quả',
            '1 cây',
            '1/2 cây',
            '1 gói',
            '250ml',
            '2 thìa',
            '3 lát',
            '1/2 cây',
            '1/4 cây',
            '2 cuốn',
            '5gr',
            '1/2 củ',
            '4 lát',
            '1/4 củ',
            '200g',
            '2 quả',
            '1/2 cây',
            '100ml',
            '1/3 cây',
            '2 cây',
            '1 quả',
            '5gr',
            '1/2 củ',
            '4 lát',
            '1/4 củ',
            '200g',
            '2 quả',
            '1/2 cây',
            '100ml',
            '1/3 cây',
            '2 cây',
            '1 quả',
            '5gr',
            '1/2 củ',
            '4 lát',
            '1/4 củ',
            '200g'
        ];
        $index = $this->faker->numberBetween(0, 29);
        $foodIds = Food::pluck('id')->toArray();
        return [
            'foods_id' => $this->faker->randomElement($foodIds),
            'name' => $ingredients[$index],
            'name_no_accent' => $ingredients_no_accent[$index],
            'quantity' => $quantities[$this->faker->numberBetween(0, 49)]
        ];
    }
}
