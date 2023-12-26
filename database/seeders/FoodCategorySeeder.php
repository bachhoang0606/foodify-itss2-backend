<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FoodCategory;

class FoodCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [
            'Đồ ăn tráng miệng',
            'Đồ ăn bữa sáng',
            'Đồ ăn bữa trưa',
            'Đồ ăn bữa tối',
            'Đồ ăn mặn',
            'Đồ ăn ngọt',
        ];

        foreach ($names as $name) {
            FoodCategory::factory()->create([
                'name' => $name,
                'description' => $this->getDescription($name),
            ]);
        }
    }

    // Function to generate description based on name
    private function getDescription($name)
    {
        // Your logic to generate description based on the name
        // For simplicity, using a basic logic here
        return "Description for $name";
    }
}
