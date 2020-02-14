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

        $orders = new Orders();
        $orders->total =Cart::subtotal();
        $orders->status = "pending";
        $orders->save();
        $order_id= $orders->id;

        $post = $request->all();
        $customers = new Customers();
        $customers->email = $_POST['email'];
        $customers->first_name = $_POST['first_name'];
        $customers->last_name = $_POST['last_name'];
        $customers->gender = $_POST['gioi_tinh'];
        $customers->phone = $_POST['phone_number'];
        $customers->address = $_POST['address'];
        $customers->order_id= $order_id;
        $customers->save();

        foreach (Cart::content() as $item){
            DB::table('order_product')->insert(
                array(
                    'product_id' => $item->id,
                    'order_id' => $order_id,
                    'product_name' => $item->name,
                    'product_price' => $item->price,
                    'product_qty' => $item->qty,
                    'product_image_intro' => $item->options->product_image_intro,
                    'description' => $item->options->description,
                )
            );
        }
        Cart::destroy();
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
        $options['product_image_intro']= $product->product_image_intro;
        $options['description']= $product->description;
        Cart::add($id, $product->product_name,$post['quality'],$price,$options);
        return redirect(route('gio-hang'));
    }

    public function removeItemCart($id , Request $request){
        Cart::remove($id);
        return redirect(route('gio-hang'));
    }

    public function postUpdateTocart($id, Request $request){
        Cart::update($id,$request->qty);
        return redirect(route('gio-hang'));
    }
}
