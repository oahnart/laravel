@extends('admin.layouts.app')

@section('content')
    <div>
        <ol class="breadcrumb">
            <li><a style="text-decoration: none;color: #000;" href="{{route('home')}}">Home</a></li>&nbsp;/&nbsp;
            <li><a style="text-decoration: none;color: #000;" href="{{route('laptop')}}">List Product</a></li>
        </ol>
    </div>

    <div class="view-list-product">
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>Id</th>
                    <th style="width: 500px;">Product name</th>
                    <th>Image</th>
                    <th>Published</th>
                    <th>Category</th>
                    <th>ordering</th>
                    <th>price</th>
                    <th>sale_price</th>
                    <th>created_at</th>
                    <th nowrap><a href="{{route('them-san-pham')}}" class="btn btn-primary" ><i class="fas fa-laptop-medical"></i>&nbsp;&nbsp;New Product</a></th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td style="width: 500px;">{{$product->product_name}}</td>
                        <td nowrap><img class="product-image-intro" src="{{url('/')}}/{{$product->product_image_intro}}"></td>
                        <td nowrap>{{$product->published}}</td>
                        <td nowrap>{{$product->category_id}}</td>
                        <td nowrap>{{$product->ordering}}</td>
                        <td nowrap>{{$product->price}}</td>
                        <td nowrap>{{$product->sale_price}}</td>
                        <td nowrap>{{date('d-m-Y h:m', strtotime($product->created_at)) }}</td>
                        <th nowrap>
                            <a href="{{route('sua-san-pham',$product->id)}}" class="btn btn-primary"><i class="fas fa-tools"></i></a>
                            <a href="{{route('xoa-san-pham',$product->id)}}" class="btn btn-primary"><i class="fas fa-trash-alt"></i></a>
                            <a href="{{route('list-image',$product->id)}}" class="btn btn-primary"><i class="fas fa-folder-open"></i></a>
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection