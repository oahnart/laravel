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

Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>'auth'],function (){
    //'middleware'=>'auth' bắt đăng nhập - nếu bỏ thì ko cần check login


    Route::group(['prefix'=>'san-pham'],function(){
        //root/admin/san-pham/danh-sach
        Route::get("danh-sach", ['as' => 'danh-sach-san-pham', 'uses' => 'ProductController@getListProduct']);
        //Route::get("danh-sach","ProductController@getListProduct"); *Không sử dụng as , uses
        //root/admin/san-pham/them
        //chỉ sử dụng as khi cần nhiều cái hoặc sửa
        // đường dẫn root/admin/san-pham/them123 ít thì href="{{url('admin/san-pham/them')}} file app.blade.php
        Route::get("them", ['as' => 'themsanpham', 'uses' => 'ProductController@getAddProduct']);
    });

    //root/admin/danh-muc
    Route::group(['prefix'=>'danh-muc'],function(){
        //root/admin/danh-muc/list-danh-muc
        Route::get("list-danh-muc",['as'=>'list-danh-muc' , 'uses'=> 'CategoryController@listCategory']);
    });
});
