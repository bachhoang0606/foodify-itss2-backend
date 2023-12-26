<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingredient;

class IngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $names = Ingredient::pluck('name');
        $names = $names->map(function($item) {
            return mb_strtolower($item, 'UTF-8');
        })->toArray();
        return array_unique($names);;
    }
}
