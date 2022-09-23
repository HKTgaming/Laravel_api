@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cập nhật bài viết
                    <button class="btn bnt-primary"><a href="{{route('blogs.index')}}">Quay lại danh sách</a></button>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="panel-body">
                            <form action="{{route('blogs.update',[$blog->id])}}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label>Mã bài viết</label>
                                <input required name="id" class="form-control" value="{{$blog->id}}" placeholder="" readonly >
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Tiêu đề</label>
                                <input required name="title" value="{{$blog->title}}" class="form-control" placeholder="">
                            </div>
                            <br>

                            <div class="form-group">
                                <label>Hình ảnh</label>
                                <p><img src="{{asset('storage/app/public/'.$blog->image)}}"></p>
                                <input type="file" name="image" value="{{$blog->image}}" class="form-control" placeholder="">
                            </div>
                            <br>

                            <div class="form-group">
                                <label>Mô tả ngắn</label>
                                <textarea id="ckeditor_shortdesc" required name="short_desc" class="form-control" rows="5" placeholder="" style="resize:none">{{$blog->short_desc}}</textarea>
                            </div>
                            <br>

                            <div class="form-group">
                                <label>Nội dung</label>
                                <textarea id="ckeditor_desc" required name="desc" class="form-control" rows="5" placeholder="" style="resize:none">{{$blog->desc}}</textarea>
                            </div>
                            <br>

                            <div class="form-group">
                                <label>Danh mục</label>
                                <select name="post_category_id" class="form-control">
                                    @foreach($category as $key=>$cate)
                                    <option {{ $cate->id == $blog->post_category_id ? 'selected' : ''}} value="{{$cate->id}}">{{$cate->title_cate}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <br>

                            <div class="col-md-9">
                                <button name="btn_insert" type="submit" class="btn btn-success">Cập nhật</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
