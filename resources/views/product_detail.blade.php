@extends('layouts.app')

@section('content')
    <style type="text/css" media="screen">
        .config{border:2px solid #ff9300; padding:3px 10px 3px 10px;}
        .chinh-sach{text-decoration: none; color: blue;}
        .chinh-sach:hover{text-decoration: none;color:#ff9300;}
        .km{width: auto;}
        .km-gia{font-weight: bold; color: red;float: right;}
    </style>
    <div class="container" style="margin-top: -5px; margin-bottom: -15px;">
        <ol class="breadcrumb">
            <li><a style="text-decoration: none;color: #000;" href="{{route('home')}}">Trang Chủ</a></li>
            <li><a style="text-decoration: none;color: #000;" href="{{route('laptop')}}">Laptop</a></li>
            <li><a style="text-decoration: none;color: #000;" href="{{route('laptop')}}">Laptop Asus</a></li>
        </ol>
    </div>

    <div class="view-product-detail" style="margin-left: 15px;">
        <div class="container" style="background-color: #fff;width: 1125px;border-bottom: 1.5px solid #e8ebee; line-height: 40px;">
            <h4 class="style-"><strong>{{$product->product_name}}</strong></h4>
        </div>

        <div class="container" style="background-color: #fff;width: 1125px;">
            <div class="col-md-6" style="margin-top: 20px; margin-left:-15px; border-right: 1.5px solid #ffcbb0;">
                <img class="product-image-intro-1" width="500" height="500" src="{{url('/')}}/{{$product->product_image_intro}}">
            </div>
            <div class="col-md-6" style="margin-top: 20px;">
                <form action="{{route('add-to-cart',$product->id)}}" method="post">
                    <h3><strong style="color: red;">{{$product->price}}<span class="currency">đ</span></strong></h3>
                    <h5>{{$product->description}}</h5>

                    <div>
                        <ul class="list-inline">
                            <li>CPU :</li>
                            <li><span class="config">I5 8250U <i class="glyphicon glyphicon-ok"></i></span></li>
                        </ul>
                        <ul class="list-inline">
                            <li>RAM :</li>
                            <li><span class="config">RAM 4GB <i class="glyphicon glyphicon-ok"></i></span></li>
                        </ul>
                        <ul class="list-inline">
                            <li>Ổ cứng :</li>
                            <li><span class="config">HDD 1TB <i class="glyphicon glyphicon-ok"></i></span></li>
                        </ul>
                        <ul class="list-inline">
                            <li>Card đồ họa:</li>
                            <li><span class="config">NVidia MX130 2GB <i class="glyphicon glyphicon-ok"></i></span></li>
                        </ul>
                        <ul class="list-inline">
                            <li>Màn hình:</li>
                            <li><span class="config">14 inch HD <i class="glyphicon glyphicon-ok"></i></span></li>
                        </ul>
                    </div>

                    <div style="margin-top:30px;">
                        <span>✅ Bảo hành chính hãng Asus 24 tháng - <a class="chinh-sach" href="#">Xem chính sách</a></span><Br>
                        <span>✅Giá ở trên đã bao gồm 10% VAT</span><br>
                        <span>✅Miễn phí vận chuyển trong bán kính 3km từ cửa hàng Laptop88 gần nhất</span>
                    </div>

                    <div style="margin-top:30px;">
                        <div style="background-color: red;">
                            <strong style="margin-left:10px;font-size:15px;color: #fff;line-height: 40px;">Khuyến mãi kèm theo sản phẩm  </strong>
                        </div>
                        <div style="border:1px solid black;">
                            <div style="margin-left:10px;">
                                <h5 class="km">✔ Window 10 Bản Quyền theo máy</h5>
                                <h5 class="km">✔ Miễn phí dán Skin mặt A tại Skin88 trong 15 ngày đầu tiên
                                    <span class="km-gia">180.000 <i class="currency">đ</i></span>
                                </h5>
                                <h5 class="km">✔Tặng Ổ cứng SSD NVMe - OSCOO - 128GB
                                    <span class="km-gia">399.000 <i class="currency">đ</i></span>
                                </h5>
                                <h5 class="km">✔Tặng Chuột không dây S88 Office Wireless V1 / V2
                                    <span class="km-gia">99.000 <i class="currency">đ</i></span>
                                </h5>
                                <h5 class="km">✔Tặng Thẻ Gold Member tích hợp USB 32GB
                                    <span class="km-gia">3.000.000 <i class="currency">đ</i></span>
                                </h5>
                                <h5 class="km">✔Tặng Balo laptop chống sốc BL88
                                    <span class="km-gia">295.000 <i class="currency">đ</i></span>
                                </h5>
                                <h5 class="km">✔Giảm giá 30% dịch vụ Dán vỏ Laptop, điện thoại theo hình ảnh khách hàng tùy chọn
                                </h5>
                                <h5 class="km">✔Cân màu màn hình miễn phí bằng Spyder 5 Elite tại cơ sở 94 Trần Vỹ
                                </h5>
                            </div>
                        </div>
                    </div>

                    <div class="quality">
                        <h5><strong>Liên hệ tư vấn : <span style="color: red;">098.123.6886</span></strong></h5>
                        <div style="margin-bottom:10px;">
                            <span>Đặt ngay </span>
                            <select name="quality">
                                @for($i=1;$i<=10;$i++)
                                    <option value="{{$i}}">{{$i}}</option>
                                @endfor;
                            </select>
                            <span class="quality">sản phẩm</span>
                        </div>
                    </div>
                            <button style="width: 520px; height: 50px; margin-top: 10px;" type="submit" class="btn btn-warning"><i class="fas fa-cart-plus"></i> Thêm vào giỏ</button>
                    {{csrf_field()}}
                </form>
            </div>
        </div>
    </div>

    <div class="container" style="width: 700px">
        <h5>{{$product->full_description}}</h5>
    </div>

    <div style="margin-left:15px; margin-top:2%;">
    <div class="container" style="margin-top:1%;background-color: #fff; width: 1125px; height: 150px;">
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
