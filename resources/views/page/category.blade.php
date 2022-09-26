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
                            <strong>Trending now</strong>
                            <!-- <p>Rem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                            <div class="trending-animated">
                                <ul id="js-news" class="js-hidden">
                                    <li class="news-item">Bangladesh dolor sit amet, consectetur adipisicing elit.</li>
                                    <li class="news-item">Spondon IT sit amet, consectetur.......</li>
                                    <li class="news-item">Rem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-9">
                        <!-- Trending Bottom -->
                        <div class="trending-bottom">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                    @foreach($category_blog as $key => $cate_blog)
                                    <div class="trend-bottom-img mb-30">
                                            <img src="{{asset('uploads/'.$cate_blog->image)}}" alt="">
                                        </div>
                                        <div class="trend-bottom-cap">
                                            <span class="color1">{{$cate_blog->title}}</span>
                                            <h4><a href="details.html">{!!$cate_blog->short_desc!!}</a></h4>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    <!-- Trending Area End -->
@endsection