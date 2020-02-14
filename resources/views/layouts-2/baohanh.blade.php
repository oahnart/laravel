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
.list-bh{margin-top:50px;margin-left: 10%;}
.list-bh-1{background-color: blue; color: #fff;padding:5px 5px 5px 5px;}
.list-bh-2{margin-left: 7%;}

.tin-image-2{width:120px; height: 70px;}
.list-tin-1{width:770px;height:650px;background-color: #fff;margin-left: -15px;}
.list-tin-2{width:340px;height:auto;background-color: #fff;}
.tin-tin-2-1{width:320px;margin-left: 15px;float: left;}

</style>
<div class="menu" style="margin-top:-15px;background-color:#e0e0e0;">
    <div class="container">
        <ul class="list-inline">
                <li><a href="{{route('tin-tuc')}}"><h4>TIN MỚI</h4></a></li>
                <li style="border-bottom:3px solid red;"><a href="{{route('bao-hanh')}}"><h4 style="font-weight: bold;">BẢO HÀNH</h4></a></li>
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
        
        <div class="container" style="margin-left: 15px;width:1140px;">
            <h1><strong style="margin-left: -15px;color: #555;">BẢO HÀNH - HẬU MÃI TẠI GHDShop.vn</strong></h1>
            <div class="list-tin-1 float-left">
                <br>
                <h3><span class="list-bh-1">MUA HÀNG TỪ XA - COD</span></h3>
                    <h4 class="list-bh-2"><a href="{{route('bao-hanh')}}">http://localhost/lopphp1907e_1/public/bao-hanh</a></h4><br>
                <h3><span class="list-bh-1">ĐẶT CỌC GIỮ MÁY</span></h3>
                    <h4 class="list-bh-2"><a href="{{route('bao-hanh')}}">http://localhost/lopphp1907e_1/public/bao-hanh</a></h4><br>
                <h3><span class="list-bh-1">ĐẶT HÀNG TRƯỚC</span></h3>
                    <h4 class="list-bh-2"><a href="{{route('bao-hanh')}}">http://localhost/lopphp1907e_1/public/bao-hanh</a></h4><br>
                <h3><span class="list-bh-1">CHÍNH SÁCH BẢO HÀNH</span></h3>
                    <h4 class="list-bh-2"><a href="{{route('bao-hanh')}}">http://localhost/lopphp1907e_1/public/bao-hanh</a></h4><br>
                <h3><span class="list-bh-1">CHÍNH SÁCH ĐỔI, TRẢ HÀNG</span></h3>
                    <h4 class="list-bh-2"><a href="{{route('bao-hanh')}}">http://localhost/lopphp1907e_1/public/bao-hanh</a></h4><br>
                <h3><span class="list-bh-1">HẬU MÃI SAU BÁN HÀNG</span></h3>
                    <h4 class="list-bh-2"><a href="{{route('bao-hanh')}}">http://localhost/lopphp1907e_1/public/bao-hanh</a></h4><br>
                <h3><span class="list-bh-1">TIN KHUYẾN MẠI</span></h3>
                    <h4 class="list-bh-2"><a href="{{route('bao-hanh')}}">http://localhost/lopphp1907e_1/public/bao-hanh</a></h4><br>
            </div>

            <div class="list-tin-2 float-right">
                    <div style="line-height: 40px;border-bottom: 2px solid #f5f5f5;">
                        <h4><span class="list-bh-1">Sản Phẩm Hiện Có</span></h4>
                    </div>
                    <div style="margin-top: 15px;">                    
                        @foreach($list_tin_2 as $product)
                        <a href="{{route('product-detail',$product->id)}}" >
                            <div class="tin-tin-2-1">
                                <div style="float: left;">
                                        <img class="tin-image-2" src="{{url('/')}}/{{$product->product_image_intro}}">
                                </div>
                                <div style="width:190px; float: right;">
                                    <h5 class="tin-name">{{$product->product_name}}</h5>
                                    <h5 class="tin-name"><span style="color: red;">Giá:</span> {{$product->price}} VNĐ</h5>
                                </div>
                            </div>
                        </a>
                        @endforeach     
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
                <h3>PHẦN MỀM PHỤ KIỆN</h3>
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