<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Food;;

use App\Models\Ingredient;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bunboHueIngre = [
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

        $phogaIngre = [
            'Gà ta: 1 con',
            'Xương heo hoặc xương gà: 1kg',
            'Chọn gà mái tơ khoảng 1,2kg – 1,5 kg.',
            'Nếu nếu tại nhà bạn có thể thay bằng ức gà hoặc đùi gà đều được.',
            'Bánh phở: đủ ăn',
            'Gừng: 1 củ',
            'Hành tây: 1 củ',
            'Hoa hồi: 2 hoa',
            'Quế: 1 thanh',
            'Hành khô: 4-5 củ',
            'Hạt mùi: 2 – 3 thìa cà phê',
            'Nước mắm, bột canh, bột ngọt, đường',
            'Hành lá, lá chanh, rau mùi',
            'Chanh, tiêu, ớt'
        ];

        $banhCanhCuaIngre = [
            'Cua biển 3 con',
            'Nấm rơm 100 gr',
            'Chân giò 1/4 kg',
            'Xương heo 1 kg',
            'Trứng cút 15 quả',
            'Bột năng 1/2 kg',
            'Bột gạo 1/2 kg',
            'Gia vị 10 gr'
        ];

        $bunRieuIngre = [
            '1kg bún tươi (hoặc nhiều hơn)',
            '500g cua đồng',
            '100g thịt xay',
            '50g tôm khô',
            '2 quả trứng gà',
            '3 miếng đậu hủ tươi (hoặc có thể mua đậu hũ chiên sẵn)',
            'Cà chua, hành lá, ớt, ngò, tỏi',
            'Các lại rau ăn kèm như: bắp chuối, rau muống bào, xà lách, giá',
            'Giấm, mắm tôm, đường, muối, bột ngọt, hạt nêm, nước mắm, dầu ăn'
        ];

        $goiCuonIngre = [
            'Thịt nạc heo 500 gr',
            'Chả lụa 100 gr',
            'Cà rốt 1 củ',
            'Trứng gà 3 quả',
            'Bánh tráng 100 gr',
            'Dưa leo 2 trái',
            'Hành tím 2 củ',
            'Tỏi 3 tép',
            'Ớt 2 trái',
            'Rau sống 400 gr'
        ];

        $comNieuIngre = [
            'Gạo tẻ 250 gr',
            'Bắp vàng 1 trái',
            'Cải thìa 50 gr (1 cây)',
            'Nấm hương khô 30 gr',
            'Lạp xưởng 100 gr',
            'Trứng gà 1 quả',
            'Hành lá 2 nhánh',
            'Tỏi 2 tép',
            'Hành tím 3 củ',
            'Mè trắng 1 muỗng cà phê',
            'Nước tương 2 muỗng canh',
            'Dầu mè 1 muỗng canh',
            'Dầu hào 1 muỗng canh',
            'Dầu ăn 1 muỗng canh',
            'Đường 1 muỗng canh'
        ];

        $banhMiChaoIngre = [
            '2 muỗng canh dầu ăn',
            '1 muỗng canh tỏi băm',
            '2 trái cà chua cắt hạt lựu',
            '3 muỗng canh sốt cà chua',
            '1 muỗng cà phê muối',
            '1 muỗng cà phê đường',
            '1 muỗng cà phê tiêu',
            'Bánh mì, pa tê, xúc xích, trứng gà (số lượng tùy thích)'
        ];

        $boLucLacIngre = [
            '500gram thịt bò tươi. Bạn nên chọn loại thịt thăn, ít gân, ít mỡ.',
            '3 quả ớt chuông xanh hoặc ớt chuông đỏ',
            '2 củ khoai tây',
            '1 củ hành tây ',
            '2 hoặc 3 nhánh hành lá ',
            '2 tép tỏi ',
            '2 muỗng cà phê nước tương',
            '1 ít tương ớt ăn kèm với bò ',
            '100ml dầu ăn ',
            'Các loại gia vị cơ bản như đường, muối, hạt nêm, bột ngọt, tiêu xay nhuyễn,… '
        ];

        $goiDuDuIngre = [
            'Đu đủ xanh: 1 quả',
            'Tôm khô: 10g',
            'Lạc rang: 20g',
            'Ớt: 1 quả',
            'Cà chua: 50g',
            'Đậu đũa: 50g',
            'Tỏi: 1 củ',
            'Canh: 2 quả',
            'Các loại gia vị: 50g đường, 3 thìa nước mắm, 4 thìa nước cốt chanh'
        ];

        $poutineIngre = [
            '2 củ khoai tây vừa',
            '2 nêm pho mát bán nguyên hạt',
            '250 ml nước',
            '1 thìa bột mì',
            '1 muỗng canh cô đặc thịt. Sốt Bovril.',
            '1 viên cô đặc thịt',
            '200 ml dầu chiên',
            'một chút muối',
            'Một nhúm tiêu đen xay'
        ];

        $tacoIngre = [
            'Bột mì 150 gr',
            'Bột bắp 10 gr',
            'Bột nở 1/2 muỗng cà phê',
            'Bột nghệ 1/2 muỗng cà phê',
            'Phô mai 2 lát(có thể thay bằng bơ)',
            'Thịt bò 150 gr(xay nhuyễn)',
            'Nước tương 1 muỗng cà phê',
            'Tương ớt 1 ít',
            'Sốt mayonaise 1 ít',
            'Dưa leo 1 trái',
            'Cà chua 1 trái',
            'Ngò rí 1 ít',
            'Hành tây 1 củ',
            'Tép tỏi 1 ít',
            'Gia vị thông dụng 1 ít(đường/muối/tiêu/hạt nêm)',
            'Xà lách 1 ít',
            'Dầu ăn 3 muỗng cà phê'
        ];
        $bunBoHueId = Food::where('name', 'Bún Bò Huế')->pluck('id')->first();
        foreach ($bunboHueIngre as $ingredient) {
            Ingredient::create([
                'foods_id' => $bunBoHueId,
                'description' => $ingredient,
            ]);
        }

        $phoGaId = Food::where('name', 'Phở Gà')->pluck('id')->first();
        foreach ($phogaIngre as $ingredient) {
            Ingredient::create([
                'foods_id' => $phoGaId,
                'description' => $ingredient,
            ]);
        }

        $banhCanhCuaId = Food::where('name', 'Bánh Canh Cua')->pluck('id')->first();
        foreach ($banhCanhCuaIngre as $ingredient) {
            Ingredient::create([
                'foods_id' => $banhCanhCuaId,
                'description' => $ingredient,
            ]);
        }
        $bunRieuId = Food::where('name', 'Bún Riêu')->pluck('id')->first();
        foreach ($bunRieuIngre as $ingredient) {
            Ingredient::create([
                'foods_id' => $bunRieuId,
                'description' => $ingredient,
            ]);
        }

        $goiCuonId = Food::where('name', 'Gỏi Cuốn')->pluck('id')->first();
        foreach ($goiCuonIngre as $ingredient) {
            Ingredient::create([
                'foods_id' => $goiCuonId,
                'description' => $ingredient,
            ]);
        }

        $comNieuId = Food::where('name', 'Cơm Niêu')->pluck('id')->first();
        foreach ($comNieuIngre as $ingredient) {
            Ingredient::create([
                'foods_id' => $comNieuId,
                'description' => $ingredient,
            ]);
        }

        $banhMiChaoId = Food::where('name', 'Bánh Mì Pate Chảo')->pluck('id')->first();
        foreach ($banhMiChaoIngre as $ingredient) {
            Ingredient::create([
                'foods_id' => $banhCanhCuaId,
                'description' => $ingredient,
            ]);
        }

        $boLucLacId = Food::where('name', 'Bò Lúc Lắc')->pluck('id')->first();
        foreach ($boLucLacIngre as $ingredient) {
            Ingredient::create([
                'foods_id' => $boLucLacId,
                'description' => $ingredient,
            ]);
        }

        $goiDuDuId = Food::where('name', 'GỎI ĐU ĐỦ')->pluck('id')->first();
        foreach ($goiDuDuIngre as $ingredient) {
            Ingredient::create([
                'foods_id' => $goiDuDuId,
                'description' => $ingredient,
            ]);
        }

        $poutineId = Food::where('name', 'POUTINE')->pluck('id')->first();
        foreach ($poutineIngre as $ingredient) {
            Ingredient::create([
                'foods_id' => $poutineId,
                'description' => $ingredient,
            ]);
        }

        $tacoId = Food::where('name', 'TACO')->pluck('id')->first();
        foreach ($tacoIngre as $ingredient) {
            Ingredient::create([
                'foods_id' => $tacoId,
                'description' => $ingredient,
            ]);
        }
    }
}
