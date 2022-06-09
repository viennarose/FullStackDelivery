<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Delivery::orderBy('customerName')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {
        $request->validate([
            'customerName' => 'string|required',
            'order' => 'string|required',
            'price' => 'string|required',
            'quantity' => 'string|required',
            'total' => 'string|required',
          
        ]);

        $delivery = Delivery::create($request->only('customerName', 'order', 'price', 'quantity', 'total'));

        return response()->json($delivery);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Delivery  $delivery
     * @return \Illuminate\Http\Response
     */
    public function show(Delivery $delivery)
    {
        return response()->json($delivery);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Delivery  $delivery
     * @return \Illuminate\Http\Response
     */
    public function edit(Delivery $delivery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Delivery  $delivery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Delivery $delivery)
    {
        $delivery->update($request->only('customerName', 'order', 'price', 'quantity', 'total'));

        return response()->json($delivery);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Delivery  $delivery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Delivery $delivery)
    {
        $customerName = $delivery->customerName;

        $delivery->delete();

        return response()->json([
            'deleted' => true,
            'message' => $customerName . " has been deleted."
        ]);
    }
}
