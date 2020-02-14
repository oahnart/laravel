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
        //take(3) lấy tối đa 3 bài viết
        $hoc_tap=DB::table('products')->take(3)->Where('category_id','=',18)->get();
        $do_hoa=DB::table('products')->Where('category_id','=',20)->get();
        $gaming=DB::table('products')->Where('category_id','=',23)->get();
        $cao_cap=DB::table('products')->Where('category_id','=',24)->get();
        return view('home',compact('hoc_tap','do_hoa','gaming','cao_cap'));
    }
    public function laptop(){
//        ->orderBy('created_at') lấy ra tất cả theo created_at
        $new_products=DB::table('products')->WhereIn('category_id',[18,19,20,23,24])->get();
        return view('laptop',compact('new_products'));
    }

    public function sapxep($type)
    {
        $table = DB::table('products')
            ->WhereIn('category_id',[18,19,20,23,24]);

        switch ($type) {
            case "new":
                $table->orderBy('created_at', 'desc');
                break;
            case "low-price":
                $table->orderBy('price');
                break;
            case "height-price":
                $table->orderBy('price', 'desc');
                break;
        }
        $new_products = $table->get();
        return view('laptop', compact('new_products'));
    }

    public function linhkien(){
        $linh_kien=DB::table('categories')->Where('parent','=',25)->get();
        $list_id=[26,27,28,29,30,31,32,33];
        $list_product=DB::table('products')->WhereIn('category_id',$list_id)->get();
//        $keo_tan_nhiet=DB::table('products')->Where('category_id','=',26)->get();
//        $o_cung=DB::table('products')->Where('category_id','=',27)->get();
//        $ram=DB::table('products')->Where('category_id','=',28)->get();
//        $chuot=DB::table('products')->Where('category_id','=',29)->get();
//        $rampc=DB::table('products')->Where('category_id','=',30)->get();
//        $o_cung_di_dong =DB::table('products')->Where('category_id','=',31)->get();
//        $cong_chuyen_doi =DB::table('products')->Where('category_id','=',32)->get();
//        $ban_di_chuot =DB::table('products')->Where('category_id','=',33)->get();
        return view('linhkien',
            compact('linh_kien','list_product'));
        //'keo_tan_nhiet','o_cung','ram','chuot','rampc','o_cung_di_dong'
        //                ,'cong_chuyen_doi','ban_di_chuot',
    }

    public function timkiem(Request $request){
        $result = $request->result;
        $data['keyword'] = $result;
        $result = str_replace(' ','%',$result);
        $data['items'] = Product::Where('product_name','like','%'.$result.'%')->get();
        return view('timkiem',$data);
    }
    
    public function tintuc(){
//        ->orderBy('created_at') lấy ra tất cả theo created_at
        $tin_moi=DB::table('products')->take(1)->Where('category_id','=',18)->get();
        $list_tin_id=[26,27,28,29,30,31,32,33];
        $tin_moi_1=DB::table('products')->take(4)->WhereIn('category_id',[18,19,20,23,24])->get();
        $tin_moi_2=DB::table('products')->take(5)->WhereIn('category_id',[18,19,20,23,24])->get();
        $list_tin_1=DB::table('products')->take(8)->WhereIn('category_id',$list_tin_id)->get();
        $list_tin_2=DB::table('products')->take(15)->WhereIn('category_id',$list_tin_id)->get();
        return view('layouts-2/tintuc',compact('tin_moi','tin_moi_1','tin_moi_2','list_tin_1','list_tin_2'));
    }
    
    public function baohanh(){
        $list_tin_id=[18,19,20,23,24];
        $list_tin_2=DB::table('products')->take(7)->WhereIn('category_id',$list_tin_id)->get();
        return view('layouts-2/baohanh',compact('list_tin_2'));
    }
    
    public function khuyenmai(){
    $list_tin_id=[18,19,20,23,24,26,27,28,29,30,31,32,33];
    $list_tin_1=DB::table('products')->take(8)->WhereIn('category_id',$list_tin_id)->get();
    $list_tin_2=DB::table('products')->take(16)->WhereIn('category_id',$list_tin_id)->get();
    return view('layouts-2/khuyenmai',compact('list_tin_1','list_tin_2'));
    }
    
    public function diachi(){
    $list_tin_id=[18,19,20,23,24,26,27,28,29,30,31,32,33];
    $list_tin_2=DB::table('products')->take(7)->WhereIn('category_id',$list_tin_id)->get();
    return view('layouts-2/diachi',compact('list_tin_2'));
    }
    
    public function tuvan(){
    $list_tin_id=[27,20,30,24,31,29,33];
    $list_tin_1=DB::table('products')->take(8)->WhereIn('category_id',$list_tin_id)->get();
    $list_tin_2=DB::table('products')->take(16)->WhereIn('category_id',$list_tin_id)->get();
    return view('layouts-2/tuvan',compact('list_tin_1','list_tin_2'));
    }

    public function thuthuat(){
    $list_tin_id=[23,24,26,27,28,29,30,31,32,33];
    $list_tin_1=DB::table('products')->take(5)->WhereIn('category_id',$list_tin_id)->get();
    $list_tin_2=DB::table('products')->take(10)->WhereIn('category_id',$list_tin_id)->get();
    return view('layouts-2/thuthuat',compact('list_tin_1','list_tin_2'));
    }

    public function thongtin(){
    $list_tin_id=[18,19,20,23,24,26,27,28,29,30,31,32,33];
    $list_tin_1=DB::table('products')->take(4)->WhereIn('category_id',$list_tin_id)->get();
    $list_tin_3=DB::table('products')->take(4)->WhereIn('category_id',$list_tin_id)->get();
    $list_tin_2=DB::table('products')->take(16)->WhereIn('category_id',$list_tin_id)->get();
    return view('layouts-2/thongtin',compact('list_tin_1','list_tin_2','list_tin_3'));
    }
}
