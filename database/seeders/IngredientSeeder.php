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
            ['Bắp bò', '500 g', 'Bap bo'],
            ['Gân bò', '300 g', 'Gan bo'],
            ['Móng bò', '0.5 kg', 'Mong bo'],
            ['Xương ống (lợn hoặc bò)', '500 g', 'Xuong ong (lon hoac bo)'],
            ['Muỗng cà phê mắm ruốc Huế', '2', 'Muong ca phe mam ruoc Hue'],
            ['Sả', '10 g', 'Sa'],
            ['Gừng', '10 g', 'Gung'],
            ['Hành tím khô', '10 g', 'Hanh tim kho'],
            ['Tỏi', '10 g', 'Toi'],
            ['Ớt bột', '10 g', 'Ot bot'],
            ['Muỗng cà phê hạt nêm', '1', 'Muong ca phe hat nem'],
            ['đường', '1', 'duong'],
            ['dầu điều', '1', 'dau dieu'],
            ['Bún', '400 g', 'Bun'],
            ['Rau ngổ', '10 g', 'rau ngo'],
            ['rau mùi', '10 g', 'rau mui'],
            ['rau giá', '10 g', 'rau gia'],
            ['hành tươi', '10 g', 'hanh tuoi'],
            ['hoa chuối thái', '10 g', 'hoa chuoi thai'],
            ['Giò lụa', '100 g', 'Gio lua'],
            ['chả thịt', '100 g', 'cha thit'],
            ['chả cua', '100 g', 'cha cua'],
            ['tiết lợn', '100 g', 'tiet lon'],
            ['Hạt điều màu đỏ', '45 g', 'Hat dieu mau do'],
            ['dầu ăn', '45 g', 'dau an'],
            ['hành củ', '45 g', 'hanh cu'],
            ['tỏi', '45 g', 'toi'],
            ['Rau húng quế', '10 g', 'Rau hung que'],
            ['húng bạc hà', '10 g', 'hung bac ha'],
            ['giá đỗ', '10 g', 'gia do'],
            ['ớt', '10 g', 'ot'],
            ['chanh', '10 g', 'chanh'],
            ['Bún tươi', '600 g', 'Bun tuoi'],
        ];

        $phogaIngre = [
            ['Gà ta', '1 con', 'Ga ta'],
            ['Xương heo hoặc xương gà', '1kg', 'Xuong heo hoac xuong ga'],
            ['Gà mái tơ', '1,2kg - 1,5 kg', 'Ga mai to'],
            ['Bánh phở', 'đủ ăn', 'Banh pho'],
            ['Gừng', '1 củ', 'Gung'],
            ['Hành tây', '1 củ', 'Hanh tay'],
            ['Hoa hồi', '2 hoa', 'Hoa hoi'],
            ['Quế', '1 thanh', 'Que'],
            ['Hành khô', '4 - 5 củ', 'Hanh kho'],
            ['Hạt mùi', '2 - 3 thìa', 'Hat mui'],
            ['Nước mắm', '1 ít', 'Nuoc mam'],
            ['Bột canh', '1 ít', 'Bot canh'],
            ['Bột ngọt', '1 ít', 'Bot ngot'],
            ['Đường', '1 ít', 'Duong'],
            ['Hành lá', '1 ít', 'Hanh la'],
            ['Lá chanh', '1 ít', 'La chanh'],
            ['Rau mùi', '1 ít', 'Rau mui'],
            ['Chanh', '1 ít', 'Chanh'],
            ['Tiêu', '1 ít', 'Tieu'],
            ['ớt', '1 ít', 'ot']
        ];

        $banhCanhCuaIngre = [
            ['Cua biển', '3 con', 'Cua bien'],
            ['Nấm rơm', '100 gram', 'Nam rom'],
            ['Chân giò', '1/4 kg', 'Chan gio'],
            ['Xương heo', '1 kg', 'Xuong heo'],
            ['Trứng cút', '15 quả', 'Trung cut'],
            ['Bột năng', '1/2 kg', 'Bot nang'],
            ['Bột gạo', '1/2 kg', 'Bot gao'],
            ['Gia vị', '10 gram', 'Gia vi']
        ];

        $bunRieuIngre = [
            ['Bún tươi', '1kg (hoặc nhiều hơn)', 'Bun tuoi'],
            ['Cua đồng', '500g', 'Cua dong'],
            ['Thịt xay', '100g', 'Thit xay'],
            ['Tôm khô', '50g', 'Tom kho'],
            ['Trứng gà', '2 quả', 'Trung ga'],
            ['Đậu hủ tươi', '3 miếng (hoặc có thể mua đậu hũ chiên sẵn)', 'Dau hu tuoi'],
            ['Cà chua', '1 ít', 'Ca chua'],
            ['Hành lá', '1 ít', 'Hanh la'],
            ['Ớt', '1 ít', 'Ot'],
            ['Ngò', '1 ít', 'Ngo'],
            ['Tỏi', '1 ít', 'Toi'],
            ['Bắp chuối', '1 ít', 'Bap chuoi'],
            ['Rau muống bào', '1 ít', 'Rau muong bao'],
            ['Xà lách', '1 ít', 'Xa lach'],
            ['Giá', '1 ít', 'Gia'],
            ['Giấm', '1 ít', 'Giam'],
            ['Mắm tôm', '1 ít', 'Mam tom'],
            ['Đường', '1 ít', 'Duong'],
            ['Muối', '1 ít', 'Muoi'],
            ['Bột ngọt', '1 ít', 'Bot ngot'],
            ['Hạt nêm', '1 ít', 'Hat nem'],
            ['Nước mắm', '1 ít', 'Nuoc mam'],
            ['Dầu ăn', '1 ít', 'Dau an']
        ];

        $goiCuonIngre = [
            ['Thịt nạc heo', '500 gram', 'Thit nac heo'],
            ['Chả lụa', '100 gram', 'Cha lua'],
            ['Cà rốt', '1 củ', 'Ca rot'],
            ['Trứng gà', '3 quả', 'Trung ga'],
            ['Bánh tráng', '100 gram', 'Banh trang'],
            ['Dưa leo', '2 trái', 'Dua leo'],
            ['Hành tím', '2 củ', 'Hanh tim'],
            ['Tỏi', '3 tép', 'Toi'],
            ['Ớt', '2 trái', 'Ot'],
            ['Rau sống', '400 gram', 'Rau song'],
        ];

        $comNieuIngre = [
            ['Gạo tẻ', '250 gram', 'Gao te'],
            ['Bắp vàng', '1 trái', 'Bap vang'],
            ['Cải thìa', '50 gram (1 cây)', 'Cai thia'],
            ['Nấm hương khô', '30 gram', 'Nam huong kho'],
            ['Lạp xưởng', '100 gram', 'Lap xuong'],
            ['Trứng gà', '1 quả', 'Trung ga'],
            ['Hành lá', '2 nhánh', 'Hanh la'],
            ['Tỏi', '2 tép', 'Toi'],
            ['Hành tím', '3 củ', 'Hanh tim'],
            ['Mè trắng', '1 muỗng cà phê', 'Me trang'],
            ['Nước tương', '2 muỗng canh', 'Nuoc tuong'],
            ['Dầu mè', '1 muỗng canh', 'Dau me'],
            ['Dầu hào', '1 muỗng canh', 'Dau hao'],
            ['Dầu ăn', '1 muỗng canh', 'Dau an'],
            ['Đường', '1 muỗng canh', 'Duong'],
        ];

        $banhMiChaoIngre = [
            ['Dầu ăn', '2 muỗng canh', 'Dau an'],
            ['Tỏi băm', '1 muỗng canh', 'Toi bam'],
            ['Cà chua cắt hạt lựu', '2 trái', 'Ca chua cat hat luu'],
            ['Sốt cà chua', '3 muỗng canh', 'Sot ca chua'],
            ['Muối', '1 muỗng cà phê', 'Muoi'],
            ['Đường', '1 muỗng cà phê', 'Duong'],
            ['Tiêu', '1 muỗng cà phê', 'Tieu'],
            ['Bánh mì', 'số lượng tùy thích', 'Banh mi'],
            ['Pa tê', 'số lượng tùy thích', 'Pa te'],
            ['Xúc xích', 'số lượng tùy thích', 'Xuc xich'],
            ['Trứng gà', 'số lượng tùy thích', 'Trung ga']
        ];

        $boLucLacIngre = [
            ['Thịt bò tươi', '500 gram', 'Thit bo tuoi'],
            ['Ớt chuông xanh', '3 quả', 'Ot chuông xanh'],
            ['Khoai tây', '2 củ', 'Khoai tây'],
            ['Hành tây', '1 củ', 'Hanh tây'],
            ['Hành lá', '2 hoặc 3 nhánh', 'Hanh la'],
            ['Tỏi', '2 tép', 'Toi'],
            ['Nước tương', '2 muỗng cà phê', 'Nuoc tuong'],
            ['Tương ớt', '1 ít', 'Tuong ot'],
            ['Dầu ăn', '100 ml', 'Dau an'],
            ['Đường', '1 ít', 'Duong'],
            ['Muối', '1 ít', 'Muoi'],
            ['Hạt nêm', '1 ít', 'Hat nem'],
            ['Bột ngọt', '1 ít', 'Bot ngot'],
            ['Tiêu xay nhuyễn', '1 ít', 'Tieu xay nhuyen'],
        ];

        $goiDuDuIngre = [
            ['Đu đủ xanh', '1 quả', 'Du du xanh'],
            ['Tôm khô', '10 gam', 'Tom kho'],
            ['Lạc rang', '20 gam', 'Lac rang'],
            ['Ớt', '1 quả', 'Ot'],
            ['Cà chua', '50 gam', 'Ca chua'],
            ['Đậu đũa', '50g', 'Dau dua'],
            ['Tỏi', '1 củ', 'Toi'],
            ['Canh', '2 quả', 'Canh'],
            ['Đường', '50 gam', 'Duong'],
            ['Nước mắm', '3 thìa', 'Nuoc mam'],
            ['Nước cốt chanh', '4 thìa', 'Nuoc cot chanh'],
        ];

        $poutineIngre = [
            ['Khoai tây', '2 củ', 'Khoai tay'],
            ['Pho mát bán nguyên hạt', '2 nêm', 'Pho mat ban nguyen hat'],
            ['Nước', '250 ml', 'Nuoc'],
            ['Bột mì', '1 thìa', 'Bot mi'],
            ['Sốt Bovril', '1 muỗng canh', 'Sot Bovril'],
            ['Cô đặc thịt', '1 viên', 'Co dac thit'],
            ['Dầu chiên', '200 ml', 'Dau chien'],
            ['Muối', 'một chút', 'Muoi'],
            ['Tiêu đen xay', 'Một nhúm', 'Tieu den xay']
        ];

        $tacoIngre = [
            ['Bột mì', '150 gr', 'Bot mi'],
            ['Bột bắp', '10 gr', 'Bot bap'],
            ['Bột nở', '1/2 muỗng cà phê', 'Bot no'],
            ['Bột nghệ', '1/2 muỗng cà phê', 'Bot nghe'],
            ['Phô mai', '2 lát (có thể thay bằng bơ)', 'Pho mai'],
            ['Thịt bò', '150 gr (xay nhuyễn)', 'Thit bo'],
            ['Nước tương', '1 muỗng cà phê', 'Nuoc tuong'],
            ['Tương ớt', '1 ít', 'Tuong ot'],
            ['Sốt mayonnaise', '1 ít', 'Sot mayonnaise'],
            ['Dưa leo', '1 trái', 'Dua leo'],
            ['Cà chua', '1 trái', 'Ca chua'],
            ['Ngò rí', '1 ít', 'Ngo ri'],
            ['Hành tây', '1 củ', 'Hanh tay'],
            ['Tép tỏi', '1 ít', 'Tep toi'],
            ['Đường', '1 ít', 'Duong'],
            ['Muối', '1 ít', 'Muoi'],
            ['Tiêu', '1 ít', 'Tieu'],
            ['Hạt nêm', '1 ít', 'Hat nem'],
            ['Xà lách', '1 ít', 'Xa lach'],
            ['Dầu ăn', '3 muỗng cà phê', 'Dau an']
        ];

        $bunBoHueId = Food::where('name', 'Bún Bò Huế')->pluck('id')->first();
        foreach ($bunboHueIngre as $ingredient) {
            Ingredient::create([
                'foods_id' => $bunBoHueId,
                'name' => $ingredient[0],
                'name_no_accent' => $ingredient[2],
                'quantity' => $ingredient[1],
            ]);
        }

        $phoGaId = Food::where('name', 'Phở Gà')->pluck('id')->first();
        foreach ($phogaIngre as $ingredient) {
            Ingredient::create([
                'foods_id' => $phoGaId,
                'name' => $ingredient[0],
                'name_no_accent' => $ingredient[2],
                'quantity' => $ingredient[1],
            ]);
        }

        $banhCanhCuaId = Food::where('name', 'Bánh Canh Cua')->pluck('id')->first();
        foreach ($banhCanhCuaIngre as $ingredient) {
            Ingredient::create([
                'foods_id' => $banhCanhCuaId,
                'name' => $ingredient[0],
                'name_no_accent' => $ingredient[2],
                'quantity' => $ingredient[1],
            ]);
        }
        $bunRieuId = Food::where('name', 'Bún Riêu')->pluck('id')->first();
        foreach ($bunRieuIngre as $ingredient) {
            Ingredient::create([
                'foods_id' => $bunRieuId,
                'name' => $ingredient[0],
                'name_no_accent' => $ingredient[2],
                'quantity' => $ingredient[1],
            ]);
        }

        $goiCuonId = Food::where('name', 'Gỏi Cuốn')->pluck('id')->first();
        foreach ($goiCuonIngre as $ingredient) {
            Ingredient::create([
                'foods_id' => $goiCuonId,
                'name' => $ingredient[0],
                'name_no_accent' => $ingredient[2],
                'quantity' => $ingredient[1],
            ]);
        }

        $comNieuId = Food::where('name', 'Cơm Niêu')->pluck('id')->first();
        foreach ($comNieuIngre as $ingredient) {
            Ingredient::create([
                'foods_id' => $comNieuId,
                'name' => $ingredient[0],
                'name_no_accent' => $ingredient[2],
                'quantity' => $ingredient[1],
            ]);
        }

        $banhMiChaoId = Food::where('name', 'Bánh Mì Pate Chảo')->pluck('id')->first();
        foreach ($banhMiChaoIngre as $ingredient) {
            Ingredient::create([
                'foods_id' => $banhMiChaoId,
                'name' => $ingredient[0],
                'name_no_accent' => $ingredient[2],
                'quantity' => $ingredient[1],
            ]);
        }

        $boLucLacId = Food::where('name', 'Bò Lúc Lắc')->pluck('id')->first();
        foreach ($boLucLacIngre as $ingredient) {
            Ingredient::create([
                'foods_id' => $boLucLacId,
                'name' => $ingredient[0],
                'name_no_accent' => $ingredient[2],
                'quantity' => $ingredient[1],
            ]);
        }

        $goiDuDuId = Food::where('name', 'GỎI ĐU ĐỦ')->pluck('id')->first();
        foreach ($goiDuDuIngre as $ingredient) {
            Ingredient::create([
                'foods_id' => $goiDuDuId,
                'name' => $ingredient[0],
                'name_no_accent' => $ingredient[2],
                'quantity' => $ingredient[1],
            ]);
        }

        $poutineId = Food::where('name', 'POUTINE')->pluck('id')->first();
        foreach ($poutineIngre as $ingredient) {
            Ingredient::create([
                'foods_id' => $poutineId,
                'name' => $ingredient[0],
                'name_no_accent' => $ingredient[2],
                'quantity' => $ingredient[1],
            ]);
        }

        $tacoId = Food::where('name', 'TACO')->pluck('id')->first();
        foreach ($tacoIngre as $ingredient) {
            Ingredient::create([
                'foods_id' => $tacoId,
                'name' => $ingredient[0],
                'name_no_accent' => $ingredient[2],
                'quantity' => $ingredient[1],
            ]);
        }
    }
}
