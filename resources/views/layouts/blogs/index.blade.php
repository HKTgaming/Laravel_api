@extends('layouts.app')

@section('content')
    <div class="row">
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
                        <table class="table table-hover table-responsive">
                            <thead>
                                <tr class="text-black">
                                    <th scope="col">Mã bài viết</th>
                                    <th scope="col">Tên bài viết</th>
                                    <th scope="col">Lượt xem</th>
                                    <th scope="col">Hình ảnh</th>
                                    <th scope="col">Mô tả ngắn</th>
                                    <th scope="col">Nội dung</th>
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
                                    <td>{{$post->views}}</td>
                                    <td><img src="{{asset('/uploads/'.$post->image)}}" style="width:100px"></td>
                                    <td>{!!(substr($post->short_desc,0,90))!!}</td>
                                    <td>{!!(substr($post->desc,0,90))!!}</td>
                                    <td>{{$post->category->title_cate}}</td>
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
                        </div>
                    </div>
                </div>
                {{$blogs->links()}}
            </div>
        </div>
    </div>
@endsection
