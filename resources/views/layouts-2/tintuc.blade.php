@extends('layouts.app')

@section('content')
<style type="text/css" media="screen">
.phu-kien{text-decoration: none; color: blue;}
.phu-kien:hover{color: red; text-decoration: none;}
.menu ul{margin-left: 16px;}
.menu ul li{line-height: 40px; margin-right: 20px;}
.menu ul li:hover{border-bottom:3px solid red;}
.menu ul li a{ color: black;}
.menu ul li a:hover{text-decoration: none; color: #555; }

.tin-image-1{width:450px; height: 280px;}
.tin-image-2{width:120px; height: 70px;}
.tin-tuc-moi{background-color: #fff;}
.tin-name{font-weight: bold;color: black;}
.tin-name:hover{color:#58a4df;text-decoration: none;}
.tin-moi-1{width:790px;height:360px;background-color: #fff;margin-left: -15px;}
.tin-moi-1-1{margin-top: 10px;float: left;width:450px;margin-left: 15px;}
.tin-moi-1-2{width:300px;margin-top: 10px;margin-left: 15px;float: left;}
.tin-moi-2{width:320px;height:360px;background-color: #fff;}
.stt-tin-1{border-radius:50px;width:43px;line-height: 40px;background-color: #f5a623; text-align: center;}
.stt-tin-2{border-radius:50px;width:43px;line-height: 40px;background-color: #9b9b9b; text-align: center;margin-top: 12px;}
.stt-tin-3{border-radius:50px;width:43px;line-height: 40px;background-color: #ccc; text-align: center;margin-top: 14px;}
.list-tin-1{width:790px;height:auto;background-color: #fff;margin-left: -15px;}
.list-tin-1-1{width:740px;margin-top:10px;height:170px;margin-left: 15px;border-bottom: 1px solid #ccc;}
.list-tin-2{width:320px;height:auto;background-color: #fff;}

</style>
<div class="menu" style="margin-top:-15px;background-color:#e0e0e0;">
    <div class="container">
        <ul class="list-inline">
                <li style="border-bottom:3px solid red;"><a href="{{route('tin-tuc')}}"><h4 style="font-weight: bold;">TIN MỚI</h4></a></li>
                <li><a href="{{route('bao-hanh')}}"><h4>BẢO HÀNH</h4></a></li>
                <li><a href="{{route('khuyen-mai')}}"><h4>KHUYẾN MẠI</h4></a></li>
                <li><a href="{{route('dia-chi')}}"><h4>ĐỊA CHỈ GHDSHOP</h4></a></li>
                <li><a href="{{route('tu-van')}}"><h4>ĐÁNH GIÁ - TƯ VẤN</h4></a></li>
                <li><a href="{{route('thu-thuat')}}"><h4>THỦ THUẬT</h4></a></li>
                <li><a href="{{route('thong-tin')}}"><h4>KÊNH THÔNG TIN</h4></a></li>
            </ul>
    </div>
</div>

<div class="view-home">
    <div class="container">
        @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif
        
        <div style="margin-left: 15px;">
            <h1><strong style="color: #555;">TIN MỚI NHẤT</strong></h1>
            
            <div class="container" style="background-color: #f5f5f5;width:1140px;">
                <div class="tin-moi-1 float-left">
                    @foreach($tin_moi as $product)
                    <a href="{{route('product-detail',$product->id)}}" >
                        <div class="tin-moi-1-1">
                                    <img class="tin-image-1" src="{{url('/')}}/{{$product->product_image_intro}}"><br>
                                <h4 class="tin-name">{{$product->product_name}}</h4>
                        </div>
                    </a>
                    @endforeach
                    
                    @foreach($tin_moi_1 as $product)
                    <a href="{{route('product-detail',$product->id)}}" >
                        <div class="tin-moi-1-2">
                            <div style="float: left;">
                                    <img class="tin-image-2" src="{{url('/')}}/{{$product->product_image_intro}}">
                            </div>
                            <div style="width:170px; float: right;">
                                <span class="tin-name">{{$product->product_name}}</span>             
                            </div>
                        </div>
                    </a>
                    @endforeach<br>
                </div>

                <div class="tin-moi-2 float-right">
                    <div style="line-height: 40px;border-bottom: 2px solid #f5f5f5;">
                        <h4 style="margin-left: 20px;">Xem Nhiều</h4>
                    </div>
                    <div style="margin-top: 15px;">                   
                            <div class="col-md-2" >
                                <div class="stt-tin-1"><strong style="color: #fff;font-size: 18px;">1</strong>
                                </div>
                                <div class="stt-tin-2"><strong style="color: #fff;font-size: 18px;">2</strong>
                                </div>
                                <div class="stt-tin-3"><strong style="color: #fff;font-size: 18px;">3</strong>
                                </div>
                                <div class="stt-tin-3"><strong style="color: #fff;font-size: 18px;">4</strong>
                                </div>
                                <div class="stt-tin-3"><strong style="color: #fff;font-size: 18px;">5</strong>
                                </div>
                            </div>
                            
                            <div class="col-md-10" style="margin-top: -4px;">
                                @foreach($tin_moi_2 as $product)
                                    <a class="tin-name" href="{{route('product-detail',$product->id)}}" >
                                        <h5 style="font-weight:normal;margin-bottom: 14px;">{{$product->product_name}}</h5>
                                    </a>
                                @endforeach
                            </div>      
                    </div>
                </div>
            </div>

            <div class="container" style="background-color: #f5f5f5;width:1140px;margin-top: 20px;">
                <div class="list-tin-1 float-left">
                    @foreach($list_tin_1 as $product)
                    <a href="{{route('product-detail',$product->id)}}" >
                        <div class="list-tin-1-1">
                            <div style="float: left;">
                                    <img width="300px" height="160px" src="{{url('/')}}/{{$product->product_image_intro}}">
                            </div>
                            <div style="width:430px;height: 150px; float: right;">
                                <h4 class="tin-name">{{$product->product_name}}</h4>
                                <h5>{{$product->description}}</h5>        
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>

                <div class="list-tin-2 float-right">
                    <div style="line-height: 40px;border-bottom: 2px solid #f5f5f5;">
                        <h4 style="margin-left: 20px;">Sản Phẩm Mới</h4>
                    </div>
                    <div style="margin-top: 15px;">                    
                        @foreach($list_tin_2 as $product)
                        <a href="{{route('product-detail',$product->id)}}" >
                            <div class="tin-moi-1-2">
                                <div style="float: left;">
                                        <img class="tin-image-2" src="{{url('/')}}/{{$product->product_image_intro}}">
                                </div>
                                <div style="width:170px; float: right;">
                                    <h5 class="tin-name">{{$product->product_name}}</h5>
                                    <h5 class="tin-name"><span style="color: red;">Giá:</span> {{$product->price}} VNĐ</h5>
                                </div>
                            </div>
                        </a>
                        @endforeach<br>      
                    </div>
                </div>
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
    
        <div style="margin-left: -15px;">
            <div class="container" style="margin-top:1%;background-color: #fff;margin-left:30px; width: 1125px; height: 150px;">
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
</div>
@endsection