<?php

namespace Database\Factories;

use App\Models\FoodCategoryRegion;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Food;
use App\Models\FoodCategory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Food>
 */
class FoodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Food::class;


    public function definition()
    {
        $regionIds = FoodCategoryRegion::pluck('id')->toArray();
        $userIds = User::pluck('id')->toArray();
        $categoryIds = FoodCategory::pluck('id')->toArray();
        $foodName = [
            'Phở Gà',
            'Bún Riêu',
            'Gỏi Cuốn',
            'Cơm Niêu',
            'Bánh Bao Nhân Thịt Xôi Nước',
            'Bún Bò Huế',
            'Bánh Mì Pate Chảo',
            'Bò Lúc Lắc',
            'Cơm Gà Hải Nam',
            'Bánh Canh Cua',
            'BẮP RANG BƠ',
            'MASALA DOSA',
            'CƠM THẬP CẨM PAELLA',
            'GỎI ĐU ĐỦ',
            'CƠM GÀ SINGAPORE',
            'POUTINE',
            'TACO',
            'BÁNH HẠNH NHÂN',
            'BÁNH MÌ NƯỚC KIỂU PHÁP',
            'CHICKEN PARM',
            'ANKIMO',
            'THỊT GIĂM BÔNG PARMA',
            'Canh ngao',
            'Canh chua cá khoai',
            'Canh chua cá lóc',
            'Canh thịt nạc nấu rau củ',
            'Canh kim chi thịt bò',
            'Canh gà hầm củ sen',
            'Canh ngao mồng tơi',
            'TOM YUM GOONG',
            'PENANG ASSAM LAKSA',
            'HAMBURGER',
            'VỊT QUAY BẮC KINH',
            'SUSHI',
            'PIZZA NAPOLI',
            'Bò xào thập cẩm',
            'Bò hầm khoai tây',
            'Súp thịt bò',
            'Canh thịt bò, dưa chua',
            'Steak',
            'Sườn bò nướng',
            'Súp cua trứng bắc thảo',
            'Sườn heo nướng sốt cay',
            'Bánh khúc cây',
            'Chè Thái',
            'Ức gà áp chảo với sốt cam mật ong',
            'Ức gà sốt húng quế',
            'Bánh xèo',
            'Cánh gà chiên nước mắm',
            'Cơm cháy chà bông',
            'Đậu hủ sốt cà',
            'Tôm rim nước mắm',
        ];

        $foodVideo = [
            'https://www.youtube.com/watch?v=i49DgHaid9I&pp=ygUUQ8OhY2ggbMOgbSBwaOG7nyBnw6A%3D',
            'https://www.youtube.com/watch?v=rGd-uETciYg&pp=ygUVQ8OhY2ggbMOgbSBiw7puIHJpw6p1',
            'https://www.youtube.com/watch?v=uQwF7Rrm0ng&pp=ygUcQ8OhY2ggbMOgbSBn4buPaSBjdeG7kW4gbmdvbg%3D%3D',
            'https://www.youtube.com/watch?v=F8hSgzWyw-s&pp=ygUaQ8OhY2ggbMOgbSBjxqFtIG5pw6p1IG5nb24%3D',
            'https://www.youtube.com/watch?v=T_ChiyfuSLs&pp=ygUwY8O0bmcgdGjhu6ljIELDoW5oIEJhbyBOaMOibiBUaOG7i3QgWMO0aSBOxrDhu5tj',
            'https://www.youtube.com/watch?v=A_o2qfaTgKs&pp=ygUbY8O0bmcgdGjhu6ljIELDum4gQsOyIEh14bq_',
            'https://www.youtube.com/watch?v=IvuUplKo8p4&pp=ygUiY8O0bmcgdGjhu6ljIELDoW5oIE3DrCBQYXRlIENo4bqjbw%3D%3D',
            'https://www.youtube.com/watch?v=MRq6KIG-XQM&pp=ygUbY8O0bmcgdGjhu6ljIELDsiBMw7pjIEzhuq9j',
            'https://www.youtube.com/watch?v=pUWzJyu2_80&pp=ygUfY8O0bmcgdGjhu6ljIEPGoW0gR8OgIEjhuqNpIE5hbQ%3D%3D',
            'https://www.youtube.com/watch?v=or9SwBBG6p0&pp=ygURJ0LDoW5oIENhbmggQ3VhJyw%3D',
            'https://www.youtube.com/shorts/gDhnDX57KL4',
            'https://www.youtube.com/watch?v=LTNVvmSZKj0&pp=ugMICgJ2aRABGAHKBRhjw7RuZyB0aOG7qWMgTUFTQUxBIERPU0E%3D',
            'https://www.youtube.com/watch?v=DfyidWwm9IQ&pp=ygUlY8O0bmcgdGjhu6ljIEPGoE0gVEjhuqxQIEPhuqhNIFBBRUxMQQ%3D%3D',
            'https://www.youtube.com/watch?v=WBMq5ydO82Q&pp=ygUcY8O0bmcgdGjhu6ljIEfhu45JIMSQVSDEkOG7pg%3D%3D',
            'https://www.youtube.com/watch?v=d7EeO7M6diw&pp=ygUfY8O0bmcgdGjhu6ljIEPGoE0gR8OAIFNJTkdBUE9SRQ%3D%3D',
            'https://www.youtube.com/watch?v=sppGyMuky5I&pp=ugMICgJ2aRABGAHKBRRjw7RuZyB0aOG7qWMgUE9VVElORQ%3D%3D',
            'https://www.youtube.com/watch?v=hYGi_EYFQi4&pp=ygURY8O0bmcgdGjhu6ljIFRBQ08%3D',
            'https://www.youtube.com/watch?v=DrjgtZqU3j0&pp=ygUiY8O0bmcgdGjhu6ljICBCw4FOSCBI4bqgTkggTkjDgk4nLA%3D%3D',
            'https://www.youtube.com/watch?v=ESv-kZNllRs&pp=ygUsY8O0bmcgdGjhu6ljICBCw4FOSCBNw4wgTsav4buaQyBLSeG7glUgUEjDgVA%3D',
            'https://www.youtube.com/watch?v=WI_ut7dTRQ8&pp=ugMICgJ2aRABGAHKBR5jw7RuZyB0aOG7qWMgICAnQ0hJQ0tFTiBQQVJNJyw%3D',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
        ];

        $index = $this->faker->numberBetween(0, 19);

        return [
            'users_id' => $this->faker->randomElement($userIds),
            'created_at' => now(),
            'deleted_flag' => $this->faker->numberBetween(0, 1),
            // 'name' => $this->faker->sentence,
            'name' => $foodName[$index],
            'description' => $this->faker->paragraph,
            'views' => $this->faker->numberBetween(100, 1000),
            'total_like' => $this->faker->numberBetween(10, 100),
            'food_category_regions_id' => $this->faker->randomElement($regionIds),
            'food_categories_id' => $this->faker->randomElement($categoryIds),
            'thumbnail' => $this->faker->imageUrl(),
            // 'video' => $this->faker->url,
            'video' => $foodVideo[$index],
            'prep_time' => $this->faker->numberBetween(10, 60),
            'cooking_time' => $this->faker->numberBetween(20, 120),
            'servings' => $this->faker->numberBetween(2, 10),
        ];
    }
}
