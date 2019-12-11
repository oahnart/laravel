<?php

namespace App\Http\Controllers;

use App\Customers;
use App\Orders;
use DB;
use App\Product;
use \Cart;
use Session;
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
        $post = $request->all();
        $customers = new Customers();
        $customers->first_name = $_POST['first_name'];
        $customers->last_name = $_POST['last_name'];
        $customers->gender = $_POST['gioi_tinh'];
        $customers->phone = $_POST['phone_number'];
        $customers->address = $_POST['address'];
        $customers->save();

        $orders = new Orders();
        $orders->customer_id = $customers->id;
        $orders->total =Cart::subtotal();
        $orders->status = "pending";
        $orders->save();
        $order_id= $orders->id;

        foreach (Cart::content() as $item){
            DB::table('order_product')->insert(
                array(
                    'product_id' => $item->id,
                    'order_id' => $order_id,
                    'product_name' => $item->name,
                    'product_price' => $item->price,
                    'product_qty' => $item->qty,
                )
            );
        }
        Cart::destroy();
        Session::flash('message', 'Bạn đã mua hàng thành công, cám ơn bạn');
        return redirect(route('home'));
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

    public function removeItemCart($id , Request $request){
        Cart::remove($id);
        return redirect(route('gio-hang'));
    }
}
