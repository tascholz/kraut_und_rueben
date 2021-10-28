<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Customer;
use App\Models\Recipe;
use App\Models\Ingredient;
use App\Models\Category;

class MainController extends Controller
{
    public function index()
    {
        $ingredients = Ingredient::all();
        $recipe = Recipe::all();
        return view('index', [
                                'ingredients' => $ingredients
                            ]);
    }

    public function addRecipes()
    {
        $ingredients = Ingredient::all();
        $categories = Category::all();
        return view('addRecipe', [
            'ingredients' => $ingredients,
            'categories' => $categories 
        ]);
    }
}
