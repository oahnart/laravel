<?php

namespace App\Http\Controllers\Admin;

use App\Orders;
use App\OrderProduct;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    //
    public function getAllOrder(Request $request){
        $orders = Orders::all();
        return view('admin.order.list_order',compact('orders'));
    }

    public function getOrderDetail($id, Request $request){
        $order = Orders::find($id);
        $list_product = Orders::getAllProductByOrderId($id);
        $list_customer = Orders::getAllCustomerByOrderId($id);
        return view('admin.order.detail',compact('order','list_product','list_customer'));
    }

    public function updateOrder($id, Request $request){
        $post=$request->all();
        $status=$post['status'];
        $order=Orders::find($id);
        $order->status=$status;
        $order->save();
        Session::flash('message', 'Đã cập nhật đơn hàng thành công');
        $list_product=Orders::getAllProductByOrderId($id);
        $list_customer = Orders::getAllCustomerByOrderId($id);
        return view('admin.order.detail',compact('order','list_product','list_customer'));
    }

    public function deleteOrder($id, Request $request){
        $order = Orders::find($id);
        $order->delete();
        return redirect(route('list-don-hang'));
    }

    public function deleteOrderProduct($id, Request $request){
        $order_product = OrderProduct::find($id);
        $order_product->delete();
        return redirect(route('list-don-hang'));
    }

    public function updateOrderProduct($id, Request $request){
        $order_product = OrderProduct::update($id,$request->product_qty);
        return redirect(route('list-don-hang'));
    }
}
