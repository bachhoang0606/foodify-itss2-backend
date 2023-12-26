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
        $users = [
            'Hoàng Bách', 'Linh Chi', 'Huyền Trang', 'Minh Quân', 'Thảo Nguyên',
            'Linh Nhi', 'Hoàng Anh', 'Tùng Lâm', 'Quỳnh Anh', 'Tuấn Anh',
            'Ngọc Mai', 'Phương Anh', 'Hải Đăng', 'Thuỳ Linh', 'Hà Anh',
            'Phương Thảo', 'Minh Tâm', 'Hồng Ngọc', 'Duy Anh', 'Hương Ly'
        ];
        $comments = [
            "Món ăn này ngon quá",
            "Hương vị tuyệt vời!",
            "Thực đơn đa dạng, rất hài lòng!",
            "Đáng giá từng xu!",
            "Phục vụ tốt, giá cả hợp lý",
            "Không gian ấm cúng, thích thú!",
            "Rất ngon miệng, sẽ quay lại lần nữa!",
            "Bữa ăn tuyệt vời!",
            "Mọi thứ đều hoàn hảo!",
            "Không gian tuyệt vời!",
            "Món ăn này thật ngon miệng!",
            "Không gian quá tuyệt vời!",
            "Chất lượng đồ ăn rất tốt!",
            "Phục vụ nhanh chóng và chu đáo.",
            "Hương vị độc đáo, không thể quên!",
            "Đáng để thử lần nữa!",
            "Thực đơn đa dạng, phong phú!",
            "Giá cả hợp lý, xứng đáng!",
            "Đồ ăn tươi ngon và hấp dẫn!",
            "Thật sự ấn tượng với món này.",
            "Bữa ăn vừa ngon vừa bổ dưỡng.",
            "Không gian ấm cúng và thoải mái.",
            "Nhân viên rất thân thiện và nhiệt tình.",
            "Rất hài lòng với trải nghiệm ở đây.",
            "Mọi thứ đều hoàn hảo, từ đầu đến cuối.",
            "Điểm đến tuyệt vời cho một bữa ăn ngon.",
            "Sẽ quay lại quán mỗi khi có dịp.",
            "Thực sự đáng để giới thiệu cho bạn bè.",
            "Đặc sản tuyệt vời, thử là mê ngay!",
            "Một trải nghiệm ẩm thực khó quên!",
        ];
        $foodIds = Food::pluck('id')->toArray();
        return [
            'foods_id' => $this->faker->randomElement($foodIds),
            'username' => $users[$this->faker->numberBetween(0, count($users) - 1)],
            'content' => $comments[$this->faker->numberBetween(0, count($comments) - 1)],
        ];
    }
}
