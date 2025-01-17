@extends('layout')
@section('content')
<main>
    <!-- About US Start -->
    <div class="about-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Trending Tittle -->
                    <div class="about-right mb-90">
                        <div class="about-img">
                            <img src="{{asset('/uploads/'.$post_blog->image)}}" alt="{{Str::slug($post_blog->title)}}">
                        </div>
                        <div class="section-tittle mb-30 pt-30">
                            <h3>{{$post_blog->title}}</h3>
                            <p>view:{{$post_blog->views}}</p>
                        </div>
                        <div class="about-prea">
                            <p class="about-pera1 mb-25">{!!$post_blog->desc!!}</p>
                        
                        </div> 
                        
                        <div class="social-share pt-30">
                            <div class="section-tittle">
                                <h3 class="mr-20">Share:</h3>
                                <ul>
                                    <li><a href="#"><img src="{{asset('img/news/icon-ins.png')}}" alt=""></a></li>
                                    <li><a href="#"><img src="{{asset('img/news/icon-fb.png')}}" alt=""></a></li>
                                    <li><a href="#"><img src="{{asset('img/news/icon-tw.png')}}" alt=""></a></li>
                                    <li><a href="#"><img src="{{asset('img/news/icon-yo.png')}}" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- From -->
                    <div class="row">
                        <div class="col-lg-8">
                            <form class="form-contact contact_form mb-80" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea class="form-control w-100 error" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder="Enter Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control error" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control error" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input class="form-control error" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <button type="submit" class="button button-contactForm boxed-btn">Gửi bình luận</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <!-- Section Tittle -->
                    <div class="section-tittle mb-40">
                        <h3>Follow Us</h3>
                    </div>
                    <!-- Flow Socail -->
                    <div class="single-follow mb-45">
                        <div class="single-box">
                            <div class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="#"><img src="{{asset('img/news/icon-fb.png')}}" alt=""></a>
                                </div>
                                <div class="follow-count">  
                                    <span>8,045</span>
                                    <p>Fans</p>
                                </div>
                            </div> 
                            <div class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="#"><img src="{{asset('img/news/icon-tw.png')}}" alt=""></a>
                                </div>
                                <div class="follow-count">
                                    <span>8,045</span>
                                    <p>Fans</p>
                                </div>
                            </div>
                                <div class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="#"><img src="{{asset('img/news/icon-ins.png')}}" alt=""></a>
                                </div>
                                <div class="follow-count">
                                    <span>8,045</span>
                                    <p>Fans</p>
                                </div>
                            </div>
                            <div class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="#"><img src="{{asset('img/news/icon-yo.png')}}" alt=""></a>
                                </div>
                                <div class="follow-count">
                                    <span>8,045</span>
                                    <p>Fans</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- New Poster -->
                    <div class="news-poster d-none d-lg-block">
                        <img src="{{asset('img/news/news_card.jpg')}}" alt="">
                    </div>

                    <hr>
                    <h3>Bài viết liên quan</h3>
                    @foreach($post_related as $key =>$new)
                    <a href="{{route('bai-viet.show',['id'=>$new->id])}}">
                        <div class="might-grid">
                            <img src="{{asset('uploads/'.$new->image)}}" alt="" style="width:100px">
                        </div>
                        <div class="might-top">
                            <p>{!! substr($new->short_desc,0,100) !!}...</p>
                        </div>
                        <a href="{{route('bai-viet.show',['id'=>$new->id])}}" style="color:black">Đọc tiếp</a>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- About US End -->
</main>
@endsection