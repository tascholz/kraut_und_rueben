<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /**
         * Like:
         * INSERT INTO ingredients (
         *                          ingredient_name,
         *                          unit...)
         *              VALUES     ($request->name,
         *                          $request->unit...)
         */
        $ingredient = Ingredient::create([
                                            'ingredient_name' => $request->name,
                                            'unit' => $request->unit,
                                            'netto_price' => $request->netto_price,
                                            'stock' => $request->stock,
                                            'supplier_id' => $request->supplier_id,
                                            'calories' => $request->calories,
                                            'carbonhydrates' => $request->carbonhydrates,
                                            'protein' => $request->protein
                                        ]);
    }

    /**
     * Return the specified resource.
     *
     * @param  integer $id
     * @return \Illuminate\Http\Response
     */
    public function get($id)
    {
        /**
         * Like
         * SELECT * FROM ingredients WHERE id = $id
         */
        return $ingredient = Ingredient::find($id);
    }

    /**
     * Return all ingredients
     * 
     * @return Ingredient[]
     */
    public function getAll()
    {
        /**
         * Like
         * SELECT * FROM ingredients
         */
        return Ingredient::all();
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
        /**
         * Like
         * UPDATE ingredients SET ingredient_name = $request->name WHERE id = $id
         */
        $ingredient = Ingredient::find($id);
        $ingredient->update([
            empty($request->name) ? : 'ingredient_name' => $request->name,
            empty($request->unit) ? : 'unit' => $request->unit,
            empty($request->netto_price) ? : 'netto_price' => $request->netto_price,
            empty($request->stock) ? : 'stock' => $request->stock,
            empty($request->supplier_id) ? : 'supplier_id' => $request->supplier_id,
            empty($request->calories) ? : 'calories' => $request->calories,
            empty($request->carbonhydrates) ? : 'carbonhydrates' => $request->carbonhydrates,
            empty($request->protein) ? : 'protein' => $request->protein
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
        /**
         * Like
         * DELETE FROM ingredients WHERE id = $id
         */
        Ingredient::find($id)->delete();
    }
}
