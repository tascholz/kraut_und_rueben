<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $supplier = Supplier::create([
            'supplier_name' => $request->supplier_name,
            'street' => $request->street,
            'house_number' => $request->house_number,
            'postcode' => $request->postcode,
            'city' => $request->city,
            'telephone' => $request->telephone,
            'email' => $request->email
        ]);
    }

    /**
     * Return the specified ressource
     *
     * @param  integer $id
     * @return \Illuminate\Http\Response
     */
    public function get($id)
    {
        return Supplier::find($id);
    }

    /**
     * Return all suppliers
     * 
     * @return Supplier[]
     */
    public function getAll()
    {
        return Supplier::all();
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
        $supplier = Supplier::find($id);
        $supplier->update([
            'supplier_name' => $request->supplier_name,
            'street' => $request->street,
            'house_number' => $request->house_number,
            'postcode' => $request->postcode,
            'city' => $request->city,
            'telephone' => $request->telephone,
            'email' => $request->email
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
        Supplier::find($id)->delete();
    }
}
