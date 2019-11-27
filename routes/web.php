<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get("product-detail/{id}",['as'=>'product-detail','uses'=>"ProductController@getDetailProduct"]);
Route::post("add-to-cart/{id}",['as'=>'add-to-cart','uses'=>"CartController@postAddTocart"]);
Route::get("gio-hang/",['as'=>'gio-hang','uses'=>"CartController@index"]);
Route::get("thanh-toan/",['as'=>'thanh-toan','uses'=>"CartController@payNow"]);
Route::post("thanh-toan/",['as'=>'thanh-toan','uses'=>"CartController@postPayNow"]);



Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>'auth'],function (){
    //'middleware'=>'auth' bắt đăng nhập - nếu bỏ thì ko cần check login

    //root/admin/san-pham/
    Route::group(['prefix'=>'san-pham'],function(){
        //root/admin/san-pham/danh-sach
        Route::get("danh-sach", ['as' => 'danh-sach-san-pham', 'uses' => 'ProductController@getListProduct']);
        //Route::get("danh-sach","ProductController@getListProduct"); *Không sử dụng as , uses

        //root/admin/san-pham/them
        //chỉ sử dụng as khi cần nhiều cái hoặc sửa
        // đường dẫn root/admin/san-pham/them123 ít thì href="{{url('admin/san-pham/them')}} file app.blade.php
        Route::get("them", ['as' => 'them-san-pham', 'uses' => 'ProductController@getAddProduct']);
        //root/admin/san-pham/them
        Route::post("them", ['as'=>'post-add-product','uses'=> 'ProductController@postAddProduct']);

        //root/admin/san-pham/sua-san-pham/3
        Route::get('sua-san-pham/{id}',['as'=>'sua-san-pham' , 'uses'=>'ProductController@getEditProduct']);
        //root/admin/san-pham/sua-san-pham/3
        Route::post('sua-san-pham/{id}',['as'=>'post-sua-san-pham' , 'uses'=>'ProductController@postEditProduct']);

        //root/admin/san-pham/xoa-san-pham
        Route::get('xoa-san-pham/{id}',['as'=>'xoa-san-pham' , 'uses'=>'ProductController@getDeleteProduct']);
    });



    //root/admin/danh-muc
    Route::group(['prefix' => 'danh-muc'], function () {
        //root/admin/danh-muc/list-danh-muc
        Route::get("list-danh-muc",['as'=>'list-danh-muc','uses'=>"CategoryController@listCategory"]);
        //root/admin/danh-muc/them-danh-muc

        Route::get("them", ['as' => 'them-danh-muc', 'uses' => 'CategoryController@getAddCategory']);
        //root/admin/danh-muc/post-them-danh-muc
        Route::post('post-them-category',['as'=>"post-them-category",'uses'=>'CategoryController@postAddCategory']);
        //root/admin/danh-muc/them-danh-muc

        Route::get("sua-danh-muc/{id}", ['as' => 'sua-danh-muc', 'uses' => 'CategoryController@getEditCategory']);
        //root/admin/danh-muc/them-danh-muc
        Route::get("xoa-danh-muc/{id}", ['as' => 'xoa-danh-muc', 'uses' => 'CategoryController@getDeleteCategory']);
        //root/admin/danh-muc/post-sua-danh-muc
        Route::post('post-sua-danh-muc/{id}',['as'=>"post-sua-danh-muc",'uses'=>'CategoryController@postEditCategory']);
    });
});
