@extends('layout')
@section('content')
    <!-- Trending Area Start -->
    <div class="trending-area fix">
        <div class="container">
            <div class="row">
                <div class="trending-main col-lg-8">
                    <!-- Trending Tittle -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="trending-tittle">
                                <strong>Từ khóa tìm kiếm : {{$keywords}}</strong>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-9">
                        @foreach($search as $key => $cate_blog)
                            <!-- Trending Bottom -->
                            <div class="trending-bottom">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="single-bottom mb-35">
                                            <div class="trend-bottom-img mb-30">
                                                <img src="{{asset('uploads/'.$cate_blog->image)}}" alt="{{Str::slug($cate_blog->title)}}">
                                            </div>
                                            <div class="trend-bottom-cap">
                                                <span class="color1">{{$cate_blog->category->title_cate}}</span>
                                                <h4><a href="{{route('bai-viet.show',['id'=>$cate_blog->id])}}">{{$cate_blog->title}}</a></h4>
                                                <h4><a>{!!$cate_blog->short_desc!!}</a></h4>
                                                <br>
                                                <a href="{{route('bai-viet.show',['id'=>$cate_blog->id])}}" style="color:black">Đọc tiếp...</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        <!-- Trending Area End -->
            <div class="col-lg-4">
                <hr>
                <div class="col-lg-7">
                    <h4>Danh mục gợi ý</h4>
                    <ul>
                        @foreach($category as $hey => $recomment)
                        <li><a href="{{route('danh-muc.show',['id'=>$recomment->id, 'slug'=>Str::slug($recomment->title_cate)])}}"  style="color:black;">{{$recomment->title_cate}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
    
@endsection