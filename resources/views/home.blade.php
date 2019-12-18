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
    </style>
    <div class="container">
        <div class="col-md-8">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel"  style="width: 750px; height: 310px; margin-left: 3.5px;">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a href="#"><img class="d-block w-100" src="{{ asset('/assets/frontend/categories/1.jpg') }}" alt="1 slide" style="width: 750px; height: 310px;"></a>
                    </div>
                    <div class="carousel-item">
                        <a href="#"><img class="d-block w-100" src="{{ asset('/assets/frontend/categories/2.jpg') }}" alt="1 slide" style="width: 750px; height: 310px;"></a>
                    </div>
                    <div class="carousel-item">
                        <a href="#"><img class="d-block w-100" src="{{ asset('/assets/frontend/categories/3.jpg') }}" alt="1 slide" style="width: 750px; height: 310px;"></a>
                    </div>
                    <div class="carousel-item">
                        <a href="#"><img class="d-block w-100" src="{{ asset('/assets/frontend/categories/4.png') }}" alt="1 slide" style="width: 750px; height: 310px;"></a>
                    </div>
                    <div class="carousel-item">
                        <a href="#"><img class="d-block w-100" src="{{ asset('/assets/frontend/categories/5.jpg') }}" alt="1 slide" style="width: 750px; height: 310px;"></a>
                    </div>
                    <div class="carousel-item">
                        <a href="#"><img class="d-block w-100" src="{{ asset('/assets/frontend/categories/6.jpg') }}" alt="1 slide" style="width: 750px; height: 310px;"></a>
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
                <img src="{{ asset('/assets/frontend/categories/banner-1.png') }}" alt="">
            </div>
            <div style="margin-top: 1%;">
                <img src="{{ asset('/assets/frontend/categories/banner-2.png') }}" alt="">
            </div>
        </div>

        <div class="col-md-8" style="margin-top: 0.5%;">
            <img src="{{ asset('/assets/frontend/categories/banner-3.png') }}" alt="" style="width:1125px; ">
        </div>

        <div class="col-md-8" style="margin-top: 0.5%;background-color: #f5f5f5;">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="width: 1120px; height: 75px; margin-left: 3.5px;">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="col-md-2">
                            <img class="d-block w-100" src="{{ asset('/assets/frontend/logo/logo-1.png') }}" alt="First slide" style="width: 65px; height: 60px;">
                        </div>
                        <div class="col-md-2 col-md-offset-1">
                            <img class="d-block w-100" src="{{ asset('/assets/frontend/logo/logo-2.png') }}" alt="First slide" style="width: 65px; height: 60px;">
                        </div>
                        <div class="col-md-2 col-md-offset-1">
                            <img class="d-block w-100" src="{{ asset('/assets/frontend/logo/logo-3.png') }}" alt="First slide" style="width: 65px; height: 60px;">
                        </div>
                        <div class="col-md-2 col-md-offset-1">
                            <img class="d-block w-100" src="{{ asset('/assets/frontend/logo/logo-4.png') }}" alt="First slide" style="width: 65px; height: 60px;">
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="col-md-2">
                            <img class="d-block w-100" src="{{ asset('/assets/frontend/logo/logo-5.png') }}" alt="First slide" style="width: 65px; height: 60px;">
                        </div>
                        <div class="col-md-2 col-md-offset-1">
                            <img class="d-block w-100" src="{{ asset('/assets/frontend/logo/logo-6.png') }}" alt="First slide" style="width: 65px; height: 60px;">
                        </div>
                        <div class="col-md-2 col-md-offset-1">
                            <img class="d-block w-100" src="{{ asset('/assets/frontend/logo/logo-7.png') }}" alt="First slide" style="width: 65px; height: 60px;">
                        </div>
                        <div class="col-md-2 col-md-offset-1">
                            <img class="d-block w-100" src="{{ asset('/assets/frontend/logo/logo-8.png') }}" alt="First slide" style="width: 65px; height: 60px;">
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <div class="view-home">
        <div class="container">
            @if (Session::has('message'))
                <div class="alert alert-info">{{ Session::get('message') }}</div>
            @endif
            <div class="discount-products">
                <div>
                    <div style="float: right;">
                        <ul class="list-inline">
                            <li><h5><strong>Mức giá: </strong></h5></li>
                            <li><a class="price" style="text-decoration: none;" href="#">DƯỚI 5 TRIỆU</a></li>
                            <li><a class="price" style="text-decoration: none;" href="#">5 TRIỆU -  7 TRIỆU</a></li>
                            <li><a class="price" style="text-decoration: none;" href="#">7 TRIỆU -  10 TRIỆU</a></li>
                            <li><a class="price" style="text-decoration: none;" href="#">10 TRIỆU - 15 TRIỆU</a></li>
                            <li><a class="price" style="text-decoration: none;" href="#">TRÊN 15 TRIỆU</a></li>
                        </ul>
                    </div>
                    <div style="margin-bottom: 2%;">
                        <div style="background-image: url('{{ asset('/assets/frontend/images/banner-logo-1.png') }}'); background-repeat: no-repeat; height:40px; width: 350px;"><h3 style="line-height: 1.5; margin-left: 5%;"><a href="#" class="title-1">HỌC TẬP VĂN PHÒNG</a></h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div>
                        <img src="{{asset('assets/frontend/images/pro_poster_4939.jpg')}}" style="width: 280px; height: 280px;">
                    </div>
                    @foreach($hoc_tap as $product)
                        <div class="col-md-3">
                            <div class="show-1">
                                <div class="product-item" style="width: 260px; height: 420px;">
                                    <div class="product-item-content">
                                        <div class="wrapper-image">
                                            <a href="{{route('product-detail',$product->id)}}" ><img class="product-image-intro-1" src="{{url('/')}}/{{$product->product_image_intro}}"></a>
                                        </div>
                                        <div style="margin-top: 222px;text-align: center;">
                                            <h4 style="font-weight: bold;" class="product-name"><a class="product-name-1" href="{{route('product-detail',$product->id)}}">{{$product->product_name}}</a></h4>
                                            <h5>{{$product->description}}</h5>
                                            <div class="prices-1">
                                                <span>{{number_format($product->price)}}</span>
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

            <div class="discount-products">
                <div>
                    <div style="float: right;">
                        <ul class="list-inline">
                            <li><h5><strong>Mức giá: </strong></h5></li>
                            <li><a class="price" style="text-decoration: none;" href="#">DƯỚI 5 TRIỆU</a></li>
                            <li><a class="price" style="text-decoration: none;" href="#">5 TRIỆU -  7 TRIỆU</a></li>
                            <li><a class="price" style="text-decoration: none;" href="#">7 TRIỆU -  10 TRIỆU</a></li>
                            <li><a class="price" style="text-decoration: none;" href="#">10 TRIỆU - 15 TRIỆU</a></li>
                            <li><a class="price" style="text-decoration: none;" href="#">TRÊN 15 TRIỆU</a></li>
                        </ul>
                    </div>
                    <div style="margin-bottom: 2%;">
                        <div style="background-image: url('{{ asset('/assets/frontend/images/banner-logo-1.png') }}'); background-repeat: no-repeat; height:40px; width: 350px;"><h3 style="line-height: 1.5; margin-left: 5%;"><a href="#" class="title-1">ĐỒ HỌA KỸ THUẬT</a></h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div>
                        <img src="{{asset('assets/frontend/images/pro_poster_3903.jpg')}}" style="width: 280px; height: 280px;">
                    </div>
                    @foreach($do_hoa as $product)
                        <div class="col-md-3">
                            <div class="show-1">
                                <div class="product-item" style="width: 260px; height: 420px;">
                                    <div class="product-item-content">
                                        <div class="wrapper-image">
                                            <a href="{{route('product-detail',$product->id)}}" ><img class="product-image-intro-1" src="{{url('/')}}/{{$product->product_image_intro}}"></a>
                                        </div>
                                        <div style="margin-top: 222px;text-align: center;">
                                            <h4 style="font-weight: bold;" class="product-name"><a class="product-name-1" href="{{route('product-detail',$product->id)}}">{{$product->product_name}}</a></h4>
                                            <h5>{{$product->description}}</h5>
                                            <div class="prices-1">
                                                <span>{{number_format($product->price)}}</span>
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

            <div class="discount-products">
                <div>
                    <div style="float: right;">
                        <ul class="list-inline">
                            <li><h5><strong>Mức giá: </strong></h5></li>
                            <li><a class="price" style="text-decoration: none;" href="#">7 TRIỆU -  10 TRIỆU</a></li>
                            <li><a class="price" style="text-decoration: none;" href="#">10 TRIỆU - 15 TRIỆU</a></li>
                            <li><a class="price" style="text-decoration: none;" href="#">TRÊN 15 TRIỆU</a></li>
                        </ul>
                    </div>
                    <div style="margin-bottom: 2%;">
                        <div style="background-image: url('{{ asset('/assets/frontend/images/banner-logo-1.png') }}'); background-repeat: no-repeat; height:40px; width: 350px;"><h3 style="line-height: 1.5; margin-left: 5%;"><a href="#" class="title-1">Laptop Gaming</a></h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div>
                        <img src="{{asset('assets/frontend/images/pro_poster_4786.jpg')}}" style="width: 280px; height: 280px;">
                    </div>
                    @foreach($gaming as $product)
                        <div class="col-md-3">
                            <div class="show-1">
                                <div class="product-item" style="width: 260px; height: 420px;">
                                    <div class="product-item-content">
                                        <div class="wrapper-image">
                                            <a href="{{route('product-detail',$product->id)}}" ><img class="product-image-intro-1" src="{{url('/')}}/{{$product->product_image_intro}}"></a>
                                        </div>
                                        <div style="margin-top: 222px;text-align: center;">
                                            <h4 style="font-weight: bold;" class="product-name"><a class="product-name-1" href="{{route('product-detail',$product->id)}}">{{$product->product_name}}</a></h4>
                                            <h5>{{$product->description}}</h5>
                                            <div class="prices-1">
                                                <span>{{number_format($product->price)}}</span>
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

            <div class="discount-products">
                <div>
                    <div style="float: right;">
                        <ul class="list-inline">
                            <li><h5><strong>Mức giá: </strong></h5></li>
                            <li><a class="price" style="text-decoration: none;" href="#">10 TRIỆU - 15 TRIỆU</a></li>
                            <li><a class="price" style="text-decoration: none;" href="#">TRÊN 15 TRIỆU</a></li>
                        </ul>
                    </div>
                    <div style="margin-bottom: 2%;">
                        <div style="background-image: url('{{ asset('/assets/frontend/images/banner-logo-1.png') }}'); background-repeat: no-repeat; height:40px; width: 350px;"><h3 style="line-height: 1.5; margin-left: 5%;"><a href="#" class="title-1">Cao Cấp - Sang Trọng</a></h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div>
                        <img src="{{asset('assets/frontend/images/pro_poster_3962.jpg')}}" style="width: 280px; height: 280px;">
                    </div>
                    @foreach($cao_cap as $product)
                        <div class="col-md-3">
                            <div class="show-1">
                                <div class="product-item" style="width: 260px; height: 420px;">
                                    <div class="product-item-content">
                                        <div class="wrapper-image">
                                            <a href="{{route('product-detail',$product->id)}}" ><img class="product-image-intro-1" src="{{url('/')}}/{{$product->product_image_intro}}"></a>
                                        </div>
                                        <div style="margin-top: 222px;text-align: center;">
                                            <h4 style="font-weight: bold;" class="product-name"><a class="product-name-1" href="{{route('product-detail',$product->id)}}">{{$product->product_name}}</a></h4>
                                            <h5>{{$product->description}}</h5>
                                            <div class="prices-1">
                                                <span>{{number_format($product->price)}}</span>
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

            <div>
                <div>
                </div>

                <div>
                    <div class="col-md-4">
                        <img src="{{ asset('/assets/frontend/images/footer-1.jpg') }}" alt="1 slide" width="370px">
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('/assets/frontend/images/footer-2.jpg') }}" alt="1 slide" width="370px" >
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('/assets/frontend/images/footer-3.png') }}" alt="1 slide" width="370px" >
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
