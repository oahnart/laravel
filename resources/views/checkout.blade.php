@extends('layouts.app')
@section('content')
    <div class="view-checkout">
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
                        <p class="row-input">* Bạn nên đăng nhập để có thể theo dõi và quản lí đơn hàng một cách tốt
                            hơn</p>
                        <div class="align-content-center row-input">
                            <a class="btn btn-primary" href="{{route('login')}}">Đăng nhập</a>
                        </div>
                        <div class="row row-input">
                            <div class="col-md-12">
                                <label class="label">Thông tin khách hàng</label>
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
                                    <option value="name">Nam</option>
                                    <option value="nu">Nữ</option>
                                </select>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="phone_number" placeholder="Số điện thoại">
                            </div>
                        </div>
                        <div class="row row-input">
                            <div class="col-md-12">
                                <textarea name="address" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="row-input">
                            <button type="submit" class="btn btn-primary pull-right">Thanh toán</button>
                        </div>
                    </div>
                    <div class="col-md-6">

                    </div>
                </div>
                {{csrf_field()}}
            </form>
        </div>
    </div>
@endsection