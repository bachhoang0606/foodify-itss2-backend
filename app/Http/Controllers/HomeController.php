<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;

class HomeController extends Controller
{
    public function home() {
        $limtitNumber = 9;

        $trendFoods = Food::orderBy('views', 'desc')->limit($limtitNumber)->get();

        $newestFoods = Food::orderBy('created_at', 'desc')->limit($limtitNumber)->get();
        
        $randomFoods = Food::inRandomOrder()->limit($limtitNumber)->get();

        $mostLikes = Food::orderBy('total_like', 'DESC')->first();

        return response()->json([
            'trend_foods' => $trendFoods,
            'newest_foods' => $newestFoods,
            'ramdon_foods' => $randomFoods,
            'most_likes_food' => $mostLikes,
        ], 200);
    }
}
