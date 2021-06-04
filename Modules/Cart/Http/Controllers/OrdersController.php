<?php

namespace Modules\Cart\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Cart\Entities\Cart;
use Modules\Cart\Entities\Order;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $carts = Cart::where('user_id',Auth::id())->WhereNotNull('order_id')->get();
        return view('cart::index', compact('carts'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('cart::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $order = new Order;
        $order->name = $request->name;
        $order->phone = $request->phone;
        $order->email = $request->email;
        $order->islamibank = $request->islamibank;
        $order->islamibank_transection_id = $request->islamibank_transection_id;
        $order->brakbank = $request->brakbank;
        $order->brakbank_transection_id = $request->brakbank_transection_id;
        $order->save();
        foreach (Cart::item_cart() as $cart) {
            $cart['order_id']=$order->id;
            $cart->save();
    }
        return redirect('/');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('cart::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('cart::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
