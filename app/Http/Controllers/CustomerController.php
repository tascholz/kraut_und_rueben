<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = Customer::create([
            'last_name' => $request->last_name,
            'first_name' => $request->first_name,
            'birthdate' => $request->birthdate,
            'street' => $request->street,
            'house_number' => $request->house_number,
            'postcode' => $request->postcode,
            'city' => $request->city,
            'telephone' => $request->telephone,
            'email' => $request->email
        ]);
    }

    /**
     * Returns the specified resource.
     *
     * @param  integer $id
     * @return \Illuminate\Http\Response
     */
    public function get($id)
    {
        return Customer::find($id);
    }

    /**
     * returns all customers
     * 
     * @return Customer[]
     */
    public function getAll()
    {
        return Customer::all();
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
        $customer = Customer::find($id);
        $customer->update([
            empty($request->last_name) ? :'last_name' => $request->last_name,
            empty($request->first_name) ? :'first_name' => $request->first_name,
            empty($request->birthdate) ? :'birthdate' => $request->birthdate,
            empty($request->street) ? : 'street' => $request->street,
            empty($request->house_number) ? :'house_number' => $request->house_number,
            empty($request->postcode) ? :'postcode' => $request->postcode,
            empty($request->city) ? : 'city' => $request->city,
            empty($request->telephone) ? :'telephone' => $telephone,
            empty($request->email) ? : 'email' => $request->email
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
        Customer::find($id)->delete();
    }
}
