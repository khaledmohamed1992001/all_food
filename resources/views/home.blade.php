@extends('master')
@section('content')
    <main>
        <!--? Hero Start -->
        <div class="slider-area ">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2">
                                <h2>Blog</h2><br> @if(!Auth::guest())
                                    <h4>Hello {{Auth::user()->name}}</h4>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--================Blog Area =================-->
        <section class="blog_area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mb-5 mb-lg-0">
                        <div class="blog_left_sidebar">
                            <article class="blog_item">
                                @if(!Auth::guest())
                                <form action="{{route('comments.store')}}" method="POST" class="blog_item_img" enctype="multipart/form-data">
                                    @csrf
                                    <textarea name="Comment" rows="10" placeholder="add a post" class="card-img rounded-0"></textarea>
                                    <label for="upload">upload a photo: </label><br>
                                    <input type="file" name="file" id="upload"><br><br>
                                    {{--                                    <a href="#" class="blog_item_date">--}}
                                    {{--                                        <h3>15</h3>--}}
                                    {{--                                        <p>Jan</p><br>--}}
                                    {{--                                        <h3>15</h3>--}}
                                    {{--                                        <p>Jan</p>--}}
                                    {{--                                    </a>--}}
                                    <button type="submit" class="btn">Add a post</button>
                                </form>
                                <br>
                                @if(count($comments)>=1)
                                <div class="blog_item">
                                    <h1 class="blog-head fon-effect-outline">your comments:</h1>
                                    <div class="blog_item_img">
                                        @foreach($comments as $comment)
                                            @if(Auth::user()->id == $comment->user_id)
                                                <h2>comment({{$comment->id}})</h2>
                                                <img class="card-img rounded-0" src="/assets/{{$comment->photo}}" alt="">
                                                <br><br>
                                                <h3>{{$comment->comment}}</h3>
                                                <p>Created_at:{{$comment->created_at}}</p>
                                                <a class="btn" href="{{route('comments.edit',$comment->id)}}" >Edit</a>
                                                <form action="{{route('comments.destroy', $comment->id)}}" method="post">
                                                    {{method_field('DELETE')}}
                                                    @csrf
                                                    <button class="btn">Delete</button>
                                                </form>
                                                <hr>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                @endif
                                @endif
                                <br>
                            </article>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget post_category_widget">
                                <h4 class="widget_title" style="color: #2d2d2d;">Category</h4>
                                <ul class="list cat-list">
                                    <li>
                                        <a href="#" class="d-flex">
                                            <p>Resaurant food</p>
                                            <p>(37)</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex">
                                            <p>Travel news</p>
                                            <p>(10)</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex">
                                            <p>Modern technology</p>
                                            <p>(03)</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex">
                                            <p>Product</p>
                                            <p>(11)</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex">
                                            <p>Inspiration</p>
                                            <p>21</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex">
                                            <p>Health Care (21)</p>
                                            <p>09</p>
                                        </a>
                                    </li>
                                </ul>
                            </aside>
                            <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title" style="color: #2d2d2d;">Recent Post</h3>
                                <div class="media post_item">
                                    <img src="assets/img/post/post_1.png" alt="post">
                                    <div class="media-body">
                                        <a href="blog_details.html">
                                            <h3 style="color: #2d2d2d;">From life was you fish...</h3>
                                        </a>
                                        <p>January 12, 2019</p>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="assets/img/post/post_2.png" alt="post">
                                    <div class="media-body">
                                        <a href="blog_details.html">
                                            <h3 style="color: #2d2d2d;">The Amazing Hubble</h3>
                                        </a>
                                        <p>02 Hours ago</p>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="assets/img/post/post_3.png" alt="post">
                                    <div class="media-body">
                                        <a href="blog_details.html">
                                            <h3 style="color: #2d2d2d;">Astronomy Or Astrology</h3>
                                        </a>
                                        <p>03 Hours ago</p>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="assets/img/post/post_4.png" alt="post">
                                    <div class="media-body">
                                        <a href="blog_details.html">
                                            <h3 style="color: #2d2d2d;">Asteroids telescope</h3>
                                        </a>
                                        <p>01 Hours ago</p>
                                    </div>
                                </div>
                            </aside>
                            <aside class="single_sidebar_widget newsletter_widget">
                                <h4 class="widget_title" style="color: #2d2d2d;">Follow us</h4>

{{--                                <form action="{{route('subscribe')}}" method="post">--}}
{{--                                    @csrf--}}
{{--                                    <input type="hidden" value="1" name="follow">--}}

{{--                                    <button name="subs" class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit">Subscribe</button>--}}
{{--                                </form>--}}
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Blog Area =================-->
    </main>
@endsection
