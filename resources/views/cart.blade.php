@extends('layouts.app')
@section('content')
<style type="text/css" media="screen">
.product-name{color: blue; font-weight: bold; text-decoration: none;}
.product-name:hover{color: red;font-weight: bold; text-decoration: none; }
.cart{color: red;}
.prod-list ul{list-style: none;margin-left:-60px;}
.prod-list ul li{float: left; margin-left:20px;}
.prod-list ul li a{text-decoration: none;}
.prod-list ul li ul li a{color: #000;}
.prod-list ul li ul{visibility: hidden; position: absolute;padding-top:25px;margin-left:1px;}
.prod-list ul li ul li{float: none;margin-top: -25px;}
.prod-list ul li:hover ul{transition: 0.2s ease-in-out;background-color: #fff; visibility: visible; width: 200px; height: auto;z-index: 1; box-shadow: 0 0 10px 0 #ccc;}
.prod-list ul li ul li a{color: black;}
.prod-list ul li ul li a:hover{color:blue;}
.image-logo{width: 110px; height: 40px;transition: 0.5s ease-in-out;}
.image-logo:hover {padding-left: 6px; padding-right: 6px; padding-top: 6px; padding-bottom: 6px;}
.text-1{text-decoration:none;}
.text-1:hover{text-decoration:none;color: red;}
.giaodich{color: blue; font-weight: bold; font-style: italic;}
.chinh-sach{color: blue; margin-top:5px; text-decoration: none;}
.chinh-sach:hover{color: #ff8f00;margin-top:5px; text-decoration: none;}
.btn-xac-nhan{width:200px; height: 45px; font-weight: bold;}
.cart-thanh-toan{margin-top:5px; margin-bottom:20px;}
</style>
<div class="container"> 
    <div class="container" style="margin-top:-1%;background-color: #fff;margin-left:15px;  width: 1125px;line-height: 50px;">
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

    <div class="container" style="background-color: #fff;margin-left:15px;  width: 1125px;line-height: 50px; border-top:2px solid #f5f5f5;">
                <div class="prod-list">
                    <ul>
                        <li><a href="#">Thương hiệu <i class="fas fa-sort-down"></i></a>
                            <ul class="list-unstyled">
                                <li><a href="#">Acer (44)</a></li>
                                <li><a href="#">Apple (66)</a></li>
                                <li><a href="#">Asus (25)</a></li>
                                <li><a href="#">Dell (31)</a></li>
                                <li><a href="#">HP (42)</a></li>
                                <li><a href="#">LG (54)</a></li>
                                <li><a href="#">Microsoft (21)</a></li>
                                <li><a href="#">MSI (44)</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Giá <i class="fas fa-sort-down"></i></a>
                            <ul class="list-unstyled">
                                <li><a href="#">Dưới 5 Triệu</a></li>
                                <li><a href="#">5 Triệu - 7 Triệu</a></li>
                                <li><a href="#">7 Triệu - 10 Triệu</a></li>
                                <li><a href="#">10 Triệu - 15 Triệu</a></li>
                                <li><a href="#">Trên 15 Triệu</a></li>
                            </ul>
                        </li>
                        <li><a href="#">LAPTOP MỚI <i class="fas fa-sort-down"></i></a>
                            <ul class="list-unstyled">
                                <li><a href="#">Xem Laptop mới (79)</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Dòng máy <i class="fas fa-sort-down"></i></a>
                            <ul class="list-unstyled">
                                <li><a href="#">Học tập - văn phòng (318)</a></li>
                                <li><a href="#">Cao cấp - sang trọng (93)</a></li>
                                <li><a href="#">Đồ họa kỹ thuật (10)</a></li>
                                <li><a href="#">Laptop gaming (124)</a></li>
                            </ul>
                        </li>
                        <li><a href="#">CPU <i class="fas fa-sort-down"></i></a>
                            <ul class="list-unstyled">
                                <li><a href="#">Intel Core i3 (61)</a></li>
                                <li><a href="#">Intel Core i5 (209)</a></li>
                                <li><a href="#">Intel Core i7 (166)</a></li>
                                <li><a href="#">Intel Core i9 (4)</a></li>
                                <li><a href="#">Ryzen 3 (9)</a></li>
                                <li><a href="#">Ryzen 5 (16)</a></li>
                                <li><a href="#">Ryzen 7 (9)</a></li>
                                <li><a href="#">Ryzen 9 (3)</a></li>
                                <li><a href="#">Intel Pentium (11)</a></li>
                                <li><a href="#">CPU khác (1)</a></li>
                            </ul>
                        </li>
                        <li><a href="#">RAM <i class="fas fa-sort-down"></i></a>
                            <ul class="list-unstyled">
                                <li><a href="#">4GB (179)</a></li>
                                <li><a href="#">8GB (238)</a></li>
                                <li><a href="#">16GB (66)</a></li>
                                <li><a href="#">24GB (1)</a></li>
                                <li><a href="#">32GB (11)</a></li>
                                <li><a href="#">64GB (1)</a></li>
                                <li><a href="#">128GB (1)</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Card Đồ Họa <i class="fas fa-sort-down"></i></a>
                            <ul class="list-unstyled">
                                <li><a href="#">Card rời (241)</a></li>
                                <li><a href="#">Card onboard (255)</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Dung lượng ổ cứng <i class="fas fa-sort-down"></i></a>
                            <ul class="list-unstyled">
                                <li><a href="#">SSD 120GB - 128GB (32)</a></li>
                                <li><a href="#">SSD 180GB - 256GB (146)</a></li>
                                <li><a href="#">SSD 480GB - 512GB (152)</a></li>
                                <li><a href="#">SSD 1000GB (18)</a></li>
                                <li><a href="#">SSD 2000GB (1)</a></li>
                                <li><a href="#">HDD 250GB - 320GB (1)</a></li>
                                <li><a href="#">HDD 500GB (19)</a></li>
                                <li><a href="#">HDD 1000GB (166)</a></li>
                                <li><a href="#">HDD 2000GB (2)</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Màn hình <i class="fas fa-sort-down"></i></a>
                            <ul class="list-unstyled">
                                <li><a href="#">Màn 12 Inch (3)</a></li>
                                <li><a href="#">Màn 13.3 Inch (45)</a></li>
                                <li><a href="#">Màn 14 Inch (164)</a></li>
                                <li><a href="#">Màn 15.6 Inch (253)</a></li>
                                <li><a href="#">Màn 17 Inch (28)</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Độ phân giải <i class="fas fa-sort-down"></i></a>
                            <ul class="list-unstyled">
                                <li><a href="#">60Hz (45)</a></li>
                                <li><a href="#">120Hz (45)</a></li>
                                <li><a href="#">144Hz</a></li>
                                <li><a href="#">200Hz</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Tính năng khác <i class="fas fa-sort-down"></i></a>
                            <ul class="list-unstyled">
                                <li><a href="#">Màn hình cảm ứng (45)</a></li>
                                <li><a href="#">Bảo mật vân tay (45)</a></li>
                                <li><a href="#">Máy 2 trong 1 (24)</a></li>
                                <li><a href="#">Intel Optane (3)</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
    </div>
    
    <div style="margin-top:15px; margin-bottom: -15px;">
        <ol class="breadcrumb">
            <li><a style="text-decoration: none;color: #000;" href="{{route('home')}}">Trang Chủ</a></li>
            <li><a style="text-decoration: none;color: #000;" href="{{route('laptop')}}">Giỏ hàng</a></li>
        </ol>
    </div>
    <div class="view-cart" style="margin-top:20px;">
        <h3 class="text-center"><strong class="cart">THÔNG TIN GIỎ HÀNG</strong></h3>
        <div class="container" style="width: 1155px; margin-top:20px;">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>STT</th>
                    <th>Hình Ảnh</th>
                    <th>Sản phẩm</th>
                    <th>Đơn giá</th>
                    <th style="width:120px;">Số lượng</th>
                    <th>Tổng</th>
                    <th>Tác Vụ</th>
                </tr>
                </thead>
                <tbody>
                @foreach (Cart::content() as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td><img width="90" height="90" src="{{url('/')}}/{{$item->options->product_image_intro}}" alt=""></td>
                        <td><a class="product-name" href="{{route('product-detail',$item->id)}}">{{$item->name}}</a><br>{{$item->options->description}}</td>
                        <td>{{$item->price}} VNĐ</td>
                        <td><form action="{{route('update-to-cart',$item->rowId)}}" method="post">
                                <input type="text" name="qty" style="width:50px;height: 30px; text-align: center;" value="{{$item->qty}}">
                                <button name="submit" class="btn btn-default"><i style="width:15px;height: 10px;" class="fas fa-tools"></i></button>
                                {{csrf_field()}}
                            </form>
                        </td>
                        <td>{{$item->price*$item->qty}} VNĐ</td>
                        <td>
                            <form action="{{route('remove-item-cart',$item->rowId)}}" method="post">
                                <button class="btn btn-danger"><i style="width:20px;height: 20px;" class="fas fa-trash-alt"></i></button>
                                {{csrf_field()}}
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                    <td colspan="3">Tổng</td>
                    <td class="text-center">{{Cart::subtotal()}}<br>VNĐ</td>
                    <td class="text-center">{{Cart::count()}}<br>Sản Phẩm</td>
                    <td colspan="2"><a class="btn btn-default" href="{{route('home')}}">Tiếp tục mua hàng</a></td>
                </tfoot>
            </table>
        </div>
    </div>

    <h3 class="text-center cart-thanh-toan"><strong class="cart">THÔNG TIN THANH TOÁN</strong></h3>
    <div class="col-md-7" style="border: 1px solid #e3e3e3; margin-left:15px; width:620px;">
        <div style="margin-top:10px;" class="view-checkout">
            <div class="container">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{route('thanh-toan')}}" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row row-input">
                                <div class="col-md-12">
                                    <label class="product-name">1. Khách hàng khai báo đầy đủ thông tin</label>
                                    <input type="email" class="form-control" name="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="row row-input">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="first_name" placeholder="Họ">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="last_name" placeholder="Tên">
                                </div>
                            </div>
                            <div class="row row-input">
                                <div class="col-md-4">
                                    <select name="gioi_tinh" class="form-control">
                                        <option value="">Chọn...</option>
                                        <option value="nam">Nam</option>
                                        <option value="nu">Nữ</option>
                                    </select>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="phone_number" placeholder="Số điện thoại">
                                </div>
                            </div>
                            <div class="row row-input">
                                <div class="col-md-12">
                                    <textarea name="address" placeholder="Địa chỉ nhận hàng" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="align-content-center row-input">
                                <a class="btn btn-warning" href="{{route('login')}}">Đăng nhập</a>
                            <p class="row-input pull-right chinh-sach">* Bạn nên đăng nhập để có thể quản lí đơn hàng một cách tốt
                                hơn</p>
                            </div>  
                        </div>
                        <div class="col-md-6">

                        </div>
                    </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-5 float-right" style="border: 1px solid #e3e3e3;width:500px;">
        <label style="margin-top:10px;" class="product-name">2. Khách hàng chọn hình thức vận chuyển</label>
        <div style="margin-top:5px;margin-bottom:10px;">
                <input type="radio" name="giao-dich" value="1"> Nhận sản phẩm tại cửa hàng<br>
                    <div style="margin:5px 0 5px 20px">
                        <span class="giaodich">*Quý khách vui lòng lựa chọn địa điểm nhận hàng phù hợp</span><Br>
                        <input type="radio" name="giao-dich-1" value="1"> 40 Trần Đại Nghĩa, Hai Bà Trưng, HN<br>
                        <input type="radio" name="giao-dich-1" value="1"> 94 Trần Vỹ, Cầu Giấy, HN<br>
                        <input type="radio" name="giao-dich-1" value="1"> 277 Nguyễn Văn Cừ, Long Biên, HN<br>
                        <input type="radio" name="giao-dich-1" value="1">  63 Nguyễn Thiện Thuật, Quận 3, TP HCM<br>
                        <input type="radio" name="giao-dich-1" value="1">  LK3C5 Nguyễn Văn Lộc - Quận Hà Đông, HN<br>
                    </div>
                <input type="radio" name="giao-dich" value="2"> Giao hàng tận nơi (Phí vận chuyển thỏa thuận)<br>
            <a class="chinh-sach" href="#">Quý khách vui lòng đọc kỹ chính sách giao hàng từ xa của Laptop88 tại đây </a>
        </div>
    </div>
</div>
    
    <div class="text-center" style="margin-top:20px;">
        <button type="submit" name="thanh-toan" class="btn btn-warning pull-middle btn-xac-nhan" onclick="alert('Bạn đã mua hàng thành công, cám ơn bạn')">Gửi Đơn Hàng</button>
    </div>
    {{csrf_field()}}
</form>
    
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