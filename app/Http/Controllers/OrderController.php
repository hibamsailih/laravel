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
        $orders = order::all();
    return view('home', ['order' => $orders]);
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
    $request->validate([
        'fullname' => 'required|string',
        'price' => 'required|numeric',
        'product' => 'required|string',
        'sku' => 'required|string',
        'source' => 'required|in:user,woocommerce',
        'custom_order_num' => 'required|string', // Add validation rule for custom_order_num
    ]);
    $input = $request->all();

    // Ensure 'order_num' is not set by the user
    unset($input['order_num']);

    // Ensure 'custom_order_num' is set to a default value
    $input['custom_order_num'] = ' '; // Replace 'DEFAULT_VALUE' with your desired default value

    // Create a new order
    $order = order::create($input);

    
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
        //
    }
}
