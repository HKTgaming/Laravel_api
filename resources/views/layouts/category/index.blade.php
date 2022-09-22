@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
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
                                        <form action="{{route('category.edit',[$cate->id])}}" method="POST">
                                            @method('PUT')
                                            @csrf
                                            <input class="btn btn-sm btn-primary" type="submit" value="Chỉnh sửa"></input>
                                        </form>
                                    </td>
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
