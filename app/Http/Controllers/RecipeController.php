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

        unset($ingredientList[0]);

        foreach ($ingredientList as $ingredient){
            $ingredientArray = explode(':', $ingredient);

            $newIngredient = Ingredient::find($ingredientArray[0]);
            $recipe->ingredients()->attach($newIngredient, ['amount' => $ingredientArray[1]]);        
        }
    }

    public function getAll()
    {
        return Recipe::all();
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $recipe = Recipe::find($id);
        $recipe->update([
            empty($request->name)? :'recipe_name' => $request->name,
            empty($request->description)? :'description' => $request->description,
            empty($request->rating)? :'rating' => $request->rating,
            empty($request->duration)? :'duration' => $request->duration,
        ]);

        if (!empty($request->ingredients)){
            $recipe->ingredients()->detach();
            
            $ingredientList = explode(',', $request->ingredients);
            unset($ingredientList[0]);

            foreach ($ingredientList as $ingredient){
                $ingredientArray = explode(':', $ingredient);

                $newIngredient = Ingredient::find($ingredientArray[0]);
                $recipe->ingredients()->attach($newIngredient, ['amount' => $ingredientArray[1]]);        
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Recipe::find($id)->delete();
    }

    public function getRecipeList()
    {
        $recipeList = [];
        $recipes = Recipe::all();

        foreach ($recipes as $recipe){

            $recipe_category = DB::select('select * from categories c left join category_recipe cr on cr.recipe_id = ? where c.id = cr.category_id', [$recipe->id]);

            array_push($recipeList, [
                'id' => $recipe->id,
                'name' => $recipe->recipe_name,
                'category' => $recipe_category,
                'description' => $recipe->description,
                'rating' => $recipe->rating,
                'duration' => $recipe->duration
            ]);
        }

        return $recipeList;

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
