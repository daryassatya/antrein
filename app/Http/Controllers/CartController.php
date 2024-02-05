<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addItem(Request $request){
        try {
            $product = Product::findOrFail($request->product_id);

            $cart = new Cart();
            $cart->perusahaan_id = Auth::user()->perusahaan_id;
            $cart->product_id = $request->product_id;
            $cart->qty = $request->qty;
            $tempTotal = $request->qty * $product->price;
            $cart->total_price = $tempTotal;
            $cart->save();
            
            $getCart = Cart::where('perusahaan_id', $cart->perusahaan_id)->orderBy('id', 'asc')->get();

            return response()->json($getCart);
        } catch (\Throwable $th) {
            return $th;
        }
    }

    public function dropItem(Request $request){
        dd($request);
    }

    public function getProduct(Request $request){
        try {
            $product = Product::findOrFail($request->product_id);
            return response()->json($product);
        } catch (\Throwable $th) {
            return $th;
        }
    }
}
