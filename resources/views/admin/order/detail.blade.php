@extends('admin.layouts.app')
@section('content')
    @php
        $list_order_status=[
            "pending",
            "processing",
            "completed",
            "cancel",
        ]
    @endphp
    <div>
        <ol class="breadcrumb">
            <li><a style="text-decoration: none;color: #000;" href="{{route('home')}}">Home</a></li>&nbsp;/&nbsp;
            <li><a style="text-decoration: none;color: #000;" href="{{route('laptop')}}">Details Order</a></li>
        </ol>
    </div>
    <div class="view-order-detail">
        @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif
        <form action="{{route('post-edit-order',$order->id)}}" method="post">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>{{$order->id}}</th>
                </tr>
                <tr>
                    <th>Total</th>
                    <th>{{$order->total}}</th>
                </tr>
                <tr>
                    <th>State</th>
                    <th>
                        <select class="form-control" name="status">
                            @foreach($list_order_status as $status)
                                <option  <?php echo $status==$order->status?'  selected ':'' ?> value="{{$status}}">{{$status}}</option>
                            @endforeach
                        </select>
                    </th>
                </tr>
            </table>

            <h3>Customer</h3>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Last name</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                </tr>
                </thead>
                <tbody>
                @foreach($list_customer as $customers)
                    <tr>
                        <td>{{$customers->id}}</td>
                        <td>{{$customers->first_name}}</td>
                        <td>{{$customers->last_name}}</td>
                        <td>{{$customers->gender}}</td>
                        <td>{{$customers->email}}</td>
                        <td>{{$customers->phone}}</td>
                        <td>{{$customers->address}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <h3>List product</h3>
            <table class="table table-bordered text-center">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Product Image</th>
                    <th>Product name</th>
                    <th>Product price</th>
                    <th>Product quality</th>
                    <th>Action</th>
                </tr>

                </thead>
                <tbody>
                @foreach($list_product as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td nowrap><img width="90" height="90" src="{{url('/')}}/{{$product->product_image_intro}}" alt=""></td>
                        <td><a class="product-name" href="{{route('product-detail',$product->product_id)}}">{{$product->product_name}}</a><br>{{$product->description}}</td>
                        <td>{{$product->product_price}} VNĐ</td>
                        <td><form action="{{route('update-orderProduct',$product->id)}}" method="post">
                                <input type="text" name="product_qty" style="width:50px;height: 30px; text-align: center;" value="{{$product->product_qty}}">
                                <button name="submit" class="btn btn-default"><i style="width:15px;height: 10px;" class="fas fa-tools"></i></button>
                                {{csrf_field()}}
                            </form>
                        </td>
                        <td><a href="{{route('delete-orderProduct',$product->id)}}" class="btn btn-primary"><i class="fas fa-trash-alt"></i></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-11">
                    <div class="pull-right">
                        <a href="{{route('list-don-hang')}}"><label class="btn btn-primary">Back</label></button>
                    </div>
                </div> 
                <div>
                    <div class="pull-right">
                        <button class="btn btn-primary" type="submit">Save</button>
                    </div>
                </div>    
            </div>
            {{csrf_field()}}
        </form>
    </div>
<style type="text/css" media="screen">
.product-name{color: blue; font-weight: bold; text-decoration: none;}
.product-name:hover{color: red;font-weight: bold; text-decoration: none; }
</style>
@endsection