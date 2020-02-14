@extends('admin.layouts.app')
@section('content')
    <div>
        <ol class="breadcrumb">
            <li><a style="text-decoration: none;color: #000;" href="{{route('home')}}">Home</a></li>&nbsp;/&nbsp;
            <li><a style="text-decoration: none;color: #000;" href="{{route('laptop')}}">List Category</a></li>
        </ol>
    </div>

    <div class="view-list-categories">

        <table class="table table-bordered text-center">
            <thead>
            <th>Id</th>
            <th>category name</th>
            <th>parent id</th>
            <th>Image</th>
            <th>Description</th>
            <th><a href="{{route('them-danh-muc')}}" class="btn btn-primary" ><i class="fas fa-calendar-plus"></i>&nbsp;&nbsp;New Category</a></th>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->category_name}}</td>
                    <td>{{$category->parent}}</td>
                    <td><img class="image-category" src="{{url('/')}}/{{$category->image_category}}"></td>
                    <td>{{$category->description}}</td>
                    <td>
                        <a href="{{route('sua-danh-muc',$category->id)}}" class="btn btn-primary"><i class="fas fa-tools"></i></a>
                        <a href="{{route('xoa-danh-muc',$category->id)}}" class="btn btn-primary"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection