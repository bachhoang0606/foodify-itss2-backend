<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FoodCategoryRegion;

class FoodCategoryRegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [
            'Món Á',
            'Món Âu',
            'Đồ ăn Việt Nam',
            'Đồ ăn Trung',
            'Đồ ăn Hàn',
            'Đồ ăn Nhật Bản',
        ];

        foreach ($names as $name) {
            FoodCategoryRegion::factory()->create([
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
