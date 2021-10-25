<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\RecipeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Recipes
Route::post('/storeRecipe', [RecipeController::class, 'store']);
Route::get('/getRecipe{id}', [RecipeController::class, 'getRecipe']);
Route::post('/updateRecipe{id}', [RecipeController::class, 'update']);
Route::post('/deleteRecipe{id', [RecipeController::class, 'destroy']);
Route::get('/recipeList', [RecipeController::class, 'getRecipeList']);

//