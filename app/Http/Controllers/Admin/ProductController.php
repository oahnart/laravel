<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function getListProduct(){
        return view('admin.product.list_product');
//        $products=Product::orderBy('id','DESC')->get();
//        //todo để đây lát nữa làm
//        echo "<pre>";
//        print_r($products, false);
//        echo "</pre>";
//        die;
    }
    function getAddProduct(){
        return view('admin.product.add_new_item');
    }
}
