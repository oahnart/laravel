<?php

namespace App\Http\Controllers;
use App\Product;
use DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $discount_products=DB::table('products')->orderBy('created_at')->get();
        $new_products=DB::table('products')->orderBy('sale_price')->get();
        return view('home',compact('discount_products','new_products'));
    }
}
