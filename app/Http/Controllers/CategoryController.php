<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    /**
     * fetches all categories
     * 
     * @return Category[]
     */
    public function getAll()
    {
        return Category::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = Category::create(['category_name' => $request->category_name]);
    }

    /**
     * Get Category by id
     * 
     * @param integer $id
     * return \App\Models\Category
     */
    public function get($id)
    {
        return Category::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Category::find($id)->update(['category_name' => $request->category_name]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::find($id)->delete();
    }
}
