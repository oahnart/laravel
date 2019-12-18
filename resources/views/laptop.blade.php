@extends('layouts.app');

@section('content')
    <div class="view-home">
        <div class="container">
            @if (Session::has('message'))
                <div class="alert alert-info">{{ Session::get('message') }}</div>
            @endif
                <div class="discount-products">
                    <div class="wrapper-title-discount-product"><h3 class="title-discount-product">ĐỒ HỌA KỸ THUẬT</h3></div>

                    <div class="row">
                        <div class="col-md-3">
                            <div><img style="width:100%;" src="{{asset('assets/frontend/images/pro_poster_3903.jpg')}}"></div>
                        </div>
                        @foreach($new_products as $product)
                            <div class="col-md-3">
                                <div>
                                    <div class="wrapper-image" style="width: 300px; height: 240px;">
                                        <img style="width: 250px; height: 240px;" class="product-image-intro" src="{{url('/')}}/{{$product->product_image_intro}}">
                                    </div>
                                    <h4 class="product-name">{{$product->product_name}}</h4>
                                    <h5>{{$product->description}}</h5>
                                    <div class="prices">
                                        <span class="sale-price">{{$product->sale_price}}</span>
                                        <span class="price">{{$product->price}}</span>
                                        <span class="currency">đ</span>
                                    </div>
                                    <a href="{{route('product-detail',$product->id)}}" class="btn btn-primary btn-block"><i class="fas fa-search-plus"></i> Chi tiết</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
        </div>
    </div>
@endsection