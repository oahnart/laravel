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
        .overlay {position: absolute;bottom: 100%;left: -250px;right: 0;background-color: #fff;width:260px;height:0;transition: .5s ease;overflow: hidden;}
        .show-1:hover .overlay {bottom: 0;height: 100%; box-shadow: 0 0 10px 0 #ccc;  opacity: 10;z-index: 1;}
        .image-logo{width: 110px; height: 40px;transition: 0.5s ease-in-out;}
        .image-logo:hover {padding-left: 6px; padding-right: 6px; padding-top: 6px; padding-bottom: 6px;}
        .text-1{text-decoration:none;}
        .text-1:hover{text-decoration:none;color: red;}

        .prod-list ul{list-style: none;margin-left:-60px;}
        .prod-list ul li{float: left; margin-left:20px;}
        .prod-list ul li a{text-decoration: none;}
        .prod-list ul li ul li a{color: #000;}
        .prod-list ul li ul{visibility: hidden; position: absolute;padding-top:25px;margin-left:1px;}
        .prod-list ul li ul li{float: none;margin-top: -25px;}
        .prod-list ul li:hover ul{transition: 0.2s ease-in-out;background-color: #fff; visibility: visible; width: 200px; height: auto;z-index: 1; box-shadow: 0 0 10px 0 #ccc;}
        .prod-list ul li ul li a{color: black;}
        .prod-list ul li ul li a:hover{color:blue;}
        .phu-kien{text-decoration: none; color: blue;}
        .phu-kien:hover{color: red; text-decoration: none;}

    </style>

    <div class="view-home" style="margin-left:-30px;" >
        <div class="container">
            @if (Session::has('message'))
                <div class="alert alert-info">{{ Session::get('message') }}</div>
            @endif

            <div class="container" style="margin-top: -5px; margin-bottom: -15px;">
                <ol class="breadcrumb">
                    <li><a style="text-decoration: none;color: #000;" href="{{route('home')}}">Trang Chủ</a></li>
                    <li><a style="text-decoration: none;color: #000;" href="{{route('laptop')}}">Laptop</a></li>
                </ol>
            </div>

            <div class="container">
                <div class="col-md-8">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <a href="#"><img class="d-block w-100" src="{{ asset('/assets/frontend/slide/slide-laptop-1.jpg') }}" alt="1 slide" style="width: 750px; height: 360px;"></a>
                            </div>
                            <div class="carousel-item">
                                <a href="#"><img class="d-block w-100" src="{{ asset('/assets/frontend/slide/slide-laptop-2.jpg') }}" alt="1 slide" style="width: 750px; height: 360px;"></a>
                            </div>
                            <div class="carousel-item">
                                <a href="#"><img class="d-block w-100" src="{{ asset('/assets/frontend/slide/slide-laptop-3.jpg') }}" alt="1 slide" style="width: 750px; height: 360px;"></a>
                            </div>
                            <div class="carousel-item">
                                <a href="#"><img class="d-block w-100" src="{{ asset('/assets/frontend/slide/slide-laptop-4.jpg') }}" alt="1 slide" style="width: 750px; height: 360px;"></a>
                            </div>
                            <div class="carousel-item">
                                <a href="#"><img class="d-block w-100" src="{{ asset('/assets/frontend/slide/slide-laptop-5.png') }}" alt="1 slide" style="width: 750px; height: 360px;"></a>
                            </div>
                            <div class="carousel-item">
                                <a href="#"><img class="d-block w-100" src="{{ asset('/assets/frontend/slide/slide-laptop-6.png') }}" alt="1 slide" style="width: 750px; height: 360px;"></a>
                            </div>
                            <div class="carousel-item">
                                <a href="#"><img class="d-block w-100" src="{{ asset('/assets/frontend/slide/slide-laptop-7.png') }}" alt="1 slide" style="width: 750px; height: 360px;"></a>
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

                <div class="col-md-4" style="margin-left: -20px;">
                    <div>
                        <img src="{{ asset('/assets/frontend/categories/banner-laptop-1.jpg') }}" width="385" alt="">
                    </div>
                    <div style="margin-top: 1%;">
                        <img src="{{ asset('/assets/frontend/categories/banner-laptop-2.jpg') }}" width="385" alt="">
                    </div>
                </div>
            </div>

            <div class="container" style="margin-top:1%;background-color: #fff;margin-left:30px;  width: 1130px;line-height: 50px;">
                <div class="float-left">
                    <div style="float: left;margin-left:-10px;">
                        <a href="#"><img class="image-logo" src="{{ asset('/assets/frontend/logo/logo-4.png') }}" alt="First slide">
                        </a>
                    </div>
                    <div style="float: left;margin-left:5px;">
                        <a href="#"><img class="image-logo" src="{{ asset('/assets/frontend/logo/logo-3.png') }}" alt="First slide">
                        </a>
                    </div>
                    <div style="float: left;margin-left:5px;">
                        <a href="#"><img class="image-logo" src="{{ asset('/assets/frontend/logo/logo-5.png') }}" alt="First slide">
                        </a>
                    </div>
                    <div style="float: left;margin-left:5px;">
                        <a href="#"><img class="image-logo" src="{{ asset('/assets/frontend/logo/logo-7.png') }}" alt="First slide">
                        </a>
                    </div>
                    <div style="float:left;margin-left:0px;">
                        <a href="#"><img class="image-logo" src="{{ asset('/assets/frontend/logo/logo-1.png') }}" alt="First slide">
                        </a>
                    </div>
                </div>

                <div class="float-right">
                    <ul class="list-inline">
                        <li><a class="text-1" href="#">Lap Top Gaming</a></li>
                        <li><a class="text-1" href="#">Học tập - văn phòng</a></li>
                        <li><a class="text-1" href="#">Cao cấp - sang trọng</a></li>
                        <li><a class="text-1" href="#">Đồ họa kỹ thuật</a></li>
                    </ul>
                </div>
            </div>

            <div class="container" style="background-color: #fff;margin-left:30px;  width: 1130px;line-height: 50px; border-top:2px solid #f5f5f5;">
                <div class="prod-list">
                    <ul>
                        <li><a href="#">Thương hiệu <i class="fas fa-sort-down"></i></a>
                            <ul class="list-unstyled">
                                <li><a href="#">Acer (75)</a></li>
                                <li><a href="#">Apple (16)</a></li>
                                <li><a href="#">Asus (175)</a></li>
                                <li><a href="#">Dell (151)</a></li>
                                <li><a href="#">HP (102)</a></li>
                                <li><a href="#">LG (5)</a></li>
                                <li><a href="#">Microsoft (1)</a></li>
                                <li><a href="#">MSI (48)</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Giá <i class="fas fa-sort-down"></i></a>
                            <ul class="list-unstyled">
                                <li><a href="#">Acer (75)</a></li>
                                <li><a href="#">Apple (16)</a></li>
                                <li><a href="#">Asus (175)</a></li>
                                <li><a href="#">Dell (151)</a></li>
                                <li><a href="#">HP (102)</a></li>
                                <li><a href="#">LG (5)</a></li>
                                <li><a href="#">Microsoft (1)</a></li>
                                <li><a href="#">MSI (48)</a></li>
                            </ul>
                        </li>
                        <li><a href="#">LAPTOP MỚI <i class="fas fa-sort-down"></i></a>
                            <ul class="list-unstyled">
                                <li><a href="#">Acer (75)</a></li>
                                <li><a href="#">Apple (16)</a></li>
                                <li><a href="#">Asus (175)</a></li>
                                <li><a href="#">Dell (151)</a></li>
                                <li><a href="#">HP (102)</a></li>
                                <li><a href="#">LG (5)</a></li>
                                <li><a href="#">Microsoft (1)</a></li>
                                <li><a href="#">MSI (48)</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Dòng máy <i class="fas fa-sort-down"></i></a>
                            <ul class="list-unstyled">
                                <li><a href="#">Acer (75)</a></li>
                                <li><a href="#">Apple (16)</a></li>
                                <li><a href="#">Asus (175)</a></li>
                                <li><a href="#">Dell (151)</a></li>
                                <li><a href="#">HP (102)</a></li>
                                <li><a href="#">LG (5)</a></li>
                                <li><a href="#">Microsoft (1)</a></li>
                                <li><a href="#">MSI (48)</a></li>
                            </ul>
                        </li>
                        <li><a href="#">CPU <i class="fas fa-sort-down"></i></a>
                            <ul class="list-unstyled">
                                <li><a href="#">Acer (75)</a></li>
                                <li><a href="#">Apple (16)</a></li>
                                <li><a href="#">Asus (175)</a></li>
                                <li><a href="#">Dell (151)</a></li>
                                <li><a href="#">HP (102)</a></li>
                                <li><a href="#">LG (5)</a></li>
                                <li><a href="#">Microsoft (1)</a></li>
                                <li><a href="#">MSI (48)</a></li>
                            </ul>
                        </li>
                        <li><a href="#">RAM <i class="fas fa-sort-down"></i></a>
                            <ul class="list-unstyled">
                                <li><a href="#">Acer (75)</a></li>
                                <li><a href="#">Apple (16)</a></li>
                                <li><a href="#">Asus (175)</a></li>
                                <li><a href="#">Dell (151)</a></li>
                                <li><a href="#">HP (102)</a></li>
                                <li><a href="#">LG (5)</a></li>
                                <li><a href="#">Microsoft (1)</a></li>
                                <li><a href="#">MSI (48)</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Card Đồ Họa <i class="fas fa-sort-down"></i></a>
                            <ul class="list-unstyled">
                                <li><a href="#">Acer (75)</a></li>
                                <li><a href="#">Apple (16)</a></li>
                                <li><a href="#">Asus (175)</a></li>
                                <li><a href="#">Dell (151)</a></li>
                                <li><a href="#">HP (102)</a></li>
                                <li><a href="#">LG (5)</a></li>
                                <li><a href="#">Microsoft (1)</a></li>
                                <li><a href="#">MSI (48)</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Dung lượng ổ cứng <i class="fas fa-sort-down"></i></a>
                            <ul class="list-unstyled">
                                <li><a href="#">Acer (75)</a></li>
                                <li><a href="#">Apple (16)</a></li>
                                <li><a href="#">Asus (175)</a></li>
                                <li><a href="#">Dell (151)</a></li>
                                <li><a href="#">HP (102)</a></li>
                                <li><a href="#">LG (5)</a></li>
                                <li><a href="#">Microsoft (1)</a></li>
                                <li><a href="#">MSI (48)</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Màn hình <i class="fas fa-sort-down"></i></a>
                            <ul class="list-unstyled">
                                <li><a href="#">Acer (75)</a></li>
                                <li><a href="#">Apple (16)</a></li>
                                <li><a href="#">Asus (175)</a></li>
                                <li><a href="#">Dell (151)</a></li>
                                <li><a href="#">HP (102)</a></li>
                                <li><a href="#">LG (5)</a></li>
                                <li><a href="#">Microsoft (1)</a></li>
                                <li><a href="#">MSI (48)</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Tính năng khác <i class="fas fa-sort-down"></i></a>
                            <ul class="list-unstyled">
                                <li><a href="#">Acer (75)</a></li>
                                <li><a href="#">Apple (16)</a></li>
                                <li><a href="#">Asus (175)</a></li>
                                <li><a href="#">Dell (151)</a></li>
                                <li><a href="#">HP (102)</a></li>
                                <li><a href="#">LG (5)</a></li>
                                <li><a href="#">Microsoft (1)</a></li>
                                <li><a href="#">MSI (48)</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="container" style="background-color: #f5f5f5;margin-left:0px;  width: 1130px;line-height: 50px; border-top:2px solid #f5f5f5;">
                <div class="col-md-3">
                    <span>Sắp xếp theo </span>
                    <select onchange="location.href=this.value">
                        <option value="#">Mới nhất</option>
                        <option value="#">Giá: thấp -&gt; cao</option>
                        <option value="#">Giá: cao -&gt; thấp</option>
                        <option value="#">Xem nhiều nhất</option>
                        <option value="#">Nhiều nhận xét</option>
                        <option value="#">Đánh giá cao nhất</option>
                        <option value="#">Tên A-&gt;Z</option>
                    </select>
                </div>
                <div class="float-right" style="margin-right:-40px;">
                    <span>Xem</span>
                    <a href="#"><i class="fas fa-th-large"></i></a>
                    <a href="#"><i class="fas fa-bars"></i></a>
                </div>

            </div>

            <div class="discount-products" style="background-color:#f5f5f5;">
                <div class="container">
                    <h3>Tìm kiếm với từ khóa : <span>{{$keyword}}</span></h3>
                    @foreach($items as $product)
                        <div class="col-md-3">
                            <div class="show-1">
                                <div class="product-item" style="background-color:#fff;width: 260px; height: 420px;">
                                    <div class="product-item-content">
                                        <div class="wrapper-image">
                                            <a href="{{route('product-detail',$product->id)}}" ><img class="product-image-intro-1" src="{{url('/')}}/{{$product->product_image_intro}}"></a>
                                        </div>
                                        <div style="margin-top: 222px;text-align: center;">
                                            <h4 style="font-weight: bold;" class="product-name"><a class="product-name-1" href="{{route('product-detail',$product->id)}}">{{$product->product_name}}</a></h4>
                                            <h5>{{$product->description}}</h5>
                                                <div class="prices-1">
                                                    <span>{{number_format($product->price)}}<span>đ</span></span>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay">
                                    <div>
                                        <div style="margin-left: 10px;margin-right: 10px;">
                                            <h3 class="product-name"><a style="color: black; text-decoration:none;font-size: 22px;" href="{{route('product-detail',$product->id)}}">{{$product->product_name}}</a></h3>
                                            <div style="margin-top:10px; font-size: 20px; color: red;font-weight: bold;">
                                                <span>{{$product->sale_price}}</span>
                                                <span class="currency">đ</span>
                                            </div>
                                            <div style="margin-top:10px;">
                                                <strong>Bảo hành :</strong><br>
                                                <span>{{$product->description}}</span>
                                            </div>
                                            <div style="margin-top:10px;">
                                                <strong>Kho hàng :</strong>
                                                <span>Còn hàng</span>
                                            </div>
                                            <div style="margin-top:15px;border-top:black solid 1px; border-bottom:black solid 1px ">
                                                <strong>Mô tả tóm tắt :</strong>
                                                <span>{{$product->description}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="text-center">
                <ul class="pagination">
                    <li><a href="#">&laquo;</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul>
            </div>

            <div class="container" style="margin-top:1%;background-color: #fff;margin-left:30px;  width: 1125px; height: 150px;">
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

        </div>
    </div>
@endsection