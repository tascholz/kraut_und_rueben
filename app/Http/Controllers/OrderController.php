<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = Order::create([
            'customer_id' => $request->customer_id,
            'order_date' => $request->order_date,
            'total' => $request->total
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
        return Order::find($id);
    }

    /**
     * Return all orders
     * 
     * @return Order[]
     */
    public function getAll()
    {
        return Order::all();
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
        $order = Order::find($id);
        $order->update([
            'customer_id' => $request->customer_id,
            'order_date' => $request->order_date,
            'total' => $request->total
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
        Order::find($id)->delete();
    }
}
