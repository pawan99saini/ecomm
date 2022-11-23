@extends('new-frontend.layout.app')
@section('content')
       <!-- Main Slider Start -->
       <div class="sticky-header-next-sec ec-main-slider section section-space-pb">
        <div class="bcontent">
            <div id="carouselExample" class="carousel slide carousel-fade" data-ride="carousel">
                <!--Carousel Indicators-->
                
                <!--Carousel Slides-->
                <div class="carousel-inner">
                    @foreach($sliders as $k=>$slider)
                    <div class="carousel-item {{ $k==0 ? 'active' : ''}} ">
                        <img src="{{ asset('/file/'.$slider->image) }}"
                            alt="Lake">
                        <div class="carousel-caption banner-caption">
                            <h5 class="position-relative"><span class="position-absolute">{{ $slider->title }}</h5>
                            <p>{{ $slider->description }}</p>
                            <a href="category.html" class="btn btn-lg btn-secondary">Shop Now</a>
                        </div>
                    </div>
                   @endforeach
                </div>
                <!--Carousel Previous Next Controls-->
                <a class="carousel-control-prev" href="#carouselExample" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#carouselExample" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
        
    </div>
    <!-- Main Slider End -->

    <section class="banner-text">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>New Arrivals</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                    <a href="category.html" class="btn btn-lg ">Shop Now</a>
                </div>
            </div>
        </div>

    </section>
    <!-- Product Area Start -->
    <section class="section section-space-p">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">See What's New</h2>
                        <h2 class="ec-title under-title">See What's New</h2>
                        <p class="sub-title">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                    </div>
                </div>

            </div>

            <div class="row p-i-2">
           @foreach($products as $product)
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content" data-animation="fadeInUp">                   
                    <div class="position-relative cata-img-wrapper">
                        <a href="Product.html" target="_blank">
                          <img
                            src="{{ asset('/file/'.$product->product_image) }}"
                          />
  
                          <div class="cata-add-cart position-absolute">
                            <a href="#" class="cata-add-cart">Add to cart</a>
                            
                          </div>
                          <button class="float-right heart position-absolute">
                            <i class="ecicon eci-heart-o"></i>
                          </button>
                        </a>
                      </div>
  
                      <span class="sale-label"> 30% OFF </span>
                      <div class="mt-8px">
                        <a class="product-label" href=""
                          ><span>{{ $product->name }}</span></a
                        >
                        <div class="product-price">
                          <span>&#8377;{{ $product->mrp_price }}</span>
                        </div>
                      </div>
                </div>

@endforeach

            </div>

        </div>
    </section>
    <!-- Product Area End -->

    <!-- Banner Section Start -->
    <section class="ec-banner section section-space-p">
        <h2 class="d-none">Banner</h2>
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title">
                    <h2 class="ec-bg-title">Iconic Collection</h2>
                    <h2 class="ec-title under-title">Iconic Collection</h2>
                    <p class="sub-title">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                </div>
            </div>

        </div>

        <!-- ec Banners Start -->

        <div class="product-gallary">
            <div class="box">
                <img src="https://source.unsplash.com/1000x800">
                <span class="img-lay">DISCOVER</span>
            </div>
            <div class="box">
                <img src="https://source.unsplash.com/1000x802">
                <span class="img-lay">DISCOVER</span>
            </div>
            <div class="box">
                <img src="https://source.unsplash.com/1000x804">
                <span class="img-lay">DISCOVER</span>
            </div>
            <div class="box">
                <img src="https://source.unsplash.com/1000x806">
                <span class="img-lay">DISCOVER</span>
            </div>
        </div>

        <!-- ec Banners End -->


    </section>
    <!-- Banner Section End -->

    <!-- Iconic Collection Start -->
    <section class="ec-banner section section-space-p iconic">
        <div class="container">

            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Iconic Collection</h2>
                        <h2 class="ec-title under-title">Iconic Collection</h2>
                        <p class="sub-title">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                    </div>
                </div>

            </div>


            <div class="row">

                <div class="col-lg-4 col-md-6 margin-b-30" data-animation="fadeIn">
                    <div class="iconic-box">
                        <video width="" height="" style="height: 100%;" autoplay loop muted controls="false">
                            <source src="{{asset('front/video/1.mp4')}}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 margin-b-30" data-animation="fadeIn">
                    <div class="iconic-box">
                        <img src="{{asset('front/images/product-image/img1.jpg')}}" alt="" />
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 margin-b-30 text-center" data-animation="fadeIn">
                    <div class="iconic-box pt-3 px-3">
                        <h4 class="font-weight-bold w-100">Modern Style</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s</p>
                        <div class="w-100">
                            <a href="#" class="btn btn-lg btn-secondary">Discover Now</a>
                        </div>
                    </div>
                </div>

            </div>


            <div class="row">

                <div class="col-lg-4 col-md-6 margin-b-30" data-animation="fadeIn">
                    <div class="iconic-box">
                        <img src="{{asset('front/images/product-image/img2.jpg')}}" alt="" />
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 margin-b-30 text-center" data-animation="fadeIn">
                    <div class="iconic-box pt-3 px-3">
                        <h4 class="font-weight-bold w-100">Western Style</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s</p>
                        <div class="w-100">
                            <a href="#" class="btn btn-lg btn-secondary">Discover Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 margin-b-30" data-animation="fadeIn">
                    <div class="iconic-box">
                        <video width="" height="" style="height: 100%;" autoplay loop muted>
                            <source src="{{asset('front/video/1.mp4')}}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>

            </div>


        </div>
    </section>
    <!-- Iconic Collection End -->


    <!-- Video Section Start -->
    <section class="ec-banner section mt-5" style="background: #f9f9f9;">
        <div class="container">

            <div class="row">
                <div class="col-md-12 text-center mt-5 mb-3">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Lorem Ipsum</h2>
                        <h2 class="ec-title under-title">Lorem Ipsum</h2>
                        <p class="sub-title">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                    </div>
                </div>

            </div>


            <div class="row">
                <div class="col-lg-12 col-md-12 text-center mb-5" data-animation="fadeInUp">

                    <video width="" height="" style="width:100%" controls autoplay loop muted>
                        <source src="{{asset('front/video/2.mp4')}}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video><br /><br />
                </div>
            </div>
        </div>
    </section>
    <!-- Video Section End -->
    <br />

    <!-- Iconic Collection2 Start -->
    <section class="ec-banner section section-space-p iconic">
        <div class="container">

            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Lorem Ipsum</h2>
                        <h2 class="ec-title under-title">Lorem Ipsum</h2>
                        <p class="sub-title">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                    </div>
                </div>

            </div>


            <div class="row">

                <div class="col-lg-7 col-md-6 margin-b-30">
                    <div class="iconic-box h-auto" data-animation="fadeInUp">
                        <video width="" height="" style="height: 100%; width:100%;" autoplay loop muted>
                            <source src="{{asset('front/video/1.mp4')}}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <div class="iconic-box2-content">
                            <h4 class="font-weight-bold w-100 text-white">Lorem Ipsum</h4>
                            <img class="my-3" width="100" src="{{asset('front/images/icons/icon-divider-dark.svg')}}" alt="" />
                            <p class="w-100 text-white">Lorem Ipsum is dummy text</p>
                            <div class="w-100 text-right">
                                <a href="#" class="btn btn-lg btn-secondary discover-more">Discover More</a>
                            </div>
                        </div>
                    </div>
                    <div class="iconic-box" style="height:360px;" data-animation="fadeInUp">
                        <img src="{{asset('front/images/product-image/img4.jpg')}}" alt="" />
                        <div class="iconic-box2-content">
                            <h4 class="font-weight-bold w-100 text-white">Lorem Ipsum</h4>
                            <img class="my-3" width="100" src="{{asset('front/images/icons/icon-divider-dark.svg')}}" alt="" />
                            <p class="w-100 text-white">Lorem Ipsum is dummy text</p>
                            <div class="w-100 text-right">
                                <a href="#" class="btn btn-lg btn-secondary discover-more"><i class="arrow"></i></a>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-lg-5 col-md-6 margin-b-30" data-animation="fadeInUp">
                    <div class="iconic-box h-auto" data-animation="fadeInUp">
                        <img src="{{asset('front/images/product-image/img1.jpg')}}" alt="" />
                        <div class="iconic-box2-content">
                            <h4 class="font-weight-bold w-100 text-white">Lorem Ipsum</h4>
                            <img class="my-3" width="100" src="{{asset('front/images/icons/icon-divider-dark.svg')}}" alt="" />
                            <p class="w-100 text-white">Lorem Ipsum is dummy text</p>
                            <div class="w-100 text-right">
                                <a href="#" class="btn btn-lg btn-secondary discover-more"><i class="arrow"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="iconic-box h-auto" data-animation="fadeInUp">
                        <img src="{{asset('front/images/product-image/img3.jpg')}}" alt="" />
                        <div class="iconic-box2-content">
                            <h4 class="font-weight-bold w-100 text-white">Lorem Ipsum</h4>
                            <img class="my-3" width="100" src="{{asset('front/images/icons/icon-divider-dark.svg')}}" alt="" />
                            <p class="w-100 text-white">Lorem Ipsum is dummy text</p>
                            <div class="w-100 text-right">
                                <a href="#" class="btn btn-lg btn-secondary discover-more">Discover More</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <br /><br />
        </div>
    </section>
    <!-- Iconic Collection2 End -->


    <!-- testmonial Start -->

    <section class="position-relative show-on-mob">
        <picture class="hide-on-mob">
            <source
                srcset="https://cdn.builder.io/api/v1/image/assets%2F5c3601e6fb8a4293906c42a2be717f0e%2F9ef7504ac88d4e3ea5b8eda670be5b62?format=webp&amp;width=100 100w, https://cdn.builder.io/api/v1/image/assets%2F5c3601e6fb8a4293906c42a2be717f0e%2F9ef7504ac88d4e3ea5b8eda670be5b62?format=webp&amp;width=200 200w, https://cdn.builder.io/api/v1/image/assets%2F5c3601e6fb8a4293906c42a2be717f0e%2F9ef7504ac88d4e3ea5b8eda670be5b62?format=webp&amp;width=400 400w, https://cdn.builder.io/api/v1/image/assets%2F5c3601e6fb8a4293906c42a2be717f0e%2F9ef7504ac88d4e3ea5b8eda670be5b62?format=webp&amp;width=800 800w, https://cdn.builder.io/api/v1/image/assets%2F5c3601e6fb8a4293906c42a2be717f0e%2F9ef7504ac88d4e3ea5b8eda670be5b62?format=webp&amp;width=1200 1200w, https://cdn.builder.io/api/v1/image/assets%2F5c3601e6fb8a4293906c42a2be717f0e%2F9ef7504ac88d4e3ea5b8eda670be5b62?format=webp&amp;width=1600 1600w, https://cdn.builder.io/api/v1/image/assets%2F5c3601e6fb8a4293906c42a2be717f0e%2F9ef7504ac88d4e3ea5b8eda670be5b62?format=webp&amp;width=2000 2000w, https://cdn.builder.io/api/v1/image/assets%2F5c3601e6fb8a4293906c42a2be717f0e%2F9ef7504ac88d4e3ea5b8eda670be5b62?format=webp&amp;width=998 998w"
                type="image/webp"><img role="presentation" loading="lazy" class="builder-image css-12153wi"
                src="https://cdn.builder.io/api/v1/image/assets%2F5c3601e6fb8a4293906c42a2be717f0e%2F9ef7504ac88d4e3ea5b8eda670be5b62?width=2000"
                srcset="https://cdn.builder.io/api/v1/image/assets%2F5c3601e6fb8a4293906c42a2be717f0e%2F9ef7504ac88d4e3ea5b8eda670be5b62?width=100 100w, https://cdn.builder.io/api/v1/image/assets%2F5c3601e6fb8a4293906c42a2be717f0e%2F9ef7504ac88d4e3ea5b8eda670be5b62?width=200 200w, https://cdn.builder.io/api/v1/image/assets%2F5c3601e6fb8a4293906c42a2be717f0e%2F9ef7504ac88d4e3ea5b8eda670be5b62?width=400 400w, https://cdn.builder.io/api/v1/image/assets%2F5c3601e6fb8a4293906c42a2be717f0e%2F9ef7504ac88d4e3ea5b8eda670be5b62?width=800 800w, https://cdn.builder.io/api/v1/image/assets%2F5c3601e6fb8a4293906c42a2be717f0e%2F9ef7504ac88d4e3ea5b8eda670be5b62?width=1200 1200w, https://cdn.builder.io/api/v1/image/assets%2F5c3601e6fb8a4293906c42a2be717f0e%2F9ef7504ac88d4e3ea5b8eda670be5b62?width=1600 1600w, https://cdn.builder.io/api/v1/image/assets%2F5c3601e6fb8a4293906c42a2be717f0e%2F9ef7504ac88d4e3ea5b8eda670be5b62?width=2000 2000w, https://cdn.builder.io/api/v1/image/assets%2F5c3601e6fb8a4293906c42a2be717f0e%2F9ef7504ac88d4e3ea5b8eda670be5b62?width=998 998w"
                sizes="(max-width: 998px) 100vw, 143vw">
        </picture>


        <div class="section ec-test-section section-space-ptb-100 section-space-m client-review" id="reviews">
            <div class="container fadeInUp">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="section-title mb-0">
                            <!-- <h2 class="ec-bg-title">Testimonial</h2> -->
                            <div class="client-title">
                                <p class="secondary-title">Most Loved</p>
                                <h2 class="main-title">Day-List</h2>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="ec-test-outer">
                        <ul id="ec-testimonial-slider">
                            <li class="ec-test-item rounded-border">
                                <div class="ec-test-inner">
                                    <div class="ec-test-content">
                                        <div class="ec-test-rating text-left mb-3">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                        </div>
                                        <div class="ec-test-desc text-left">Lorem Ipsum is simply dummy text of the
                                            printing and
                                            typesetting industry.</div>
                                        <div class="ec-test-name text-right">-Pankaj Rathore</div>
                                    </div>
                                </div>
                            </li>
                            <li class="ec-test-item rounded-border">
                                <div class="ec-test-inner">
                                    <div class="ec-test-content">
                                        <div class="ec-test-rating text-left mb-3">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                        </div>
                                        <div class="ec-test-desc text-left">Lorem Ipsum is simply dummy text of the
                                            printing and
                                            typesetting industry.</div>
                                        <div class="ec-test-name text-right">-Pankaj Rathore</div>
                                    </div>
                                </div>
                            </li>
                            <li class="ec-test-item rounded-border">
                                <div class="ec-test-inner">
                                    <div class="ec-test-content">
                                        <div class="ec-test-rating text-left mb-3">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                        </div>
                                        <div class="ec-test-desc text-left">Lorem Ipsum is simply dummy text of the
                                            printing and
                                            typesetting industry.</div>
                                        <div class="ec-test-name text-right">-Pankaj Rathore</div>
                                    </div>
                                </div>
                            </li>
                            <li class="ec-test-item rounded-border">
                                <div class="ec-test-inner">
                                    <div class="ec-test-content">
                                        <div class="ec-test-rating text-left mb-3">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                        </div>
                                        <div class="ec-test-desc text-left">Lorem Ipsum is simply dummy text of the
                                            printing and
                                            typesetting industry.</div>
                                        <div class="ec-test-name text-right">-Pankaj Rathore</div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>


    </section>

    

    <!-- <div class="section ec-test-section section-space-ptb-100 section-space-m client-review" id="reviews">
        <div class="container fadeInUp">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title mb-0">
                        
                        <div class="client-title">
                            <p class="secondary-title">Most Loved</p>
                            <h2 class="main-title">Day-List</h2>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="ec-test-outer">
                    <ul id="ec-testimonial-slider">
                        <li class="ec-test-item rounded-border">
                            <div class="ec-test-inner">
                                <div class="ec-test-content">
                                    <div class="ec-test-rating text-left mb-3">
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                    </div>
                                    <div class="ec-test-desc text-left">Lorem Ipsum is simply dummy text of the
                                        printing and
                                        typesetting industry.</div>
                                    <div class="ec-test-name text-right">-Pankaj Rathore</div>
                                </div>
                            </div>
                        </li>
                        <li class="ec-test-item rounded-border">
                            <div class="ec-test-inner">
                                <div class="ec-test-content">
                                    <div class="ec-test-rating text-left mb-3">
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                    </div>
                                    <div class="ec-test-desc text-left">Lorem Ipsum is simply dummy text of the
                                        printing and
                                        typesetting industry.</div>
                                    <div class="ec-test-name text-right">-Pankaj Rathore</div>
                                </div>
                            </div>
                        </li>
                        <li class="ec-test-item rounded-border">
                            <div class="ec-test-inner">
                                <div class="ec-test-content">
                                    <div class="ec-test-rating text-left mb-3">
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                    </div>
                                    <div class="ec-test-desc text-left">Lorem Ipsum is simply dummy text of the
                                        printing and
                                        typesetting industry.</div>
                                    <div class="ec-test-name text-right">-Pankaj Rathore</div>
                                </div>
                            </div>
                        </li>
                        <li class="ec-test-item rounded-border">
                            <div class="ec-test-inner">
                                <div class="ec-test-content">
                                    <div class="ec-test-rating text-left mb-3">
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                    </div>
                                    <div class="ec-test-desc text-left">Lorem Ipsum is simply dummy text of the
                                        printing and
                                        typesetting industry.</div>
                                    <div class="ec-test-name text-right">-Pankaj Rathore</div>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div> -->

    <!--  -->








    <!-- <section class="section ec-test-section section-space-ptb-100 section-space-m fadeInUp"  id="reviews" data-animation="fadeInUp" data-animated="true">
        <div class="container fadeInUp" >
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title mb-0">
                        <h2 class="ec-bg-title">Testimonial</h2>
                        <h2 class="ec-title">Client Review</h2>
                        <p class="sub-title mb-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="ec-test-outer">
                    <ul id="ec-testimonial-slider">
                        <li class="ec-test-item">                          
                            <div class="ec-test-inner">
                                <div class="ec-test-content">
								    <div class="ec-test-rating text-left mb-3">
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                    </div>
                                    <div class="ec-test-desc text-left">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry.</div>
                                    <div class="ec-test-name text-right">-Pankaj Rathore</div>
                                </div>
                            </div>
                        </li>
                        <li class="ec-test-item">                          
                            <div class="ec-test-inner">
                                <div class="ec-test-content">
								    <div class="ec-test-rating text-left mb-3">
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                    </div>
                                    <div class="ec-test-desc text-left">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry.</div>
                                    <div class="ec-test-name text-right">-Pankaj Rathore</div>
                                </div>
                            </div>
                        </li>
                        <li class="ec-test-item">                          
                            <div class="ec-test-inner">
                                <div class="ec-test-content">
								    <div class="ec-test-rating text-left mb-3">
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                    </div>
                                    <div class="ec-test-desc text-left">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry.</div>
                                    <div class="ec-test-name text-right">-Pankaj Rathore</div>
                                </div>
                            </div>
                        </li>
                        <li class="ec-test-item">                          
                            <div class="ec-test-inner">
                                <div class="ec-test-content">
								    <div class="ec-test-rating text-left mb-3">
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                    </div>
                                    <div class="ec-test-desc text-left">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry.</div>
                                    <div class="ec-test-name text-right">-Pankaj Rathore</div>
                                </div>
                            </div>
                        </li>
                                                
					</ul>
                </div>
            </div>
        </div>
    </section> -->
    <!-- testmonial end -->


    <!-- Instagram Start -->
    <section class="section ec-instagram-section module section-space-p" id="insta" data-animation="fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Instagram Feed</h2>
                        <h2 class="ec-title under-title">Instagram Feed</h2>
                        <p class="sub-title">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="ec-insta-wrapper">
            <div class="ec-insta-outer">
                <div class="container" data-animation="fadeIn">
                    <div class="insta-auto">
                        <!-- instagram item -->
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="{{asset('front/images/instragram-image/3.jpg')}}"
                                        alt="insta"></a>
                            </div>
                        </div>
                        <!-- instagram item -->
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="{{asset('front/images/instragram-image/3.jpg')}}"
                                        alt="insta"></a>
                            </div>
                        </div>
                        <!-- instagram item -->
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="{{asset('front/images/instragram-image/3.jpg')}}"
                                        alt="insta"></a>
                            </div>
                        </div>
                        <!-- instagram item -->
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="{{asset('front/images/instragram-image/3.jpg')}}"
                                        alt="insta"></a>
                            </div>
                        </div>
                        <!-- instagram item -->
                        <!-- instagram item -->
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="{{asset('front/images/instragram-image/3.jpg')}}"
                                        alt="insta"></a>
                            </div>
                        </div>
                        <!-- instagram item -->
                        <!-- instagram item -->
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="{{asset('front/images/instragram-image/3.jpg')}}"
                                        alt="insta"></a>
                            </div>
                        </div>
                        <!-- instagram item -->
                        <!-- instagram item -->
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="{{asset('front/images/instragram-image/3.jpg')}}"
                                        alt="insta"></a>
                            </div>
                        </div>
                        <!-- instagram item -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Instagram End -->


    <!-- Newsletter Modal Start -->
    <section class="section newsletter section-space-ptb-100 section-space-m" data-animation="fadeInUp">
        <div class="container">
            <div id="ec-popnews-box">
                <div class="row">

                    <div class="col-md-6">
                        <div id="ec-popnews-box-content">
                            <h2>Subscribe Newsletter</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is
                                simply dummy text of the printing and typesetting industry.</p>
                            <form id="" action="#" method="post">
                                <input type="email" name="newsemail" placeholder="Email Address" required />
                                <button type="button" class="btn btn-secondary" name="subscribe">Subscribe</button>
                            </form>
                            <p class="my-3">Follow Us On:</p>
                            <div class="footer-bottom-social">
                                <ul class="mb-0">
                                    <li class="list-inline-item"><a class="hdr-facebook" href="#"><i
                                                class="ecicon eci-facebook"></i></a></li>
                                    <li class="list-inline-item"><a class="hdr-twitter" href="#"><i
                                                class="ecicon eci-twitter"></i></a></li>
                                    <li class="list-inline-item"><a class="hdr-instagram" href="#"><i
                                                class="ecicon eci-instagram"></i></a></li>
                                    <li class="list-inline-item"><a class="hdr-linkedin" href="#"><i
                                                class="ecicon eci-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 disp-no-767">
                        <img src="{{asset('front/images/banner/4.jpg')}}" alt="newsletter">
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Newsletter Modal end -->



    <!-- Latest Blog Section End -->
@endsection
