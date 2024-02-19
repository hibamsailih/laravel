<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $order = order::all();
    return view('home', ['order' => $order]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Ensure 'custom_order_num' is set based on your form field name
        $customOrderNum = $request->input('custom_order_num');
    
        $input = $request->all();
        $order = Order::create($input);
    
        // Set the 'custom_order_num' value
        $order->update(['custom_order_num' => $customOrderNum]);
    
        return redirect('order')->with('flash_message', 'Order added successfully');
    }

    

    
    



    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $order=order::find($id);
        return view('show')->with('order',$order);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $order = order::find($id);
        return view('edit', ['order' => $order]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $order=order::find($id);
        $input=$request->all();
        $order->update($input);
        return redirect('order')->with('success', 'Order updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        order::destroy($id);
        return redirect('order')->with('flash_message','order deleted');
    }
}
