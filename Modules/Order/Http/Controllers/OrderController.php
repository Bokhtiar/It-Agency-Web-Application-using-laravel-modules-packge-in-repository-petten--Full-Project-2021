<?php

namespace Modules\Order\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Cart\Entities\Cart;
use Modules\Cart\Entities\Order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $orders = Order::all();
        return view('order::index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function detail($id)
    {
        $order = Order::find($id);
        return view('order::detail', compact('order'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function status($id)
    {
        $status = Order::find($id);
        if ($status->status == 1) {
            $status['status'] = 0;
            $status->save();
            return back();
        } else {
            $status['status'] = 1;
            $status->save();
            return back();
        }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function sendDoc($id)
    {
        $send = Order::find($id);
        if ($send->sendDoc == 1) {
            $send['sendDoc'] = 0;
            $send->save();
            return back();
        } else {
            $send['sendDoc'] = 1;
            $send->save();
            return back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function delete($id)
    {
        $cart = Cart::find($id)->delete();
        return back();
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $cart = Cart::find($id);
        $cart->quantity = $request->quantity;
        $cart->save();
        return back();
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
