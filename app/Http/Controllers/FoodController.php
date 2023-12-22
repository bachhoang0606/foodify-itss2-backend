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
            $name_no_accent = $this->toLowerCaseNonAccentVietnamese($name);
            $query->whereRaw('lower(name_no_accent) like (?)',["%{$name_no_accent}%"]);
        }

        if ($ingredients) {
            $foodIds = Food::pluck('id')->toArray();
            $ingredients = collect($ingredients)->map(function ($item) {
                return $this->toLowerCaseNonAccentVietnamese($item);
            })->toArray();
            foreach ($ingredients as $ingredient) {
                $foodIds = Ingredient::whereIn('foods_id', $foodIds)
                ->whereRaw('lower(name_no_accent) = (?)',["{$ingredient}"])
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

        // Get list food and check substring in php
        $foods_not_check_subString = $query->get();
        $food_check_substring_ids = $foods_not_check_subString->filter(function($food) use ($name) {
            if($this->isSubstring($food->name, $name)){
                return $food;
            };
        })->pluck('id')->toArray();

        $page_size = $request->page_size ?? 6;
        $foods = Food::whereIn('id', $food_check_substring_ids)->paginate($page_size);

        return $foods;
    }

    public function show(Food $food) {
        $food->views = $food->views + 1;
        $food->save();
        $food->load(['steps', 'ingredients']);
        return $food;
    }
}
