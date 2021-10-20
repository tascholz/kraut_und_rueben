<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Customer;
use App\Models\Recipe;
use App\Models\Ingredient;

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
        return view('addRecipe', [
            'ingredients' => $ingredients 
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
        return redirect('/addRecipes');
    }

    public function calculateNutritionValues(Recipe $recipe){
        
        $calorieTotal = 0;
        $carbonhydratesTotal = 0;
        $proteinTotal = 0;

        $ingredients = DB::table('ingredient_recipe')
            ->where('recipe_id', '=', $recipe->id)
            ->get();

        foreach($ingredients as $ingredient){
            $calorieTotal += Ingredient::where('ingredient_id', '=', $ingredient->ingredient_id)->first()->calories * $ingredient->amount;
            $carbonhydratesTotal += Ingredient::where('ingredient_id', '=', $ingredient->ingredient_id)->first()->carbonhydrates * $ingredient->amount;
            $proteinTotal += Ingredient::where('ingredient_id', '=', $ingredient->ingredient_id)->first()->protein * $ingredient->amount;
        }
        return ['calorieTotal' => $calorieTotal,
                'carbonhydratesTotal' => $carbonhydratesTotal,
                'proteinTotal' => $proteinTotal];
    }

    public function calculateRecipePrice(Recipe $recipe){

        $total = 0;
        $ingredientList = DB::table('ingredient_recipe')
        ->where('recipe_id', '=', $recipe->id)
        ->get();

        $ingredients = [];
        foreach($ingredientList as $ingredient){
            $total += (Ingredient::where('ingredient_id', $ingredient->ingredient_id)->first()->netto_price * $ingredient->amount);
        }
        return $total;
    }

    public function getRecipe($id)
    {
        $recipe = Recipe::find($id);
        $name = $recipe->recipe_name;
        $description = $recipe->description;
        $ingredientList = DB::table('ingredient_recipe')
        ->where('recipe_id', '=', $recipe->id)
        ->get();

        $ingredients = [];
        foreach($ingredientList as $ingredient){
            
            $ingredient_name = Ingredient::where('ingredient_id', $ingredient->ingredient_id)->first()->ingredient_name;

            array_push($ingredients, [
                'ingredient_name' => $ingredient_name,
                'ingredient_amount' => $ingredient->amount
            ]);
        }
        $nutritions = $this->calculateNutritionValues($recipe);
        $totalPrice = $this->calculateRecipePrice($recipe);
        return ['name' => $name,
                'ingredients' => $ingredients,
                'description' => $description,
                'calories' => $nutritions['calorieTotal'],
                'carbonhydrates' => $nutritions['carbonhydratesTotal'],
                'protein' => $nutritions['proteinTotal'],
                'price' => $totalPrice];
    }
}
