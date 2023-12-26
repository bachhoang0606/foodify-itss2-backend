<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Food;
use App\Models\Step;

class StepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bunBoHueStep = [
            'Đầu tiên là nấu nước dùng, bạn cho hành tây, gừng đập dập, thơm cắt khoanh, ớt xanh, sả cây vào nồi nước nấu. Khi nước sôi thì cho bắp bò, bắp giò heo, xương ống đã nướng vào nấu chung.',
            'Làm ớt sa tế bằng cách bắc chảo lên bếp, đợi chảo nóng rồi thêm hành lá, hành tỏi băm, ngò rí, sả xay vào phi thơm, thêm ớt xay, dầu đều vào trộn đều. Múc 1/2 ra chén, 1/2 còn lại xào sơ với bắp bò cho thơm.',
            'Cắt sợi bắp chuối, rau muống cho vào âu nước đá lạnh có vắt sẵn chanh để bắp chuối, rau muống không bị đen.',
            'Cho 3 muỗng mẳm ruốc vào chén, múc một vá nước dùng vào khuấy đều cho mắm ruốc loãng ra rồi đổ ngược lại vào nồi nước dùng. Nêm thêm 2 muỗng canh nước mắm, 1 muỗng canh đường, 1 muỗng canh muối cho vừa miệng.',
            'Cắt lát mỏng bắp bò, bắp giò heo. Cắt miếng chả lá Huế hoặc để nguyên cây nếu thích. Trụng sơ bún qua nước sôi cho bớt chưa, cho lượng bún vừa đủ dùng vào tô, xếp bắp bò, bắp giò heo, chả lá vào tô. Chan nước dùng vào, ăn kèm rau muống, rau thơm, giá sống.'
        ];

        $phoGaStep = [
            'Gà bạn tự làm tại nhà hoặc mua sẵn bên ngoài. Rửa sạch. Hành lá cắt riêng phần hành trắng, chẻ nhỏ. Phần xanh thái nhỏ. Đem 1 phần rau mùi thái nhỏ, 1 phần để nguyên cây. Lá chanh thái sợ nhỏ.',
            'Cho gà vào nồi nước lạnh luộc chín, trong quá trình luộc bạn cho chút bột canh vào nồi để thịt gà sau khi luộc ngọt, đậm đà hơn. Gà chín thì bạn vớt ra, đợi nguội. Tiếp tục cho xương vào hầm với nước dùng gà.',
            'phần gừng, hành khô đem rửa sạch và nướng qua lửa cho thơm. Củ hành tây bổ dọc thành 6 phần. Rang hạt mùi cho thơm. Tất cả các gia vị trên, cả quế và hoa hồi cho vào một miếng vải sạch bọc lại để cho vào nồi nước dùng. Nồi nước dùng tiếp tục đun, khi sôi thì để lửa nhỏ liu riu. Thịt gà đợi nguội bạn đem xé nhỏ để riêng, phần xương + đầu + cổ và chân cho vào nước dùng ninh tiếp.',
            'Nước dùng ninh khoảng 1 tiếng để xương tiết ra nước dùng ngọt thanh, lúc này bạn có thể nêm nếm lại gia vị mắm muối, bột ngọt sao cho vừa miệng.Phần bánh phở bạn trần lại qua nước sôi bằng vá, vẩy cho ráo nước rồi cho vào tô. Xếp thêm thịt gà xé, rắc hành mùi và chan nước dùng vào. Rắc thêm lá chanh lên cho thơm.'
        ];

        $banhCanhCuaStep = [
            'Cho bột gạo, bột năng, một ít muối và 500ml nước nóng già vào thau để nhào bột. Cho nước nóng già vào hỗn hợp bột và nhào mịn đến khi thấy bột không dính tay nữa thì mang ra cán thật mỏng và cắt sợi. Đun sôi một nồi nước, thả bánh canh vừa cắt vào luộc đến khi sợi bánh canh nổi lên thì vớt ra ngâm vào nước lạnh.',
            'Cua biển mua về rửa sạch, hấp chín, gỡ lấy phần thịt và gạch để riêng. Cho hành băm nhuyễn vào chảo phi thơm với dầu ăn, rồi xào thịt cua cùng ít mắm, tiêu cho thơm. Gạch cua bạn cũng phi hành khô, xào qua, để riêng.',
            'Nấm rơm rửa sạch, ngâm nước muối loãng, bổ dọc, cho vào chảo xào qua. Thịt chân giò luộc chín, thái khoanh. Trứng cút luộc chín rồi bóc vỏ.',
            'Xương lợn chần qua nước sôi, rửa sạch rồi cho vào nồi nước lạnh ninh lấy nước dùng. Phi hành thơm vào nồi và đổ nước hầm xương vào. Sau khi nêm nếm vừa ăn thì đợi đến lúc nước sôi nhẹ và cho nấm rơm vào cùng. Hòa một ít bột năng đổ từ từ vào nồi nước dùng, vừa đổ vừa khuấy đều để tạo độ sánh. Xếp bánh canh ra bát, cho thịt chân giò, thịt cua, gạch cua, trứng cút lên trên. Chan nước dùng rồi rắc hành, mùi, hạt tiêu lên trên và thưởng thức.',
            'Bánh canh cua thơm ngon, hấp dẫn, nước dùng thanh ngọt kết hợp với thịt cua dai chắc và sợi bánh canh mềm không bị cứng chắc chắn sẽ khiến bạn hài lòng.'
        ];

        $bunRieuStep = [
            'Hành lá, cà chua rửa sạch: cà chua thì cắt múi cau, hành lá thái nhỏ. Đậu hủ cắt nhỏ rồi chiên vàng.',
            'Cua đồng rửa sạch, bóc mai cua rồi lấy phần gạch riêng. Vỏ cua đem xay nhuyễn, nếu không có máy xay thì bạn có thể giã hoặc nhờ người bán ở tiệm làm sẵn giúp bạn nhé. Cho cua xay vào một tô lớn rồi cho nước vào để thịt cua tan ra, sau đó dùng ray lọc phần thịt vào nồi, bỏ cặn. Thêm chút muối, hạt nêm và bột ngọt vào khuấy đều sau đó đặt lên bếp đun với lửa vừa, nên khuấy nhẹ tay để phần riêu cua kết lại và nổi lên mặt nước rồi vớt ra tô.',
            'Ở nồi nước đã nấu riêu bên trên, bạn nêm nếm gia vị : 2 muỗng cà phê muối, 2 muỗng cà phê đường, 1/2 muỗng cà phê bột ngọt, 1/2 muỗng cà phê nước mắm và 1/2 muỗng cà phê hạt nêm. Nên cho thêm một chút mắm tôm để nước dùng thêm đậm đà và tròn vị. Bắc 1 cái chảo lên bếp, cho dầu vào phi tỏi cho thơm rồi cho phần gạch cua vào đảo đều, thêm ít dầu màu điều để màu sắc bắt mắt hơn, múc một chút cho vào nồi nước dùng và giữ lại một ít để tạo màu cho chả trứng. Cho cà chua vào chảo xào cùng chút gia vị cho tới khi cà chua chín thì tắt bếp rồi cho vào nồi nước dùng, nêm nếm lại gia vị lần cuối cho vừa ăn.',
            'Tôm khô đem ngâm nước ấm cho mềm sau đó xay nguyễn rồi trộn cùng thịt, trứng gà, hành tỏi băm nhỏ và ít hạt nêm. Sau đó bạn đem hỗn hợp này đem hấp cách thủy (hoặc cho vào lò vi sóng). Sau khi chả chín thì cắt nhỏ',
            'Trần bún rồi cho vào tô, múc phần chả trứng, đậu hủ chiên lên trên cùng chút hành tươi thái nhỏ sau đó chan nước dùng vào và thường thức. Ăn kèm thêm rau muống bào và bắp chuối, xà lách cho đúng điệu nhé.'
        ];


        $goiCuonStep = [
            'Thịt heo mua về bạn đem ngâm với nước muối pha loãng khoảng 5 - 10 phút rồi bóp mạnh tay, sau đó rửa lại dưới vòi nước sạch nhiều lần. Nếu không có thời gian để ngâm, bạn có thể dùng muối hoặc rượu thoa lên mặt thịt rồi chà xát, mát xa miếng thịt. Sau đó cũng rửa lại với nước sạch. Bạn để miếng thịt ra rổ cho thật ráo nước, có thể dùng giấy ăn hoặc khăn khô để lau đi lượng nước còn vươn lại trên thịt. Đun sôi một nồi nước cùng với một ít gừng đập dập, củ hành tím hoặc đầu hành lá. Nước sôi thì bạn cho miếng thịt vào luộc khoảng 25 - 30 phút cho thịt chín.',
            'Cà rốt mua về bạn gọt sạch vỏ rồi rửa với nước sạch rồi để ra rổ cho ráo nước. Sau đó đem cắt thành từng sợi. Dưa leo đem gọt sơ phần vỏ già hoặc bẩn, cắt hai đầu rồi rửa thật kỹ với nước sạch. Như cà rốt, bạn cũng cắt dưa leo thành từng sợi. Còn chả lụa, bạn cắt thành từng lát sau đó cắt lại thành từng sợi vừa ăn.',
            'Cho vào chén 3 muỗng canh đường, 3 muỗng canh nước mắm ngon, 5 muỗng canh nước lọc và 2 muỗng canh nước cốt chanh. Dùng muỗng khuấy đều để hỗn hợp tan ra. Bạn có thể thay đồi tỷ lệ của các nguyên liệu trên cho phù hợp với khẩu vị của gia đình nhé. Ngoài ra có thể thêm ớt nếu bạn ăn cay!',
            'Đập 3 quả trứng gà vào tô, cho vào 1/2 muỗng cà phê hạt nêm rồi dùng phới đánh trứng đánh cho tan ra. Nếu không có phới đánh trứng, bạn có thể dùng đũa hoặc nĩa đều được. Bắc chảo lên bếp và cho vào 1 muỗng canh dầu ăn rồi đun nóng. Dầu ăn nóng thì bạn đổ hỗn trứng vào và chiên với lửa nhỏ hoặc vừa cho đến khi trứng chín đều thì tắt bếp.',
            'Sau cùng bạn sắp xếp hết tất cả các nguyên liệu đã chuẩn bị ra một cái mâm hay cái mẹt, cho chén nước chấm vào giữa thêm vào một ít ớt xay cùng với một ít bún tươi là có thể thưởng thức rồi'
        ];


        $comNieuStep = [
            'Cho gạo vào nồi đất ngâm với nước khoảng 5 phút, đem vo sạch với nước 2 - 3 lần.Quét 1 lớp dầu mè (1/2 muỗng canh) dưới đáy và vành nồi đất rồi cho gạo và 300ml nước lọc vào. Cho nồi lên bếp nấu với lửa vừa trong 10 - 15 phút rồi hạ bếp xuống còn lửa nhỏ, nấu thêm khoảng 10 phút cho gạo nở hoàn toàn.',
            'Hành tím, tỏi lột vỏ, rửa sạch, cắt lát mỏng. Cải thìa rửa sạch, để ráo. Bắp mỹ lột vỏ, cắt lấy phần hạt. Lạp xưởng cắt lát mỏng. Nấm hương ngâm nước khoảng 10 phút để nấm mềm rồi rửa sạch lại với nước, cắt nhỏ vừa ăn.',
            'Bắc chảo lên bếp với 1 muỗng canh dầu ăn đun với lửa vừa. Dầu nóng thì cho phần tỏi và hành tím cắt lát vào phi thơm. Cho vào chảo 2 muỗng canh nước tương, 1 muỗng canh đường, 1 muỗng canh dầu hào, 6 muỗng canh nước lọc, đảo đều, đun sôi hỗn hợp trong khoảng 5 phút, nêm nếm lại cho vừa ăn rồi tắt bếp.',
            'Cơm sau khi nấu được 8 phút thì xếp lần lượt phần bắp vàng, nấm hương, lạp xưởng, cải thìa và đập 1 quả trứng vào. Sau đó rưới quanh vành nồi 1/2 muỗng canh dầu mè, đậy nắp lại và nấu thêm 3 phút trên lửa nhỏ đến khi các nguyên liệu chín vừa tới, mềm thơm.',
            'Cơm sau khi nấu chín bạn chỉ cần chan thêm phần nước sốt lên mặt, cho vào 1 ít hành lá cắt nhỏ và 1 muỗng cà phê mè trắng lên nữa là thưởng thức được rồi.'
        ];

        $banhMiChaoStep = [
            'Cho 1 muỗng canh dầu ăn vào nồi để phi tỏi cho thơm. Khi tỏi đã vàng thì cho cà chua cắt nhỏ và 3 muỗng canh sốt cà chua vào trộn đều, thêm chút nước và nêm với 1 muỗng cà phê muối, 1 muỗng cà phê đường và 1 muỗng cà phê tiêu rồi nấu cho đến khi cà chua nhừ là được.',
            'Làm nóng chảo rồi cho 1 muỗng canh dầu ăn vào, dầu ăn nóng thì cho xúc xích đã cắt đôi và 1 viên pa tê vào chiên cho xúc xích vàng. Khi xúc xích đã vàng thì đập trứng gà và hành tây cắt sợi vào. Cuối cùng múc nước sốt đã làm chan vào rồi cho 1 viên bơ lạt lên, nếu không thích có thể không cho cũng được.'
        ];

        $boLucLacStep = [
            'Thịt bò sau khi mua về bạn có thể rửa sạch với muối, một chút rượu hoặc gừng để khử mùi bò sau đó để cho ráo nước. Sau khi thịt ráo, bạn tiến hành cắt thịt bò thành từng miếng vuông vừa ăn, khoảng 1 lóng tay. Tiếp tục ướp thịt cùng với 1 muỗng cà phê hạt nêm, 1 muỗng cà phê đường, 2 muỗng cà phê nước tương sau đó để thịt nghỉ trong thấm gia vị trong vòng 15 đến 20 phút.',
            'Trong khi ướp thịt, bạn bắt đầu sơ chế các loại nguyên liệu phụ khác. Tỏi bóc vỏ và băm nhuyễn. Hành lá rửa sạch sau đó cắt khoảng 2 lóng tay cho vừa ăn.  Hành tây, ớt chuông rửa sạch với nước muối và cắt thành từng miếng vuông nhỏ khoảng 1 lóng tay. Gọt vỏ khoai tây, rửa sạch sau đó cắt thành thanh dài khoảng 3 lóng tay rồi ngâm với nước muối pha loãng trong thời gian từ 10 đến 15 phút để loại bỏ độc tố. ',
            'Làm nóng chảo trên bếp và cho vào chảo 100ml dầu ăn. Đợi dầu sôi, cho khoai tây vào chiên khoảng 10 phút cho giòn sau đó vớt ra để lên giấy để thấm bớt dầu thừa trong khoai tây. Trong quá trình chiên khoai tây, bạn nên đảo thường xuyên để khoai được chín vàng đều. ',
            'Sau khi đợi thịt thấm đều gia vị và sơ chế xong các nguyên liệu phụ. Bạn sẽ tiến hành xào thịt bò lúc lắc. Trước tiên bắc chảo lên bếp mở lửa lớn, cho vào đó 1 muỗng canh dầu ăn. Đợi dầu nóng thì cho phần tỏi băm nhuyễn vào phi thơm. Thịt bò chỉ nên xào chín tới không nên xào quá dai  Cho tiếp phần thịt bò đã ướp vào xào với lửa lớn trong thời gian từ 3 đến 4 phút để thịt săn lại.Tiếp theo cho thêm hành tây, ớt chuông vào xào chung trong khoảng 3 phút. Cuối cùng nêm nếm lại món ăn một lần nữa cho vừa ăn rồi tắt bếp bày ra đĩa ăn kèm với khoai tây chiên. '
        ];

        $goiDuDuStep = [
            'Gọt đu đủ xanh, rửa sạch nhựa và tiến hành bào thành sợi dài. Ngâm ngay sợi đu đủ vào chậu nước đá lạnh để đu đủ giòn sần sật. Bóc vỏ tỏi, ớt rửa sạch rồi cho vào cối giã nhuyễn cùng tôm khô và lạc rang. Rửa sạch đậu đũa và cắt thành từng khúc ngắn khoảng 4cm.',
            'Bắc nồi lên bếp, cho nước vào đun sôi rồi cho đậu đũa vào chần sơ qua cho chín tái rồi vớt ra, cho vào tô nước sạch, ngâm 5 phút cho giòn. Ngâm xong, vớt đậu đũa ra để ráo nước.',
            'Cho đu đủ và đậu đũa vào hỗn hợp nguyên liệu đã giã. Tiếp theo, cho 50g đường, 40ml nước mắm, 20g nước cốt chanh vào hỗn hợp trên rồi trộn đều cho thật ngấm trong cối. Dùng chày giã nhẹ để các nguyên liệu dễ ngấm gia vị hơn. Cuối cùng, rửa cà chua, cắt miếng và cho vào món gỏi, đảo nhẹ. Món gỏi đu đủ Thái có thể trình bày ra đĩa rộng, trang trí thêm hoa tỉa từ rau củ để thêm phần bắt mắt.'
        ];

        $poutineStep = [
            'Nếu bạn mua khoai tây củ thì đầu tiên hãy gọt vỏ rửa sạch để ráo nước rồi cắt ra thành từng miếng vừa ăn. Cong nếu bạn mua gói khoai tây chiên sẵn trong siêu thị chỉ cần rã đông rửa qua thôi.',
            'Đổ dầu ăn vào chảo có thể cho thêm một chút bơ để tăng độ ngậy cho khoai tây. Để dầu sôi tới nhiệt độ khoảng 177oC thì bắt đầu thả khoai tây vào đảo đều cho tới khi khoai ngả sang màu vàng nâu. Bạn nên chiên khoai tây 2 lượt để khoai tây ròn bên ngoài và mềm bên trong. Ngoài ra ở bước này bạn cũng có thể sử dụng nồi chiên không dầu.',
            'Chiên khoai tây đến khi có màu vàng nâu là được ',
            'Và bước cuối cùng đó chính là rắc pho mai lên trước sau đó tưới nước sốt thịt lên trên cùng vậy là món ăn đã hoàn thành rồi đó.'
        ];

        $tacoStep = [
            'Cho vào tô 150gr bột mì, 10gr bột bắp, 1 ít muối, 1/2 muỗng cà phê bột nở, 1/2 muỗng cà phê bột nghệ trộn đều hỗn hợp. Tiếp tục cho 1 muỗng cà phê dầu ăn và 130ml nước vào trộn đều.Khi bột đã đặt lại thì dùng tay nhồi bột trong 10 – 15 phút đến khi bột mịn và không còn dính tay là được. Dùng bọc thực phẩm (hoặc nấp nồi) đậy kín bột lại và ủ bột trong 30 phút để bột được nở.',
            'Ướp thịt bò xay với 1/2 muỗng cà phê tiêu, 1/2 muỗng cà phê hạt nêm và 1 muỗng cà phê nước tương, trộn thật đều hỗn hợp thịt và để thịt thấm gia vị trong 15 – 20 phút. Hành tây, rửa sạch, bỏ vỏ và cắt hạt lựu, tỏi băm nhuyễn. Dưa leo, xà lách và cà chua cắt lát vừa ăn.',
            'Bắc chảo lên bếp, cho 1 muỗng cà phê dầu ăn vào phi thơm tỏi, tiếp tục cho hành tây và thịt bò vào xào với lửa lớn đến khi thịt bò săn lại là được.',
            'Trải lên bàn 1 tấm giấy nến, cho bột lên trên và chia bột thành 2 phần. Cán mỏng từng phần bột và cắt tạo hình tròn cho bánh.',
            'Cho vào chảo 1 muỗng cà phê dầu ăn, sau đó cho bánh vào đậy nấp lại khoảng 2 phút thì trở mặt bánh tiếp tục áp chảo thêm 2 phút là được.',
            'ho bánh ra dĩa, đầu tiên cho dưa leo, cà chua, xà lách lên trên rồi đến thịt bò, phô mai, 1 ít ngò, cuối cùng cho tương ớt và sốt mayounaise. Gấp đôi bánh lại và bánh Taco đã hoàn thành.'
        ];
        $bunBoHueId = Food::where('name', 'Bún Bò Huế')->pluck('id')->first();
        // $bunBoHueCount = count
        foreach ($bunBoHueStep as $index => $step) {
            Step::create([
                'number' => $index + 1,
                'foods_id' => $bunBoHueId,
                'content' => $step,
            ]);
        }

        $phoGaId = Food::where('name', 'Phở Gà')->pluck('id')->first();
        foreach ($phoGaStep as $index => $step) {
            Step::create([
                'number' => $index + 1,
                'foods_id' => $phoGaId,
                'content' => $step,
            ]);
        }

        $banhCanhCuaId = Food::where('name', 'Bánh Canh Cua')->pluck('id')->first();
        foreach ($banhCanhCuaStep as $index => $step) {
            Step::create([
                'number' => $index + 1,
                'foods_id' => $banhCanhCuaId,
                'content' => $step,
            ]);
        }
        $bunRieuId = Food::where('name', 'Bún Riêu')->pluck('id')->first();
        foreach ($bunRieuStep as $index => $step) {
            Step::create([
                'number' => $index + 1,
                'foods_id' => $bunRieuId,
                'content' => $step,
            ]);
        }

        $goiCuonId = Food::where('name', 'Gỏi Cuốn')->pluck('id')->first();
        foreach ($goiCuonStep as $index => $step) {
            Step::create([
                'number' => $index + 1,
                'foods_id' => $goiCuonId,
                'content' => $step,
            ]);
        }

        $comNieuId = Food::where('name', 'Cơm Niêu')->pluck('id')->first();
        foreach ($comNieuStep as $index => $step) {
            Step::create([
                'number' => $index + 1,
                'foods_id' => $comNieuId,
                'content' => $step,
            ]);
        }

        $banhMiChaoId = Food::where('name', 'Bánh Mì Pate Chảo')->pluck('id')->first();
        foreach ($banhMiChaoStep as $index => $step) {
            Step::create([
                'number' => $index + 1,
                'foods_id' => $banhCanhCuaId,
                'content' => $step,
            ]);
        }

        $boLucLacId = Food::where('name', 'Bò Lúc Lắc')->pluck('id')->first();
        foreach ($boLucLacStep as $index => $step) {
            Step::create([
                'number' => $index + 1,
                'foods_id' => $boLucLacId,
                'content' => $step,
            ]);
        }

        $goiDuDuId = Food::where('name', 'GỎI ĐU ĐỦ')->pluck('id')->first();
        foreach ($goiDuDuStep as $index => $step) {
            Step::create([
                'number' => $index + 1,
                'foods_id' => $goiDuDuId,
                'content' => $step,
            ]);
        }

        $poutineId = Food::where('name', 'POUTINE')->pluck('id')->first();
        foreach ($poutineStep as $index => $step) {
            Step::create([
                'number' => $index + 1,
                'foods_id' => $poutineId,
                'content' => $step,
            ]);
        }

        $tacoId = Food::where('name', 'TACO')->pluck('id')->first();
        foreach ($tacoStep as $index => $step) {
            Step::create([
                'number' => $index + 1,
                'foods_id' => $tacoId,
                'content' => $step,
            ]);
        }

        $steps = [
            'Đầu tiên là nấu nước dùng, bạn cho hành tây, gừng đập dập, thơm cắt khoanh, ớt xanh, sả cây vào nồi nước nấu. Khi nước sôi thì cho bắp bò, bắp giò heo, xương ống đã nướng vào nấu chung.',
            'Làm ớt sa tế bằng cách bắc chảo lên bếp, đợi chảo nóng rồi thêm hành lá, hành tỏi băm, ngò rí, sả xay vào phi thơm, thêm ớt xay, dầu đều vào trộn đều. Múc 1/2 ra chén, 1/2 còn lại xào sơ với bắp bò cho thơm.',
            'Cắt sợi bắp chuối, rau muống cho vào âu nước đá lạnh có vắt sẵn chanh để bắp chuối, rau muống không bị đen.',
            'Cho 3 muỗng mẳm ruốc vào chén, múc một vá nước dùng vào khuấy đều cho mắm ruốc loãng ra rồi đổ ngược lại vào nồi nước dùng. Nêm thêm 2 muỗng canh nước mắm, 1 muỗng canh đường, 1 muỗng canh muối cho vừa miệng.',
            'Cắt lát mỏng bắp bò, bắp giò heo. Cắt miếng chả lá Huế hoặc để nguyên cây nếu thích. Trụng sơ bún qua nước sôi cho bớt chưa, cho lượng bún vừa đủ dùng vào tô, xếp bắp bò, bắp giò heo, chả lá vào tô. Chan nước dùng vào, ăn kèm rau muống, rau thơm, giá sống.',
            'Gà bạn tự làm tại nhà hoặc mua sẵn bên ngoài. Rửa sạch. Hành lá cắt riêng phần hành trắng, chẻ nhỏ. Phần xanh thái nhỏ. Đem 1 phần rau mùi thái nhỏ, 1 phần để nguyên cây. Lá chanh thái sợ nhỏ.',
            'Cho gà vào nồi nước lạnh luộc chín, trong quá trình luộc bạn cho chút bột canh vào nồi để thịt gà sau khi luộc ngọt, đậm đà hơn. Gà chín thì bạn vớt ra, đợi nguội. Tiếp tục cho xương vào hầm với nước dùng gà.',
            'phần gừng, hành khô đem rửa sạch và nướng qua lửa cho thơm. Củ hành tây bổ dọc thành 6 phần. Rang hạt mùi cho thơm. Tất cả các gia vị trên, cả quế và hoa hồi cho vào một miếng vải sạch bọc lại để cho vào nồi nước dùng. Nồi nước dùng tiếp tục đun, khi sôi thì để lửa nhỏ liu riu. Thịt gà đợi nguội bạn đem xé nhỏ để riêng, phần xương + đầu + cổ và chân cho vào nước dùng ninh tiếp.',
            'Nước dùng ninh khoảng 1 tiếng để xương tiết ra nước dùng ngọt thanh, lúc này bạn có thể nêm nếm lại gia vị mắm muối, bột ngọt sao cho vừa miệng.Phần bánh phở bạn trần lại qua nước sôi bằng vá, vẩy cho ráo nước rồi cho vào tô. Xếp thêm thịt gà xé, rắc hành mùi và chan nước dùng vào. Rắc thêm lá chanh lên cho thơm.',
            'Cho bột gạo, bột năng, một ít muối và 500ml nước nóng già vào thau để nhào bột. Cho nước nóng già vào hỗn hợp bột và nhào mịn đến khi thấy bột không dính tay nữa thì mang ra cán thật mỏng và cắt sợi. Đun sôi một nồi nước, thả bánh canh vừa cắt vào luộc đến khi sợi bánh canh nổi lên thì vớt ra ngâm vào nước lạnh.',
            'Cua biển mua về rửa sạch, hấp chín, gỡ lấy phần thịt và gạch để riêng. Cho hành băm nhuyễn vào chảo phi thơm với dầu ăn, rồi xào thịt cua cùng ít mắm, tiêu cho thơm. Gạch cua bạn cũng phi hành khô, xào qua, để riêng.',
            'Nấm rơm rửa sạch, ngâm nước muối loãng, bổ dọc, cho vào chảo xào qua. Thịt chân giò luộc chín, thái khoanh. Trứng cút luộc chín rồi bóc vỏ.',
            'Xương lợn chần qua nước sôi, rửa sạch rồi cho vào nồi nước lạnh ninh lấy nước dùng. Phi hành thơm vào nồi và đổ nước hầm xương vào. Sau khi nêm nếm vừa ăn thì đợi đến lúc nước sôi nhẹ và cho nấm rơm vào cùng. Hòa một ít bột năng đổ từ từ vào nồi nước dùng, vừa đổ vừa khuấy đều để tạo độ sánh. Xếp bánh canh ra bát, cho thịt chân giò, thịt cua, gạch cua, trứng cút lên trên. Chan nước dùng rồi rắc hành, mùi, hạt tiêu lên trên và thưởng thức.',
            'Bánh canh cua thơm ngon, hấp dẫn, nước dùng thanh ngọt kết hợp với thịt cua dai chắc và sợi bánh canh mềm không bị cứng chắc chắn sẽ khiến bạn hài lòng.',
            'Hành lá, cà chua rửa sạch: cà chua thì cắt múi cau, hành lá thái nhỏ. Đậu hủ cắt nhỏ rồi chiên vàng.',
            'Cua đồng rửa sạch, bóc mai cua rồi lấy phần gạch riêng. Vỏ cua đem xay nhuyễn, nếu không có máy xay thì bạn có thể giã hoặc nhờ người bán ở tiệm làm sẵn giúp bạn nhé. Cho cua xay vào một tô lớn rồi cho nước vào để thịt cua tan ra, sau đó dùng ray lọc phần thịt vào nồi, bỏ cặn. Thêm chút muối, hạt nêm và bột ngọt vào khuấy đều sau đó đặt lên bếp đun với lửa vừa, nên khuấy nhẹ tay để phần riêu cua kết lại và nổi lên mặt nước rồi vớt ra tô.',
            'Ở nồi nước đã nấu riêu bên trên, bạn nêm nếm gia vị : 2 muỗng cà phê muối, 2 muỗng cà phê đường, 1/2 muỗng cà phê bột ngọt, 1/2 muỗng cà phê nước mắm và 1/2 muỗng cà phê hạt nêm. Nên cho thêm một chút mắm tôm để nước dùng thêm đậm đà và tròn vị. Bắc 1 cái chảo lên bếp, cho dầu vào phi tỏi cho thơm rồi cho phần gạch cua vào đảo đều, thêm ít dầu màu điều để màu sắc bắt mắt hơn, múc một chút cho vào nồi nước dùng và giữ lại một ít để tạo màu cho chả trứng. Cho cà chua vào chảo xào cùng chút gia vị cho tới khi cà chua chín thì tắt bếp rồi cho vào nồi nước dùng, nêm nếm lại gia vị lần cuối cho vừa ăn.',
            'Tôm khô đem ngâm nước ấm cho mềm sau đó xay nguyễn rồi trộn cùng thịt, trứng gà, hành tỏi băm nhỏ và ít hạt nêm. Sau đó bạn đem hỗn hợp này đem hấp cách thủy (hoặc cho vào lò vi sóng). Sau khi chả chín thì cắt nhỏ',
            'Trần bún rồi cho vào tô, múc phần chả trứng, đậu hủ chiên lên trên cùng chút hành tươi thái nhỏ sau đó chan nước dùng vào và thường thức. Ăn kèm thêm rau muống bào và bắp chuối, xà lách cho đúng điệu nhé.',
            'Cho vào tô 150gr bột mì, 10gr bột bắp, 1 ít muối, 1/2 muỗng cà phê bột nở, 1/2 muỗng cà phê bột nghệ trộn đều hỗn hợp. Tiếp tục cho 1 muỗng cà phê dầu ăn và 130ml nước vào trộn đều.Khi bột đã đặt lại thì dùng tay nhồi bột trong 10 – 15 phút đến khi bột mịn và không còn dính tay là được. Dùng bọc thực phẩm (hoặc nấp nồi) đậy kín bột lại và ủ bột trong 30 phút để bột được nở.',
            'Ướp thịt bò xay với 1/2 muỗng cà phê tiêu, 1/2 muỗng cà phê hạt nêm và 1 muỗng cà phê nước tương, trộn thật đều hỗn hợp thịt và để thịt thấm gia vị trong 15 – 20 phút. Hành tây, rửa sạch, bỏ vỏ và cắt hạt lựu, tỏi băm nhuyễn. Dưa leo, xà lách và cà chua cắt lát vừa ăn.',
            'Bắc chảo lên bếp, cho 1 muỗng cà phê dầu ăn vào phi thơm tỏi, tiếp tục cho hành tây và thịt bò vào xào với lửa lớn đến khi thịt bò săn lại là được.',
            'Trải lên bàn 1 tấm giấy nến, cho bột lên trên và chia bột thành 2 phần. Cán mỏng từng phần bột và cắt tạo hình tròn cho bánh.',
            'Cho vào chảo 1 muỗng cà phê dầu ăn, sau đó cho bánh vào đậy nấp lại khoảng 2 phút thì trở mặt bánh tiếp tục áp chảo thêm 2 phút là được.',
            'ho bánh ra dĩa, đầu tiên cho dưa leo, cà chua, xà lách lên trên rồi đến thịt bò, phô mai, 1 ít ngò, cuối cùng cho tương ớt và sốt mayounaise. Gấp đôi bánh lại và bánh Taco đã hoàn thành.',
            'Thịt bò sau khi mua về bạn có thể rửa sạch với muối, một chút rượu hoặc gừng để khử mùi bò sau đó để cho ráo nước. Sau khi thịt ráo, bạn tiến hành cắt thịt bò thành từng miếng vuông vừa ăn, khoảng 1 lóng tay. Tiếp tục ướp thịt cùng với 1 muỗng cà phê hạt nêm, 1 muỗng cà phê đường, 2 muỗng cà phê nước tương sau đó để thịt nghỉ trong thấm gia vị trong vòng 15 đến 20 phút.',
            'Trong khi ướp thịt, bạn bắt đầu sơ chế các loại nguyên liệu phụ khác. Tỏi bóc vỏ và băm nhuyễn. Hành lá rửa sạch sau đó cắt khoảng 2 lóng tay cho vừa ăn.  Hành tây, ớt chuông rửa sạch với nước muối và cắt thành từng miếng vuông nhỏ khoảng 1 lóng tay. Gọt vỏ khoai tây, rửa sạch sau đó cắt thành thanh dài khoảng 3 lóng tay rồi ngâm với nước muối pha loãng trong thời gian từ 10 đến 15 phút để loại bỏ độc tố. ',
            'Làm nóng chảo trên bếp và cho vào chảo 100ml dầu ăn. Đợi dầu sôi, cho khoai tây vào chiên khoảng 10 phút cho giòn sau đó vớt ra để lên giấy để thấm bớt dầu thừa trong khoai tây. Trong quá trình chiên khoai tây, bạn nên đảo thường xuyên để khoai được chín vàng đều. ',
            'Sau khi đợi thịt thấm đều gia vị và sơ chế xong các nguyên liệu phụ. Bạn sẽ tiến hành xào thịt bò lúc lắc. Trước tiên bắc chảo lên bếp mở lửa lớn, cho vào đó 1 muỗng canh dầu ăn. Đợi dầu nóng thì cho phần tỏi băm nhuyễn vào phi thơm. Thịt bò chỉ nên xào chín tới không nên xào quá dai  Cho tiếp phần thịt bò đã ướp vào xào với lửa lớn trong thời gian từ 3 đến 4 phút để thịt săn lại.Tiếp theo cho thêm hành tây, ớt chuông vào xào chung trong khoảng 3 phút. Cuối cùng nêm nếm lại món ăn một lần nữa cho vừa ăn rồi tắt bếp bày ra đĩa ăn kèm với khoai tây chiên. '
        ];

        for ($i = 0; $i < 300; $i++) {
            $foodId = Food::inRandomOrder()->limit(1)->pluck('id')->toArray()[0];
            Step::create([
                'number' => Step::where('foods_id', $foodId)->max('number') + 1,
                'foods_id' => $foodId,
                'content' => $steps[rand(0, count($steps) - 1)],
            ]);
        }
    }
}
