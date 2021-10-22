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

    public function addNextRecipe(Request $request){
        $recipe = new Recipe;

        $recipe->recipe_name = $request->name;
        $recipe->description = $request->description;
        $recipe->rating = $request->rating;
        $recipe->duration = $request->duration;
        $recipe->save();

        $ingredientsList = explode(',', $request->ingredients);
        unset($ingredientsList[0]);
        foreach($ingredientsList as $ingredient){
                $ingredientComponent = explode(':',$ingredient);                
                $ingredientId = Ingredient::where('ingredient_name', $ingredientComponent[0])->first()->ingredient_id;
                $recipeId = Recipe::where('recipe_name', $request->name)->first()->id;
                $amount = $ingredientComponent[1];
                DB::insert('insert into ingredient_recipe (ingredient_id, recipe_id, amount) values (?, ?, ?)', [$ingredientId, $recipeId, $amount]);
        }

        $categoryId = Category::where('category_name', '=', $request->category)->get()->first()->category_id;
        
        DB::insert('insert into category_recipe (category_id, recipe_id) values (?, ?)', [$categoryId, $recipeId]);

        return redirect('/addRecipes');
    }

}
