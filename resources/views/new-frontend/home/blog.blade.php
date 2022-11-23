@extends('new-frontend.layout.app')
@section('content')

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Our Blog</h4>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Home</a>
                            <span>Our Blog</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                @foreach ($blogs as $blog)
                <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <a href="blog-details.html">
                                <img onerror="handleError(this);"class="blog__item__pic_blog" src="{{ asset('file/'.$blog->image) }}" />
                            </a>
                            <div class="blog__item__text">
                                <span><img onerror="handleError(this);"src="{{ asset('html/img/icon/calendar.png') }}" alt="" /> {{date('d F Y', strtotime($blog->published_on) )}}</span>
                                <h5>{{$blog->title}}</h5>
                                <a class="btn product__btn wow bounce" data-wow-delay="0.5s" href="{{ route('newBlogDetails', $blog->id) }}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                
                {{-- <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <a href="blog-details.html">
                                <img onerror="handleError(this);"class="blog__item__pic_blog" src="img/blog/blog-1.jpg" />
                            </a>
                            <div class="blog__item__text">
                                <span><img onerror="handleError(this);"src="img/icon/calendar.png" alt="" /> 16 May 2022</span>
                                <h5>What Curling Irons Are The Best Ones</h5>
                                <a class="btn product__btn wow bounce" data-wow-delay="0.5s" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                   <div class="blog__item">
                        <div class="blog__item__pic">
                            <a href="blog-details.html">
                                <img onerror="handleError(this);"class="blog__item__pic_blog" src="img/blog/blog-1.jpg" />
                            </a>
                            <div class="blog__item__text">
                                <span><img onerror="handleError(this);"src="img/icon/calendar.png" alt="" /> 16 May 2022</span>
                                <h5>What Curling Irons Are The Best Ones</h5>
                                <a class="btn product__btn wow bounce" data-wow-delay="0.5s" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <a href="blog-details.html">
                                <img onerror="handleError(this);"class="blog__item__pic_blog" src="img/blog/blog-1.jpg" />
                            </a>
                            <div class="blog__item__text">
                                <span><img onerror="handleError(this);"src="img/icon/calendar.png" alt="" /> 16 May 2022</span>
                                <h5>What Curling Irons Are The Best Ones</h5>
                                <a class="btn product__btn wow bounce" data-wow-delay="0.5s" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <a href="blog-details.html">
                                <img onerror="handleError(this);"class="blog__item__pic_blog" src="img/blog/blog-1.jpg" />
                            </a>
                            <div class="blog__item__text">
                                <span><img onerror="handleError(this);"src="img/icon/calendar.png" alt="" /> 16 May 2022</span>
                                <h5>What Curling Irons Are The Best Ones</h5>
                                <a class="btn product__btn wow bounce" data-wow-delay="0.5s" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <a href="blog-details.html">
                                <img onerror="handleError(this);"class="blog__item__pic_blog" src="img/blog/blog-1.jpg" />
                            </a>
                            <div class="blog__item__text">
                                <span><img onerror="handleError(this);"src="img/icon/calendar.png" alt="" /> 16 May 2022</span>
                                <h5>What Curling Irons Are The Best Ones</h5>
                                <a class="btn product__btn wow bounce" data-wow-delay="0.5s" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <a href="blog-details.html">
                                <img onerror="handleError(this);"class="blog__item__pic_blog" src="img/blog/blog-1.jpg" />
                            </a>
                            <div class="blog__item__text">
                                <span><img onerror="handleError(this);"src="img/icon/calendar.png" alt="" /> 16 May 2022</span>
                                <h5>What Curling Irons Are The Best Ones</h5>
                                <a class="btn product__btn wow bounce" data-wow-delay="0.5s" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <a href="blog-details.html">
                                <img onerror="handleError(this);"class="blog__item__pic_blog" src="img/blog/blog-1.jpg" />
                            </a>
                            <div class="blog__item__text">
                                <span><img onerror="handleError(this);"src="img/icon/calendar.png" alt="" /> 16 May 2022</span>
                                <h5>What Curling Irons Are The Best Ones</h5>
                                <a class="btn product__btn wow bounce" data-wow-delay="0.5s" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                   <div class="blog__item">
                        <div class="blog__item__pic">
                            <a href="blog-details.html">
                                <img onerror="handleError(this);"class="blog__item__pic_blog" src="img/blog/blog-1.jpg" />
                            </a>
                            <div class="blog__item__text">
                                <span><img onerror="handleError(this);"src="img/icon/calendar.png" alt="" /> 16 May 2022</span>
                                <h5>What Curling Irons Are The Best Ones</h5>
                                <a class="btn product__btn wow bounce" data-wow-delay="0.5s" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- Blog Section End -->
@endsection