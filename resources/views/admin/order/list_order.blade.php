@extends('admin.layouts.app')
@section('content')
<div style="margin-top: -47%;">
    <div>
        <ol class="breadcrumb">
            <li><a style="text-decoration: none;color: #000;" href="{{route('home')}}">Home</a></li>&nbsp;/&nbsp;
            <li><a style="text-decoration: none;color: #000;" href="{{route('laptop')}}">List Orders</a></li>
        </ol>
    </div>
    <div class="view-list-order">
        <table class="table table-bordered text-center">
            <thead>
            <tr>
                <th>Id</th>
                <th>Order number</th>
                <th>customer name</th>
                <th>Status</th>
                <th>Total</th>
                <th>View</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{$order->id}}</td>
                    <td></td>
                    <td>customer name</td>
                    <td>{{$order->status}}</td>
                    <td>{{$order->total}}</td>
                    <td><a href=" {{route('chi-tiet-don-hang',$order->id)}}" class="btn btn-primary"><i class="far fa-eye"></i></a></td>
                    <td><a href="{{route('delete-order',$order->id)}}" class="btn btn-primary"><i class="fas fa-trash-alt"></i></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection