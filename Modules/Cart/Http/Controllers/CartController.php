<?php

namespace Modules\Cart\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Cart\Entities\Cart;

class CartController extends Controller
{
    

    public function store($id)
    {
        if(Cart::where('product_id',$id)->where('order_id',null)->where('user_id',Auth::id())->first()){
            $update = Cart::where('product_id',$id)->where('order_id',null)->first();
            $update['quantity']=$update->quantity+1;
            $update->save();
            return back();
        }else{
            Cart::create([
                'user_id'=> Auth::id(),
                'product_id'=> $id,
            ]);
            return back();
        }
    }


    public function cart_details()
    {
        $carts = Cart::item_cart();
        return view('cart::details', compact('carts'));
    }


    public function quantity(Request $request ,$id)
    {
        $cart = Cart::find($id);
        $cart['quantity'] = $request->quantity;
        $cart->save();
        return back();
    }

    public function delete($id)
    {
        $del = Cart::find($id);
        $del->delete();
        return back();
    }
}
