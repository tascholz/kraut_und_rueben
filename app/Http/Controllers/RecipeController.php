<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\Category;
use App\Models\Ingredient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class RecipeController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $recipe = Recipe::create([
                                    'recipe_name' => $request->name,
                                    'description' => $request->description,
                                    'rating' => $request->rating,
                                    'duration' => $request->duration,
                                    'category_id' => $request->category,
                                ]);

        $ingredientList = explode(',', $request->ingredients);

        foreach ($ingredientList as $ingredient){
            $ingredientArray = explode(':', $ingredient);

            $newIngredient = Ingredient::find($ingredientArray[0]);
            $recipe->ingredients()->attach($newIngredient, ['amount' => $ingredientArray[1]]);        
        }
    }

    /**
     * Return all recipes
     * 
     * @return Recipe[]
     */
    public function getAll()
    {
        return Recipe::all();
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  integer $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $recipe = Recipe::find($id);

        if (!empty($request->ingredients)){
            $recipe->ingredients()->detach();

            $ingredientList = explode(',', $request->ingredients);

            foreach ($ingredientList as $ingredient){
                $ingredientArray = explode(':', $ingredient);

                $newIngredient = Ingredient::find($ingredientArray[0]);
                $recipe->ingredients()->attach($newIngredient, ['amount' => $ingredientArray[1]]);        
            }
        }

        $recipe->update([
            empty($request->name)? :'recipe_name' => $request->name,
            empty($request->description)? :'description' => $request->description,
            empty($request->rating)? :'rating' => $request->rating,
            empty($request->duration)? :'duration' => $request->duration,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  integer $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Recipe::find($id)->delete();
    }

    /**
     * Calculate the nutrition values
     * 
     * @param Recipe $recipe
     * @return float[]
     */
    public function calculateNutritionValues(Recipe $recipe){
        
        $calorieTotal = 0;
        $carbonhydratesTotal = 0;
        $proteinTotal = 0;

        $ingredients = DB::table('ingredient_recipe')
            ->where('recipe_id', '=', $recipe->id)
            ->get();

        foreach($ingredients as $ingredient){
            $calorieTotal += Ingredient::where('id', '=', $ingredient->ingredient_id)->first()->calories * $ingredient->amount;
            $carbonhydratesTotal += Ingredient::where('id', '=', $ingredient->ingredient_id)->first()->carbonhydrates * $ingredient->amount;
            $proteinTotal += Ingredient::where('id', '=', $ingredient->ingredient_id)->first()->protein * $ingredient->amount;
        }
        return ['calorieTotal' => round($calorieTotal, 2),
                'carbonhydratesTotal' => round($carbonhydratesTotal, 2),
                'proteinTotal' => round($proteinTotal, 2)];
    }

    /**
     * Calculate the price
     * 
     * @param Recipe $recipe
     * @return float
     */
    public function calculateRecipePrice(Recipe $recipe){

        $total = 0;
        $ingredientList = DB::table('ingredient_recipe')
        ->where('recipe_id', '=', $recipe->id)
        ->get();

        $ingredients = [];
        foreach($ingredientList as $ingredient){
            $total += (Ingredient::where('id', $ingredient->ingredient_id)->first()->netto_price * $ingredient->amount);
        }
        return $total;
    }

    /**
     * Return the selected ressource
     * 
     * @param integer $id
     * @return Recipe
     */
    public function getRecipe($id)
    {
        $recipe = Recipe::find($id);
        $name = $recipe->recipe_name;
        $description = $recipe->description;
        $duration = $recipe->duration;
        $ingredientList = DB::table('ingredient_recipe')
        ->where('recipe_id', '=', $recipe->id)
        ->get();

        $ingredients = [];
        foreach($ingredientList as $ingredient){
            
            $ingredient_name = Ingredient::where('id', $ingredient->ingredient_id)->first();

            array_push($ingredients, [
                'id' => $ingredient->ingredient_id,
                'ingredient_name' => $ingredient_name->ingredient_name,
                'ingredient_amount' => $ingredient->amount,
                'ingredient_unit' => $ingredient_name->unit,
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
                'price' => $totalPrice,
                'duration' => $duration,
            ];
                
    }
}
