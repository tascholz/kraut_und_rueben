<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Recipe;
use App\Models\Ingredient;

class MainController extends Controller
{
    public function index()
    {
        $ingredients = Ingredient::all();
        
        return view('index', [
                                'ingredients' => $ingredients
                            ]);
    }

    public function showRecipes()
    {
        
    }
}
