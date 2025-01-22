<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use App\Models\Customer;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = Order::all();
        return view('order.index', compact('order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customer = Customer::all();
        $product = Product::all();
        return view('order.create',compact('customer','product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = new Order;
        $order->id_product = $request->id_product;
        $order->quantity = $request->Quantity;
        $order->order_date = $request->date;
        $order->id_customer = $request->id_customer;
        $order->save();
        session()->flash('succes','Data Berhasil Ditambahkan');
        return redirect()->route('order.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customer::all();
        $product = Product::all();
        $order = Order::findOrfail($id);
        return view('order.show', compact('product','customer','order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::all();
        $product = Product::all();
        $order = Order::findOrfail($id);
        return view('order.edit', compact('product','customer','order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $order =  Order::findOrfail($id);
        $order->id_product = $request->id_product;
        $order->quantity = $request->Quantity;
        $order->order_date = $request->date;
        $order->id_customer = $request->id_customer;
        $order->save();
        session()->flash('succes','Data Berhasil Diubah');
        return redirect()->route('order.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::findOrfail($id);
        $order->delete();
        return redirect()->route('order.index')->with('succes','Data Berhasil Dihapus');
    }
}
