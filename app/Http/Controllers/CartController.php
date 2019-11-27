<?php

namespace App\Http\Controllers;

use App\Product;
use \Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){
        return view('cart');
    }
    public function payNow(){
        return view('checkout');
    }
    public function postPayNow(Request $request){
        $request->validate([
            'first_name' =>'required',
            'last_name' => 'required',
            'gioi_tinh' => 'required',
            'phone_number' => 'required',
            'address' => 'required'
        ]);
        return 'postPayNow';
    }
    //
    public function postAddTocart($id, Request $request){
        $product = Product::find($id);
        $post= $request->all();
        $price = $product->price;
        if ($product->sale_price){
            $price = $product->sale_price;
        }
        Cart::add($id, $product->product_name,$post['quality'],$price);
        return redirect(route('gio-hang'));
    }
}
