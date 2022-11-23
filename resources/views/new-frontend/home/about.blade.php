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
                                <h4>About Us</h4>
                                <div class="breadcrumb__links">
                                    <a href="./index.html">Home</a>
                                    <span>About Us</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Breadcrumb Section End -->

            <!-- About Section Begin -->
            <section class="about spad">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="about__pic wow fadeInUp" data-wow-delay="0.1s">
                                <img onerror="handleError(this);"src="{{asset('html/img/about/about-us.jpg')}}" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="about__item">
                                <h4>Who We Are ?</h4>
                                <p>Contextual advertising programs sometimes have strict policies that need to be adhered too. Let’s take Google as an example.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="about__item">
                                <h4>Who We Do ?</h4>
                                <p>In this digital generation where information can be easily obtained within seconds, business cards still have retained their importance.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="about__item">
                                <h4>Why Choose Us</h4>
                                <p>A two or three storey house is the ideal way to maximise the piece of earth on which our home sits, but for older or infirm people.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About Section End -->

            <section class="spad about-us">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="about__text">
                                <h4>Welcome to vinaika kurti Store</h4>
                                <p>
                                    "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta
                                    sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui
                                    dolorem ipsum quia dolor sit amet.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="about__img">
                                <img onerror="handleError(this);"src="{{asset('html/img/product/about-img.jpg')}}" alt="image" />
                                <img onerror="handleError(this);"class="right__img" src="{{asset('html/img/product/about-img2.jpg')}}" alt="image" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="spad-70 about-us">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="about__img">
                                <img onerror="handleError(this);"src="{{asset('html/img/product/about-img3.jpg')}}" alt="image" />
                                <img onerror="handleError(this);"class="right__img" src="{{asset('html/img/product/about-img4.jpg')}}" alt="image" />
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="about__text">
                                <h4>Welcome to vinaika jewellery Store</h4>
                                <p>
                                    "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta
                                    sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui
                                    dolorem ipsum quia dolor sit amet.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Testimonial Section Begin -->
            <section class="testimonial">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 p-0 wow fadeInLeft" data-wow-delay="0.1s">
                            <div class="testimonial__text">
                                <span class="icon_quotations"></span>
                                <p>“Going out after work? Take your butane curling iron with you to the office, heat it up, style your hair before you leave the office and you won’t have to make a trip back home.”</p>
                                <div class="testimonial__author">
                                    <div class="testimonial__author__pic">
                                        <img onerror="handleError(this);"src="{{asset('html/img/about/testimonial-author.jpg')}}" alt="" />
                                    </div>
                                    <div class="testimonial__author__text">
                                        <h5>Augusta Schultz</h5>
                                        <p>Fashion Design</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 p-0 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="testimonial__pic set-bg" data-setbg="{{asset('html/img/about/testimonial-pic.jpg')}}"></div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Testimonial Section End -->

            <!-- Team Section Begin -->
            <section class="team spad">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="heading-box section-title">
                                <span>Our Team</span>
                                <h3>Meet Our Team</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="team__item">
                                <img onerror="handleError(this);"src="{{asset('html/img/about/team-1.jpg')}}" alt="" />
                                <h4>John Smith</h4>
                                <span>Fashion Design</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="team__item">
                                <img onerror="handleError(this);"src="{{asset('html/img/about/team-2.jpg')}}" alt="" />
                                <h4>Christine Wise</h4>
                                <span>C.E.O</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="team__item">
                                <img onerror="handleError(this);"src="{{asset('html/img/about/team-3.jpg')}}" alt="" />
                                <h4>Sean Robbins</h4>
                                <span>Manager</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
                            <div class="team__item">
                                <img onerror="handleError(this);"src="{{asset('html/img/about/team-4.jpg')}}" alt="" />
                                <h4>Lucy Myers</h4>
                                <span>Delivery</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Team Section End -->

            <!-- Client Section Begin -->
            <section class="clients spad">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="heading-box section-title">
                                <span>Partner</span>
                                <h3>Happy Clients</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-4 col-6 wow fadeInUp" data-wow-delay="0.3s">
                            <a href="#" class="client__item"><img onerror="handleError(this);"src="{{asset('html/img/clients/client-1.png')}}" alt="" /></a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-4 col-6 wow fadeInUp" data-wow-delay="0.5s">
                            <a href="#" class="client__item"><img onerror="handleError(this);"src="{{asset('html/img/clients/client-2.png')}}" alt="" /></a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-4 col-6 wow fadeInUp" data-wow-delay="0.7s">
                            <a href="#" class="client__item"><img onerror="handleError(this);"src="{{asset('html/img/clients/client-3.png')}}" alt="" /></a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-4 col-6 wow fadeInUp" data-wow-delay="0.9s">
                            <a href="#" class="client__item"><img onerror="handleError(this);"src="{{asset('html/img/clients/client-4.png')}}" alt="" /></a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-4 col-6 wow fadeInUp" data-wow-delay="0.3s">
                            <a href="#" class="client__item"><img onerror="handleError(this);"src="{{asset('html/img/clients/client-5.png')}}" alt="" /></a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-4 col-6 wow fadeInUp" data-wow-delay="0.5s">
                            <a href="#" class="client__item"><img onerror="handleError(this);"src="{{asset('html/img/clients/client-6.png')}}" alt="" /></a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-4 col-6 wow fadeInUp" data-wow-delay="0.7s">
                            <a href="#" class="client__item"><img onerror="handleError(this);"src="{{asset('html/img/clients/client-7.png')}}" alt="" /></a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-4 col-6 wow fadeInUp" data-wow-delay="0.9s">
                            <a href="#" class="client__item"><img onerror="handleError(this);"src="{{asset('html/img/clients/client-8.png')}}" alt="" /></a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Client Section End -->
@endsection
