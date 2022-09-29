@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Danh sách danh mục
                    <button class="btn bnt-primary"><a href="{{url('/admin')}}">Quay lại trang chủ</a></button>
                    <button class="btn bnt-primary"><a href="{{route('category.create')}}">Thêm danh mục</a></button>
                </div>

                <div class="card-body">
                    @if (Session::has('status'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('status') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-black">
                                    <th scope="col">Mã danh mục</th>
                                    <th scope="col">Tên danh mục</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($category as $cate)
                                <tr>
                                    <td>{{$cate->id}}</td>
                                    <td>{{$cate->title_cate}}</td>
                                    <td>
                                        <form action="{{route('category.destroy',[$cate->id])}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <input class="btn btn-sm btn-primary" type="submit" value="Xóa"></input>
                                        </form>
                                    </td>
                                    <td>

                                        <a class="btn btn-sm btn-primary" type="submit" href="{{route('category.show',[$cate->id])}}">Chỉnh sửa</a>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{$category->links()}}
        </div>
    </div>
</div>
@endsection
