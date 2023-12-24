<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Step;
use App\Models\Food;
use Illuminate\Support\Facades\DB;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Step>
 */
class StepFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Step::class;

    public function definition()
    {
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
        $foodIds = Food::pluck('id')->toArray();
        $foodId = $this->faker->randomElement($foodIds);
        return [
            'number' => Step::where('foods_id', $foodId)->max('number') + 1,
            'foods_id' => $foodId,
            'content' => $steps[$this->faker->numberBetween(0, count($steps) - 1)],
        ];
    }
}
