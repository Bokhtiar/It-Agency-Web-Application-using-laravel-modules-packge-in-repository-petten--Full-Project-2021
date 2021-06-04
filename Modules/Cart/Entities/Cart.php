<?php

namespace Modules\Cart\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Auth;
use Modules\Product\Entities\Product;

class Cart extends Model
{



    protected $fillable = [
        'user_id', 'product_id', 'order_id', 'quantity', 'status',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function product(){
        return $this->belongsTo(Product::class);
    }



    public static function total_item_cart(){

        if (Auth::check()) {
          $cart = cart::where('user_id',Auth::id())
                    ->where('order_id',NULL)
                    ->get();
        }else {
            $cart = cart::where('user_id',Auth::id())
                        ->where('order_id',NULL)
                        ->get();
          }
        $total_item=0;
        foreach ($cart as $v_cart) {
                    $total_item +=$v_cart->quantity;
        }
        return $total_item;
        }


        public static function item_cart(){
        if (Auth::check()) {
        $cart=cart::where('user_id',Auth::id())
                ->where('order_id',NULL)
                ->get();
        }else {
            $cart=cart::where('order_id',NULL)
                      ->get();
        }
        return $cart;
        }


        public static function order_item_cart(){
            if (Auth::check()) {
            $cart=cart::where('user_id',Auth::id())
                    ->WhereNotNull('order_id')
                    ->get();
            }
            return $cart;
            }

    protected static function newFactory()
    {
        return \Modules\Cart\Database\factories\CartFactory::new();
    }
}
