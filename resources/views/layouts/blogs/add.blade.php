@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Thêm bài viết
                    <button class="btn bnt-primary"><a href="{{route('blogs.index')}}">Quay lại danh sách</a></button>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="panel-body">
                            <form action="{{route('blogs.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Mã bài viết</label>
                                <input required name="id" class="form-control" placeholder="Auto Number" readonly >
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Tiêu đề</label>
                                <input required name="title" class="form-control" placeholder="">
                            </div>
                            <br>

                            <div class="form-group">
                                <label>Hình ảnh</label>
                                <input type="file" name="image" class="form-control" placeholder="">
                            </div>
                            <br>

                            <div class="form-group">
                                <label>Mô tả ngắn</label>
                                <textarea id="ckeditor_shortdesc" required name="short_desc" class="form-control" rows="5" placeholder="" style="resize:none"></textarea>
                            </div>
                            <br>

                            <div class="form-group">
                                <label>Nội dung</label>
                                <textarea id="ckeditor_desc" required name="desc" class="form-control" rows="5" placeholder="" style="resize:none"></textarea>
                            </div>
                            <br>

                            <div class="form-group">
                                <label>Danh mục</label>
                                <select name="post_category_id" class="form-control">
                                    @foreach($category as $key=>$cate)
                                    <option value="{{$cate->id}}">{{$cate->title_cate}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <br>

                            <div class="col-md-9">
                                <button name="btn_insert" type="submit" class="btn btn-success">Thêm mới</button>
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
