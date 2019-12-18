<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/fontawesome-free-5.11.2-web/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/bootstrap-3.3.7/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/frontend.css') }}" rel="stylesheet">
</head>
<body style="min-width: 1200px;background-color: #f5f5f5;">
<header style="background-color: #ff9300;">
    <div class="container">
        <div class="header-left">
            <div class="col-md-1">
                <div class="logo">
                    <a href="{{route('home')}}"> <img src="{{ asset('/assets/frontend/images/index.png') }}" title="Bán Laptop | Mua bán laptop giá rẻ, uy tín tại Hà Nội" style="max-width: 250px;"></a>
                </div>
            </div>
            <div class="col-md-3 col-md-offset-1" style="background-color: #fff; margin-left:14.5%;" >
                <div class="area-search" style="margin-top: 20px; margin-bottom: 16px;" >
                    <form action="{{route('tim-kiem')}}" method="post">
                        <input type="text" class="form-control keyword" name="keyword" style="border-radius: 20px;" placeholder="Tìm Kiếm ..."><i class="fas fa-search"></i>
                    </form>
                </div>
            </div>
        </div>

        <div class="header-right">
            <ul class="nav nav-tabs">
                <li><a href="{{route('laptop')}}">
                        <div style="text-align: center;color: black">
                            <i class="fas fa-laptop" style=" font-size: 25px; color: #000; display: inline-block"></i><br>Laptop
                        </div>
                    </a>
                </li>
                <li><a href="{{route('linh-kien')}}">
                        <div style="text-align: center;color: black">
                            <i class="fas fa-mouse" style=" font-size: 25px; color: #000;display: inline-block"></i><br>Linh kiện
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div style="text-align: center;color: black">
                            <i class="fas fa-tools" style=" font-size: 25px; color: #000;display: inline-block"></i><br>Bảo hành,Hậu mãi
                        </div>
                    </a>
                </li>
                <li><a href="#">
                        <div style="text-align: center;color: black">
                            <i class="fas fa-gifts" style=" font-size: 25px; color: #000;display: inline-block"></i><br>Khuyến mại
                        </div>
                    </a>
                </li>
                <li><a href="#">
                        <div style="text-align: center;color: black">
                            <i class="fas fa-newspaper" style=" font-size: 25px; color: #000;display: inline-block"></i><br>Tin tức
                        </div>
                    </a>
                </li>
                <li><a href="#">
                        <div style="text-align: center;color: black">
                            <i class="fas fa-map-marked-alt" style=" font-size: 25px; color: #000;display: inline-block"></i><br>Địa điểm
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>

<main class="py-4">
    @yield('content')
</main>

<footer>
    <div style="background-color: #e0e0e0;margin-top: 2%;">
        <div class="container"><br>
            <div class="col-md-6">
                <h4><strong>KÊNH THÔNG TIN</strong></h4>
                <p>Mời bạn nhập email để nhận những thông tin khuyến mại mới nhất từ Laptop88</p>
            </div>
            <div class="col-md-5" style="background-color: #e0e0e0;" >
                <div class="area-search" style="margin-top: 20px; margin-bottom: 16px;" >
                    <form action="{{route('tim-kiem')}}" method="post">
                        <input type="text" class="form-control keyword" name="keyword" style="border-radius: 5px;" placeholder="Nhập Email của bạn ..."><i class="fas fa-search"></i>
                    </form>
                </div><br>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top: 2%;">
        <div class="col-md-3">
            <h4><strong>THÔNG TIN CÔNG TY</strong></h4>
            <h5><a href="#" style="text-decoration:none; color:black;">GHDShop.vn</a></h5>
            <h5>Hộ kinh doanh Nguyễn Anh Việt</h5>
            <h5>Số 42 đường Trần Đại Nghĩa, phường Đồng Tâm, quận Hai Bà Trưng, Thành phố Hà Nội, Việt Nam</h5>
            <h5>SĐT: 0246.2544.533 - Email: contact@laptop88.vn</h5>
            <h5>Website: GHDShop.vn</h5>
            <h5>Số ĐKKD: 0108153788, cấp lần đầu ngày Sở KHĐT TP. Hà Nội cấp</h5>
        </div>
        <div class="col-md-3">
            <h4><strong>VỀ GHDShop.VN</strong></h4>
            <h5><a href="#" style="text-decoration:none;color:black;">GHDShop.vn</a></h5>
            <h5><a href="#" style="text-decoration:none;color:black;">Tuyển dụng</a></h5>
            <h5>Chăm sóc khách hàng</h5>
            <h5>* Hotline: 0247.106.9999</h5>
            <h5>* Thời gian: 24/7</h5>
            <h5>* Email: contact@laptop88.vn</h5>
            <h5>Liên hệ</h5>
            <img src="{{asset('assets/frontend/logo/tb.png')}}" alt="" style="width:212px; ">
        </div>
        <div class="col-md-3">
            <h4><strong>CHÍNH SÁCH</strong></h4>
            <h5><a href="#" style="text-decoration:none;color:black;">Chính sách mua hàng từ xa</a></h5>
            <h5><a href="#" style="text-decoration:none;color:black;">Chính sách đặt cọc giữ máy</a></h5>
            <h5><a href="#" style="text-decoration:none;color:black;">Chính sách đặt hàng</a></h5>
            <h5><a href="#" style="text-decoration:none;color:black;">Chính sách giao nhận - đổi trả</a></h5>
            <h5><a href="#" style="text-decoration:none;color:black;">Chính sách bảo hành</a></h5>
            <h5><a href="#" style="text-decoration:none;color:black;">Chính sách bảo mật thông tin</a></h5>
            <h5><a href="#" style="text-decoration:none;color:black;">Thỏa thuận sử dụng và quy định giao dịch chung</a></h5>
        </div>
        <div class="col-md-3">
            <h4><strong>THANH TOÁN</strong></h4>
            <h5>Thanh toán trực tuyến (Internet Banking)</h5>
            <h5>Chuyển khoản (Ngân hàng, ATM)</h5>
        </div>
    </div>

    <hr size="5px" color="red" />

    <div class="container" style="margin-top: 2%;">
        <div class="col-md-3">
            <h5><strong>Hà Nội</strong></h5>
            <small>40 - 42 Trần Đại Nghĩa - Quận Hai Bà Trưng (0246.2544.533)</small>
            <h5><strong>Trung tâm bảo hành 2</strong></h5>
            <small>117 Lương Thế Vinh - Thanh Xuân - Hà Nội (024.7106.9999 nhấn phím 3)</small>
            <h5><strong>Bệnh Viện Công Nghệ 88</strong></h5>
            <small>135 Chùa Láng - Đống Đa - Hà Nội (024.7106.9999 nhấn phím 3)</small>
            <h5><strong>Đà Nẵng</strong></h5>
            <small>133 - 135 Hàm Nghi - Điện thoại: 088.8888.086</small>
        </div>

        <div class="col-md-2">
            <h5><strong>Hà Nội</strong></h5>
            <small>LK3C5 Nguyễn Văn Lộc - Quận Hà Đông (0242.246.9933)</small>
            <h5><strong>Trung tâm bảo hành 3</strong></h5>
            <small>135 Chùa Láng - Đống Đa - Hà Nội (024.7106.9999)</small>
            <h5><strong>Bệnh Viện Công Nghệ 88</strong></h5>
            <small>63 Nguyễn Thiện Thuật - Quận 3 - TP HCM (024.7106.9999)</small>
        </div>

        <div class="col-md-2">
            <h5><strong>Hà Nội</strong></h5>
            <small>94 Trần Vỹ - Quận Cầu Giấy (0246.2930.033)</small>
            <h5><strong>Trung tâm bảo hành Đà Nẵng</strong></h5>
            <small>133 - 135 Hàm Nghi - Điện thoại: 088.8888.086</small>
            <h5><strong>TP HCM</strong></h5>
            <small>63 Nguyễn Thiện Thuật, Quận 3 (024.7106.9999 nhấn phím 1)</small>
        </div>

        <div class="col-md-2">
            <h5><strong>Hà Nội</strong></h5>
            <small>277 Nguyễn Văn Cừ - Quận Long Biên (024.6663.9563)</small>
            <h5><strong>Bệnh Viện Công Nghệ 88</strong></h5>
            <small>71A Lê Thanh Nghị - Bách Khoa - Hà Nội (0246.294.0461 )</small>
            <h5><strong>Thái Nguyên</strong></h5>
            <small>45 Lương Ngọc Quyến - Điện thoại: 0972.365.228</small>
        </div>

        <div class="col-md-3">
            <h5><strong>Trung tâm bảo hành 1</strong></h5>
            <small>71A Lê Thanh Nghị - Hai Bà Trưng - Hà Nội (024.7106.9999 nhấn phím 3)</small>
            <h5><strong>Bệnh Viện Công Nghệ 88</strong></h5>
            <small>117 Lương Thế Vinh - Thanh Xuân - Hà Nội (0246.6523.200)</small>
            <h5><strong>Nghệ An</strong></h5>
            <small>273 Lê Duẩn, TP Vinh - Điện thoại: 0947.444.888</small>
        </div>


    </div>
</footer>

</body>
</html>
