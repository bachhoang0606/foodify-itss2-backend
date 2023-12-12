<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\Ingredient;

class FoodController extends Controller
{
    public function search(Request $request)
    {
        $name = $request->input('name');
        $ingredients = $request->input('ingredients');

        $query = Food::query();

        if ($name) {
            $query->where('name', 'like', '%' . $name . '%');
        }

        if ($ingredients) {
            $foodIds = Food::pluck('id')->toArray();
            foreach ($ingredients as $ingredient) {
                $foodIds = Ingredient::whereIn('foods_id', $foodIds)
                ->where('description', 'like', '%' . $ingredient . '%')
                ->groupBy('foods_id')->pluck('foods_id')->toArray();
            }
            
            $query->whereIn('id', $foodIds);
        }

        $foods = $query->with('category', 'region')->get();

        return $foods;
    }
}
