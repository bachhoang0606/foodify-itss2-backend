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
        ];
        $foodName_no_accent = [
            'Pho Ga',
            'Bun Rieu',
            'Goi Cuon',
            'Com Nieu',
            'Banh Bao Nhan Thit Xoi Nuoc',
            'Bun Bo Hue',
            'Banh Mi Pate Chao',
            'Bo Luc Lac',
            'Com Ga Hai Nam',
            'Banh Canh Cua',
            'BAP RANG BO',
            'MASALA DOSA',
            'COM THAP CAM PAELLA',
            'GOI DU DU',
            'COM GA SINGAPORE',
            'POUTINE',
            'TACO',
            'BANH HANH NHAN',
            'BANH MI NUOC KIEU PHAP',
            'CHICKEN PARM',
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
        ];

        $foodImage = [
            'https://images.unsplash.com/photo-1610452220299-5edf90b8a6ed?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8J1BoJUUxJUJCJTlGJTIwRyVDMyVBMCclMkN8ZW58MHx8MHx8fDA%3D',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR-G3Ejs4UdeSWwSYHOpPRDhVrKv1Q4nRSl8A&usqp=CAU',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTtEZEZW8gTKQ31wQpHAJ9-gqE1OOuFacReuzWJQ8_Ubc8Z05dFVIE6rVpqP22I3D_1lGA&usqp=CAU',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSY0Jd1GIVbhKfXD1uhaWouhuNtJCK9rttavw&usqp=CAU',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ1iM_3s3RG5EURgfMmZlQDGg8GU7648MkvjA&usqp=CAU',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQiFRqSjKzraxO3ds4Rj0FQGFLDXVzijAmfQQ&usqp=CAU',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQd6kZMyxhBoq-JXe5Dq6sAvIt-24Fz9G3Jtw&usqp=CAU',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcScifgQ0kbKSJIUB_QRmPzN033EhdI3Wqh8Kw&usqp=CAU',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCAm3l24vlpQvMHk1JHkXr6ZzxFPdylkOpGg&usqp=CAU',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTMX_TTj9Ocf1wfteAeG0nSTVAsnutcd-p2hw&usqp=CAU',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRMUxXREijRWWvolnsRhfSbX6d4nIOZ4EQbhw&usqp=CAU',
            'https://images.unsplash.com/photo-1610192244261-3f33de3f55e4?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8J01BU0FMQSUyMERPU0EnJTJDfGVufDB8fDB8fHww',
            'https://images.unsplash.com/photo-1512058533999-106ee01bf777?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8J0MlQzYlQTBNJTIwVEglRTElQkElQUNQJTIwQyVFMSVCQSVBOE0lMjBQQUVMTEEnJTJDfGVufDB8fDB8fHww',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS6XQh23Wr1NeHJRgerQPpjSJn6DA8RrsFgsw&usqp=CAU',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSg2dG9-oJ4FyaC4I7Hna4VtPbigEYvQCjZyQ&usqp=CAU',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTCvsxiIOfOG-_ZT9eYdp2XEtqxSudJoQOJmQ&usqp=CAU',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRqjQNTueryDli37xkOHqSgkLlm30jPySkgYg&usqp=CAU',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSlQhNG0PhX3kgYS-nS9pssH9n0m_DOF9_ebw&usqp=CAU',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkLynh9NS2nbtiM_jA2fhBn2J52_p1PuwOXQ&usqp=CAU',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKvNQ5LOSbl-7gxmfXIjfzSErZW4tR4i_OIQ&usqp=CAU',
        ];




        $foodDescription = [
            'Sự hòa quyện của nước dùng phô mai từ xương gà, thịt gà mềm mịn, bún giòn, và rất nhiều gia vị hảo hạng, Phở Gà là bữa sáng hoặc trưa trọn vị tinh tế của ẩm thực Việt Nam',
            ' Hương vị tinh tế của nước dùng từ cua, sự ngon miệng của bún mềm mịn, và viên riêu béo ngon, Bún Riêu là một tác phẩm nghệ thuật ẩm thực đậm đà và đặc sắc.',
            'Mỗi cuộn nhẹ nhàng của Gỏi Cuốn là một bức tranh màu sắc, với những thành phần tươi ngon như tôm, thịt, bún, và rau sống, tạo nên một trải nghiệm ngon miệng không thể quên.',
            'Cơm Niêu là sự kết hợp hoàn hảo giữa hạt cơm giòn và hương vị thơm ngon của mực, tôm, và thịt. Một bữa ăn truyền thống ngon lành.',
            'Hòa quyện giữa vị bánh bao mềm mịn, nhân thịt thơm ngon, và hương vị đặc trưng của xôi nước, Bánh Bao Nhân Thịt Xôi Nước là một lựa chọn ngon miệng cho bữa ăn nhẹ.',
            'Nước dùng cay nồng, thịt bò mềm và bún giòn tạo nên một bát Bún Bò Huế ngon lành, đầy đủ hương vị và mùi thơm.',
            'Bánh mì giòn tan, pate mềm mịn, xúc xích thơm ngon và rau sống tươi ngon, tạo nên một bữa sáng nhanh chóng và ngon miệng.',
            'Thịt bò lúc lắc được xào nhanh trong nồi nóng, với hương vị thơm ngon và hấp dẫn. Bò Lúc Lắc thường ăn kèm với cơm trắng và rau sống.',
            'Cơm trắng mềm, thịt gà mềm và nước lẩu hải sản đặc trưng, Cơm Gà Hải Nam là sự phối hợp hài hòa giữa hương vị và hình thức.',
            'Bánh Canh Cua hấp dẫn với nước dùng thơm nồng từ cua, nhân thịt thơm ngon và bánh canh mềm mịn, là một hành trình ẩm thực đầy trải nghiệm.',
            'Một hương vị đặc trưng của bắp ngô rang giòn, thơm ngon vị bơ, tạo nên một loại ăn nhẹ phổ biến và ngon miệng.',
            'Một món ăn Ấn Độ với bánh dosa mỏng giòn và nhân masala độc đáo, MASALA DOSA là một cung đường hương vị tuyệt vời.',
            'Một món ăn đặc trưng của Tây Ban Nha, CƠM THẬP CẨM PAELLA là sự kết hợp độc đáo của cơm và các loại hải sản, thịt, và rau củ.',
            'Gỏi Đu Đủ tươi ngon với hương vị chua ngọt, giòn giòn, kết hợp cùng nước mắm pha chua ngọt, là một lựa chọn hoàn hảo cho bữa ăn nhẹ.',
            'Cơm trắng thơm, thịt gà mềm, và gia vị độc đáo, CƠM GÀ SINGAPORE là một món ăn độc đáo từ vùng đất sáng tạo này.',
            'Một món ăn ngon từ Canada, POUTINE là sự kết hợp hấp dẫn giữa khoai tây chiên, sốt phô mai và thịt hầm ngon.',
            'Một món ăn truyền thống của Mexico, TACO với bánh taco giòn tan, nhân thịt thơm ngon và các loại rau sống tươi ngon.',
            'Bánh Hạnh Nhân giòn ngon, hương vị độc đáo của hạnh nhân, là một lựa chọn tuyệt vời cho thời gian trà chiều.',
            'Bánh Mì Pháp với vỏ giòn, nhân thịt thơm ngon, và hương vị đặc trưng của phô mai và rau sống.',
            'Thịt gà chiên giòn, phủ lớp sốt cà chua và phô mai, CHICKEN PARM là một món ăn ngon không thể cưỡng.',
        ];

        $index = $this->faker->numberBetween(0, 19);

        return [
            'users_id' => $this->faker->randomElement($userIds),
            'created_at' => now(),
            'deleted_flag' => $this->faker->numberBetween(0, 1),
            'name' => $foodName[$index],
            'name_no_accent' => $foodName_no_accent[$index],
            'description' =>$foodDescription[$index],
            'views' => $this->faker->numberBetween(100, 1000),
            'total_like' => $this->faker->numberBetween(10, 100),
            'food_category_regions_id' => $this->faker->randomElement($regionIds),
            'food_categories_id' => $this->faker->randomElement($categoryIds),
            'thumbnail' => $foodImage[$index],
            'video' => $foodVideo[$index],
            'prep_time' => $this->faker->numberBetween(10, 60),
            'cooking_time' => $this->faker->numberBetween(20, 120),
            'servings' => $this->faker->numberBetween(2, 10),
        ];
    }
}
