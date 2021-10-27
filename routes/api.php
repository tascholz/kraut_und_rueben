<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\IngredientController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SupplierController;

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
Route::get('/getAllRecipes', [RecipeController::class, 'getAll']);

//Customer
Route::post('/storeCustomer', [CustomerController::class, 'store']);
Route::get('/getCustomer{id}', [CustomerController::class, 'get']);
Route::post('/updateCustomer{id}', [CustomerController::class, 'update']);
Route::post('/deleteCustomer{id', [CustomerController::class, 'destroy']);
Route::get('/getAllCustomers', [CustomerController::class, 'getAll']);

//Category
Route::post('/storeCategory', [CategoryController::class, 'store']);
Route::get('/getCategory{id}', [CategoryController::class, 'get']);
Route::post('/updateCategory{id}', [CategoryController::class, 'update']);
Route::post('/deleteCategory{id', [CategoryController::class, 'destroy']);
Route::get('/getAllCategories', [CategoryController::class, 'getAll']);

//Ingredients
Route::post('/storeIngredient', [IngredientController::class, 'store']);
Route::get('/getIngredient{id}', [IngredientController::class, 'get']);
Route::post('/updateIngredient{id}', [IngredientController::class, 'update']);
Route::post('/deleteIngredient{id', [IngredientController::class, 'destroy']);
Route::get('/getAllIngredients', [IngredientController::class, 'getAll']);

//Order
Route::post('/storeOrder', [OrderController::class, 'store']);
Route::get('/getOrder{id}', [OrderController::class, 'get']);
Route::post('/updateOrder{id}', [OrderController::class, 'update']);
Route::post('/deleteOrder{id', [OrderController::class, 'destroy']);
Route::get('/getAllOrders', [OrderController::class, 'getAll']);

//Supplier
Route::post('/storeSupplier', [SupplierController::class, 'store']);
Route::get('/getSupplier{id}', [SupplierController::class, 'get']);
Route::post('/updateSupplier{id}', [SupplierController::class, 'update']);
Route::post('/deleteSupplier{id', [SupplierController::class, 'destroy']);
Route::get('/getAllSuppliers', [SupplierController::class, 'getAll']);