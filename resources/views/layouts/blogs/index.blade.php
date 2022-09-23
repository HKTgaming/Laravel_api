@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Danh sách bài viết
                    <button class="btn bnt-primary"><a href="{{url('/admin')}}">Quay lại trang chủ</a></button>
                    <button class="btn bnt-primary"><a href="{{route('blogs.create')}}">Thêm bài viết</a></button>
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
                                    <th scope="col">Mã bài viết</th>
                                    <th scope="col">Tên bài viết</th>
                                    <th scope="col">Mô tả ngắn</th>
                                    <th scope="col">Nội dung</th>
                                    <th scope="col">Hình ảnh</th>
                                    <th scope="col">Tên danh mục</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($blogs as $post)
                                <tr>
                                    <td>{{$post->id}}</td>
                                    <td>{{$post->title}}</td>
                                    <td>{{$post->short_desc}}</td>
                                    <td>{{$post->desc}}</td>
                                    <td>{{$post->image}}</td>
                                    <td>{{$post->post_category_id}}</td>
                                    <td>
                                        <form action="{{route('blogs.destroy',[$post->id])}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <input class="btn btn-sm btn-primary" type="submit" value="Xóa"></input>
                                        </form>
                                    </td>
                                    <td>

                                        <a class="btn btn-sm btn-primary" type="submit" href="{{route('blogs.show',[$post->id])}}">Chỉnh sửa</a>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
