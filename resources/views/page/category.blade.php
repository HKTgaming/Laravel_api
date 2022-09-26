@extends('layout')
@section('content')
    <!-- Trending Area Start -->
    <div class="trending-area fix">
        <div class="container">
            <div class="trending-main">
                <!-- Trending Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="trending-tittle">
                            @foreach($category_blog as $key => $cate_blog)
                            <strong>{{$cate_blog->category->title_cate}}</strong>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-9">
                    @foreach($category_blog as $key => $cate_blog)
                        
                        <!-- Trending Bottom -->
                        <div class="trending-bottom">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                        <div class="trend-bottom-img mb-30">
                                            <img src="{{asset('/uploads/'.$cate_blog->image)}}" alt="{{Str::slug($cate_blog->title)}}">
                                        </div>
                                        <div class="trend-bottom-cap">
                                            <span class="color1">{{$cate_blog->title}}</span>
                                            <h4><a href="details.html">{!!$cate_blog->short_desc!!}</a></h4>
                                            <br>
                                            <a href="{{route('bai-viet.show',['id'=>$cate_blog->id])}}" style="color:black">Đọc tiếp...</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Trending Area End -->
@endsection