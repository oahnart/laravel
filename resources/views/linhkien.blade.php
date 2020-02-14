@extends('layouts.app')

@section('content')

    <style type="text/css">
        .title-1{ color: #fff;transition: 0.5s ease-in-out;text-decoration: none;}
        .title-1:hover{color:black;text-decoration: none;}
        .product-image-intro-1{width: 240px; height: 220px;transition: 0.4s ease-in-out;transform-origin: center;display: block;position: absolute;}
        .product-image-intro-1:hover{padding-left: 16px; padding-right: 16px; padding-top: 16px; padding-bottom: 16px;}
        .product-name-1{color: #ff9300; text-decoration:none;transition: 0.5s ease-in-out;}
        .product-name-1:hover{color: red; text-decoration:none;}
        .prices-1{width: 170px; background-color:#ff9300;line-height: 33px;padding-left:20px; padding-right: 20px;display: inline-block;font-weight: bold;border-radius: 100px;color: #fff;font-size: 20px;margin-top:10px;}
        .show-1{ position: relative;width: 100%;}
        .overlay {position: absolute;bottom: 100%;left: -250px;right: 0;background-color: #f5f5f5;width:260px;height:0;transition: .5s ease;overflow: hidden;}
        .show-1:hover .overlay {bottom: 0;height: 100%; box-shadow: 0 0 10px 0 #ccc;  opacity: 10;z-index: 1;}
        .phu-kien{text-decoration: none; color: blue;}
        .phu-kien:hover{color: red; text-decoration: none;}
        .xem-them{text-decoration: none; color: blue; margin-right: 30px;}
        .xem-them:hover{color: #ff9300; text-decoration: none;}
    </style>
    <div class="container">
        <div style="margin-top: -5px; margin-bottom: -15px;">
            <ol class="breadcrumb">
                <li><a style="text-decoration: none;color: #000;" href="{{route('home')}}">Trang Chủ</a></li>
                <li><a style="text-decoration: none;color: #000;" href="{{route('laptop')}}">Linh Kiện</a></li>
            </ol>
        </div>

        <div class="col-md-8">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel"  style="width: 755px; height: 310px;">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a href="#"><img class="d-block w-100" src="{{ asset('/assets/frontend/slide/slide-linh-kien-1.png') }}" alt="1 slide" style="width: 750px; height: 310px;"></a>
                    </div>
                    <div class="carousel-item">
                        <a href="#"><img class="d-block w-100" src="{{ asset('/assets/frontend/slide/slide-linh-kien-2.png') }}" alt="1 slide" style="width: 750px; height: 310px;"></a>
                    </div>
                    <div class="carousel-item">
                        <a href="#"><img class="d-block w-100" src="{{ asset('/assets/frontend/slide/slide-linh-kien-3.jpg') }}" alt="1 slide" style="width: 750px; height: 310px;"></a>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="col-md-4">
            <div>
                <img src="{{ asset('/assets/frontend/slide/slide-linh-kien-4.png') }}" alt="">
            </div>
            <div style="margin-top: 1%;">
                <img src="{{ asset('/assets/frontend/slide/slide-linh-kien-5.png') }}" alt="">
            </div>
        </div>

    </div>
    <div class="view-home">
        <div class="container">
            @if (Session::has('message'))
                <div class="alert alert-info">{{ Session::get('message') }}</div>
            @endif

            @foreach($linh_kien as $category)
                <div class="discount-products">
                    <div>
                        <div style="margin-bottom: 2%;">
                            <div style="background-image: url('{{ asset('/assets/frontend/images/banner-logo-1.png') }}'); background-repeat: no-repeat; height:40px; width: 350px;">
                                <h3 style="line-height: 1.5; margin-left: 5%;">
                                    <a href="#" class="title-1">{{$category->category_name}}</a>
                                </h3>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div>
                            <img src="{{url('/')}}/{{$category->image_category}}"
                                 style="width: 280px; height: 280px;">
                        </div>
                        @foreach($list_product as $product)
                            @if($product->category_id == $category->id)
                            <div class="col-md-3">
                                <div class="show-1">
                                    <div class="product-item" style="width: 260px; height: 420px;">
                                        <div class="product-item-content">
                                            <div class="wrapper-image">
                                                <a href="{{route('product-detail',$product->id)}}"><img
                                                            class="product-image-intro-1"
                                                            src="{{url('/')}}/{{$product->product_image_intro}}"></a>
                                            </div>
                                            <div style="margin-top: 222px;text-align: center;">
                                                <h4 style="font-weight: bold;" class="product-name"><a
                                                            class="product-name-1"
                                                            href="{{route('product-detail',$product->id)}}">{{$product->product_name}}</a>
                                                </h4>
                                                <h5>{{$product->description}}</h5>
                                                <div class="prices-1">
                                                    <span>{{number_format($product->price)}}<span>đ</span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            @endforeach

        </div>
    </div>

    <div style="margin-left:15px; margin-top:2%;">
    <div class="container" style="margin-top:1%;background-color: #fff;  width: 1125px; height: 150px;">
        <h4>PHẦN MỀM PHỤ KIỆN</h4>
        <div>
            <div class="col-md-1">
                <div><a href="#" class="phu-kien">
                        <img style="border-radius: 50px; border:1px solid #000;" src="{{ asset('/assets/frontend/logo/phu-kien-1.png') }}"width="60" height="60">
                        <h5 class="text-center">Keo tản nhiệt</h5></a>
                </div>
            </div>
            <div class="col-md-1">
                <div><a href="#" class="phu-kien">
                        <img style="border-radius: 50px; border:1px solid #000;" src="{{ asset('/assets/frontend/logo/phu-kien-2.jpg') }}"width="60" height="60">
                        <h5 class="text-center">Ổ Cứng SSD</h5></a>
                </div>
            </div>
            <div class="col-md-1">
                <div><a href="#" class="phu-kien">
                        <img style="border-radius: 50px; border:1px solid #000;" src="{{ asset('/assets/frontend/logo/phu-kien-3.jpg') }}"width="60" height="60">
                        <h5 class="text-center">Ram Laptop</h5></a>
                </div>
            </div>
            <div class="col-md-1">
                <div><a href="#" class="phu-kien">
                        <img style="border-radius: 50px; border:1px solid #000;" src="{{ asset('/assets/frontend/logo/phu-kien-4.jpg') }}"width="60" height="60">
                        <h5 class="text-center">Chuột máy tính</h5></a>
                </div>
            </div>
            <div class="col-md-1">
                <div><a href="#" class="phu-kien">
                        <img style="border-radius: 50px; border:1px solid #000;" src="{{ asset('/assets/frontend/logo/phu-kien-5.jpg') }}"width="60" height="60">
                        <h5 class="text-center">RAM PC</h5></a>
                </div>
            </div>
            <div class="col-md-1">
                <div><a href="#" class="phu-kien">
                        <img style="border-radius: 50px; border:1px solid #000;" src="{{ asset('/assets/frontend/logo/phu-kien-6.png') }}"width="60" height="60">
                        <h5 class="text-center">Ổ cứng di động</h5></a>
                </div>
            </div>
            <div class="col-md-1">
                <div><a href="#" class="phu-kien">
                        <img style="border-radius: 50px; border:1px solid #000;" src="{{ asset('/assets/frontend/logo/phu-kien-7.jpg') }}"width="60" height="60">
                        <h5 class="text-center">Cổng chuyển đổi</h5></a>
                </div>
            </div>
            <div class="col-md-1">
                <div><a href="#" class="phu-kien">
                        <img style="border-radius: 50px; border:1px solid #000;" src="{{ asset('/assets/frontend/logo/phu-kien-8.jpg') }}"width="60" height="60">
                        <h5 class="text-center">Bàn di chuột</h5></a>
                </div>
            </div>
            <div class="col-md-1">
                <div><a href="#" class="phu-kien">
                        <img style="border-radius: 50px; border:1px solid #000;" src="{{ asset('/assets/frontend/logo/phu-kien-9.png') }}"width="60" height="60">
                        <h5 class="text-center">USB Flash</h5></a>
                </div>
            </div>
            <div class="col-md-1">
                <div><a href="#" class="phu-kien">
                        <img style="border-radius: 50px; border:1px solid #000;" src="{{ asset('/assets/frontend/logo/phu-kien-10.jpg') }}"width="60" height="60">
                        <h5 class="text-center">Pin Laptop</h5></a>
                </div>
            </div>
            <div class="col-md-1">
                <div><a href="#" class="phu-kien">
                        <img style="border-radius: 50px; border:1px solid #000;" src="{{ asset('/assets/frontend/logo/phu-kien-11.jpg') }}"width="60" height="60">
                        <h5 class="text-center">Bàn Phím</h5></a>
                </div>
            </div>
            <div class="col-md-1">
                <div><a href="#" class="phu-kien">
                        <img style="border-radius: 50px; border:1px solid #000;" src="{{ asset('/assets/frontend/logo/phu-kien-12.jpg') }}"width="60" height="60">
                        <h5 class="text-center">Balo - Túi xách</h5></a>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="container" style="margin-top:1.5%;">
        <div class="col-md-4">
            <img src="{{ asset('/assets/frontend/images/footer-1.jpg') }}" alt="1 slide" width="365">
        </div>
        <div class="col-md-4">
            <img src="{{ asset('/assets/frontend/images/footer-2.jpg') }}" alt="1 slide" width="365" >
        </div>
        <div class="col-md-4">
            <img src="{{ asset('/assets/frontend/images/footer-3.png') }}" alt="1 slide" width="365" >
        </div>
    </div>
@endsection