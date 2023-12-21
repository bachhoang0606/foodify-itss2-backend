<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\Ingredient;

class FoodController extends Controller
{
    public function search(Request $request)
    {
        // $ingredients, $categories type Array
        $name = $request->input('name');
        $ingredients = $request->input('ingredients');
        $categories = $request->input('categories');
        $region = $request->input('region');

        $query = Food::query();

        if ($name) {
            $name = strtolower($name);
            $query->whereRaw('lower(name) like (?)',["%{$name}%"]);
        }

        if ($ingredients) {
            $foodIds = Food::pluck('id')->toArray();
            $ingredients = collect($ingredients)->map(function ($item) {
                return strtolower($item);
            })->toArray();
            foreach ($ingredients as $ingredient) {
                $foodIds = Ingredient::whereIn('foods_id', $foodIds)
                ->whereRaw('lower(description) like (?)',["%{$ingredient}%"])
                ->groupBy('foods_id')->pluck('foods_id')->toArray();
            }
            
            $query->whereIn('id', $foodIds);
        }

        $query->with('category');
        if ($categories) {
            $query->whereIn('food_categories_id', $categories);
        }

        $query->with('region');
        if ($region) {
            $query->where('food_category_regions_id', $region);
        }

        $page_size = $request->page_size ?? 6;
        $foods = $query->paginate($page_size);

        return $foods;
    }

    public function show(Food $food) {
        $food->views = $food->views + 1;
        $food->save();
        $food->load(['steps', 'ingredients']);
        return $food;
    }
}
