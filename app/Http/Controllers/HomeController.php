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
        $hoc_tap=DB::table('products')->Where('category_id','=',18)->get();
        $do_hoa=DB::table('products')->Where('category_id','=',20)->get();
        $gaming=DB::table('products')->Where('category_id','=',23)->get();
        $cao_cap=DB::table('products')->Where('category_id','=',24)->get();
        return view('home',compact('hoc_tap','do_hoa','gaming','cao_cap'));
    }
    public  function laptop(){
        $new_products=DB::table('products')->orderBy('created_at')->get();
        return view('laptop',compact('new_products'));
    }
    public function linhkien(){
        $linh_kien=DB::table('products')->Where('category_id','=',26)->get();
        return view('linhkien',compact('linh_kien'));
    }
}
