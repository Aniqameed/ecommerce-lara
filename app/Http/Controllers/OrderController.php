<?php

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\Request;
use App\Http\Requests\orderRequest;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(orderRequest $request)
    {
        return view('pages.order.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(orderRequest $request)
    {
        try {
            $order = new order();
            $order->customer_name = $request->customer_name;
            $order->customer_email = $request->customer_email;
            $order->order_date = $request->order_date;
            $order->total_amount = $request->total_amount;
            $order->status = $request->status;
            $order->payment_method = $request->payment_method;
            $order->shipping_address = $request->shipping_addressr;
            $order->billing_address = $request->billing_address ;
            $order->quantity = $request->quantity;
            $order->order_notes = $request->order_notes;

            $order->save();

            return redirect()->route('order.index');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(order $order)
    {
        //
    }
}
