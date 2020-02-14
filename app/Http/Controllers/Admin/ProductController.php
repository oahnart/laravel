<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use App\Galleries;
use DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function getListProduct(){
//        $products=Product::orderBy('id','DESC')->get();
        $products = Product::all();
        return view('admin.product.list_product',compact('products'));
    }
    function getAddProduct(){
        $list_sub_category=DB::table('categories')->where('parent','!=',null)->get();
        return view('admin.product.add_new_item',compact('list_sub_category'));
    }
    function postAddProduct(Request $request){
        $post = $request->all();

        //validate bắt buộc phải nhập vào input
        $request->validate([
            'product_name' =>'required|unique:products|max:255',
            'category_id' => 'required',
            'price' => 'required',
            'ordering' => 'required',
            //'product_image_intro' => 'required',
            'description' => 'required',
            'full_description' => 'required'
        ]);

        $productModel = new Product();
        $productModel ->product_name = $post['product_name'];
        $productModel->category_id=$post['category_id'];
        $productModel->publish=$post['publish'];
        $productModel->price=$post['price'];
        $productModel->sale_price=$post['sale_price'];
        $productModel->ordering=$post['ordering'];
        $productModel->description=$post['description'];
        $productModel->full_description=$post['full_description'];
        $productModel->created_at=date('Y-m-d H:i:s');
        $productModel->updated_at=date('Y-m-d H:i:s');
        if($productModel->save()){
            if ($request->hasFile('product_image_intro')) {
                $file = $request->product_image_intro;
//                nếu cần validate file upload lên thì sử dụng mấy biến này
                $file_name=$file->getClientOriginalName();
                $extension_file=$file->getClientOriginalExtension();
                $temp_file=$file->getRealPath();
                $file_size=$file->getSize();
                $file_type=$file->getMimeType();
                $random=random_int(10000,50000);
                $file->move('upload/products', $random.$file->getClientOriginalName());
                $productModel->product_image_intro="upload/products/".$random.$file->getClientOriginalName();
                $productModel->save();
            }
        }
        return redirect(route('danh-sach-san-pham'));
    }

    function getEditProduct($id){
        $product=Product::find($id);
        $parent_categories=Category::query()->where('parent','=',null)->get();
        $subcategories=Category::query()->where('parent','!=',null)->get();
        return view('admin.product.edit_item',compact('product','parent_categories','subcategories'));
    }
    function postEditProduct($id, Request $request){
        $post = $request->all();

        //validate bắt buộc phải nhập vào input
        $request->validate([
            'product_name' =>'required|unique:products,id|max:255',
            'category_id' => 'required',
            'price' => 'required',
            'ordering' => 'required',
            'product_image_intro' => 'required',
            'description' => 'required',
            'full_description' => 'required'
        ]);

        $productModel = Product::find($id);
        $productModel ->product_name = $post['product_name'];
        $productModel->category_id=$post['category_id'];
        $productModel->publish=$post['publish'];
        $productModel->price=$post['price'];
        $productModel->sale_price=$post['sale_price'];
        $productModel->ordering=$post['ordering'];
        $productModel->description=$post['description'];
        $productModel->full_description=$post['full_description'];
        $productModel->created_at=date('Y-m-d H:i:s');
        $productModel->updated_at=date('Y-m-d H:i:s');
        if($productModel->save()){
            if ($request->hasFile('product_image_intro')) {
                $file = $request->product_image_intro;
//                nếu cần validate file upload lên thì sử dụng mấy biến này
                $file_name=$file->getClientOriginalName();
                $extension_file=$file->getClientOriginalExtension();
                $temp_file=$file->getRealPath();
                $file_size=$file->getSize();
                $file_type=$file->getMimeType();
                $random=random_int(10000,50000);
                $file->move('upload/products', $random.$file->getClientOriginalName());
                $productModel->product_image_intro="upload/products/".$random.$file->getClientOriginalName();
                $productModel->save();
            }
        }
        return redirect(route('danh-sach-san-pham'));
    }

    function getDeleteProduct($id, Request $request){
        $product = Product::find($id);
        $product->delete();
        return redirect(route('danh-sach-san-pham'));

    }

    function getEditListImageProduct($id,Request $request){
        $product=Product::find($id);
        $list_image=Galleries::query()->where('product_id','=',$id)->get();
        return view('admin.product.list_image_product',compact('product','list_image'));
    }
    function getAddImageProduct($product_id,Request $request){
        $product=Product::find($product_id);
        return view('admin.product.edit_image_product',compact('product'));
    }
    function postAddImageProduct($product_id,Request $request){
        $post=$request->all();
        $request->validate([
            'product_image' => 'required',
        ]);
        $productModel=Product::find($product_id);
        $modelGalleries=new Galleries();
        if ($request->hasFile('product_image')) {
            $file = $request->product_image;
            // nếu cần validate file upload lên thì sử dụng mấy biến này
            $file_name=$file->getClientOriginalName();
            $extension_file=$file->getClientOriginalExtension();
            $temp_file=$file->getRealPath();
            $file_size=$file->getSize();
            $file_type=$file->getMimeType();
            $random=random_int(10000,50000);
            $file->move('upload/products', $random.$file->getClientOriginalName());
            $modelGalleries->product_id=$product_id;
            $modelGalleries->image="upload/products/".$random.$file->getClientOriginalName();
            $modelGalleries->save();
        }
        return redirect(route('list-image',$product_id));
    }

}
