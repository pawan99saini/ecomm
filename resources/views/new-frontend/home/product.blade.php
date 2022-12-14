@extends('new-frontend.layout.app')
@section('content')
     <link rel="stylesheet" href="{{asset('front/css/Product.css')}}"/>
<link rel="stylesheet" href="{{asset('front/js/vendor/fancybox/jquery.fancybox.css')}}" />
  <link rel="stylesheet" href="{{asset('front/js/vendor/fancybox/helpers/jquery.fancybox-thumbs.css')}}" /> 
  <div id="sizeGuide" class="sizeGuideSidenav"> 
    <div class="container-fluid h-full">
      <div class="row h-full">
        <div class="col-sm-3 col-md-3 col-lg-6 bg-transparent hide-on-mob-sidebar-left">

        </div>
        <div class="col-sm-9 col-md-9 col-lg-6 bg-white">
          <div class="sizeGuideSidenav-head">
            <span class="size-guide-title">Size Guide</span>
            <span href="javascript:void(0)" class="closebtn" onclick="closeSizeGuide()">&times;</span>
          </div>
          <div class="sizeGuideSidenav-body">
               <div class="size-guide-main">
                <table class="size-guide-table" width="100%" border="1" style="margin-block: 25px;">
                  <tbody>
                  <tr align="center" style="color: #fff; background: #000;">
                  <th>Size</th>
                  <th>To Fit Bust ( In )</th>
                  <th>To Fit Waist ( In )</th>
                  <th>To Fit Hip ( In )</th>
                  </tr>
                  <tr align="center">
                  <td>XXS</td>
                  <td>30"</td>
                  <td>24"</td>
                  <td>33"</td>
                  </tr>
                  <tr align="center">
                  <td>XS</td>
                  <td>32"</td>
                  <td>26"</td>
                  <td>35"</td>
                  </tr>
                  <tr align="center">
                  <td>S</td>
                  <td>34"</td>
                  <td>28"</td>
                  <td>37"</td>
                  </tr>
                  <tr align="center">
                  <td>M</td>
                  <td>36"</td>
                  <td>30"</td>
                  <td>39"</td>
                  </tr>
                  <tr align="center">
                  <td>L</td>
                  <td>38"</td>
                  <td>32"</td>
                  <td>41"</td>
                  </tr>
                  <tr align="center">
                  <td>XL</td>
                  <td>40"</td>
                  <td>34"</td>
                  <td>43"</td>
                  </tr>
                  <tr align="center">
                  <td>2XL</td>
                  <td>42"</td>
                  <td>36"</td>
                  <td>45"</td>
                  </tr>
                  </tbody>
                  </table>
                  <div class="size_guide-image">                                    
                    <h3>How To Measure</h3>
                    <img src="https://cdn.shopify.com/s/files/1/0266/6276/4597/files/sizeguide_woman.jpg?3084" alt="women size chart">
                    </div>
               </div>     
          </div>
        </div>
      </div>
    </div>                   
    
  </div>
  <!-- <div id="sizeGuideMobile" class="sizeGuideSidenavMobile"> 
    <h1>Size Guide Mobile View</h1> -->
  <!-- Header Ends -->

  <!-- Product Section -->
  <section class="product-section sticky-header-next-sec">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-7">
          <div class="pdp-image-gallery-block">
            <!-- Gallery -->
            <div class="gallery_pdp_container">
              <div id="gallery_pdp">
                <div class="row">
                  <div class="col-3"> <a href="#" data-image="{{asset('front/images/small/image1.png')}}" data-zoom-image="{{asset('front/images/large/image1.jpg')}}">
                    <img id="" src="{{asset('front/images/thumb/image1.jpg ')}}" /></a>
                  </div>
                  <div class="col-3"><a href="#" data-image="images/small/image2.png" data-zoom-image="{{asset('front/images/large/image2.jpg ')}}">
                    <img id="" src="{{asset('front/images/thumb/image2.jpg')}}" /></a>
                  </div>
                  <div class="col-3"><a href="#" data-image="{{asset('front/mages/small/image3.png')}}" data-zoom-image="{{asset('front/images/large/image3.jpg')}}">
                    <img id="" src="{{asset('front/images/thumb/image3.jpg')}}" /></a>
                  </div>
                  <div class="col-3"><a href="#" data-image="{{asset('front/images/small/image4.png')}}" data-zoom-image="{{asset('front/images/large/image4.jpg')}}">
                    <img id="" src="{{asset('front/images/thumb/image4.jpg')}}" /></a>
                  </div> 
                </div> 
              </div>
              <!-- Up and down button for vertical carousel -->
              <!-- <a href="#" id="ui-carousel-next" style="display: inline"></a>
              <a href="#" id="ui-carousel-prev" style="display: inline"></a> -->
            </div>
            <!-- Gallery -->

            <!-- gallery Viewer -->
            <div class="gallery-viewer" data-scale="2.5">
              <img class="gallery-viewer-img" id="zoom_10" src="{{asset('front/images/small/image1.png')}}" data-zoom-image="{{asset('front/images/large/image1.jpg')}}" />
            </div>

            <!-- gallery Viewer -->
          </div>

          <div id="enlarge_gallery_pdp">
            <div class="enl_butt">
              <a class="enl_but enl_fclose" title="Close"></a>
              <a class="enl_but enl_fright" title="Next"></a>
              <a class="enl_but enl_fleft" title="Prev"></a>
            </div>
            <div class="mega_enl"></div>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-5">
          <div class="container">
            <div class="" style="padding-block-start: 60px;">
              <ul class="d-flex breadcrumb-menu">
                <li class="breadcrumb-item"><a class="underline-lite-on-hover position-relative" href=""><span></span>home</a></li>
                <li class="breadcrumb-item"><a class="underline-lite-on-hover position-relative" href=""><span class=""></span>category</a></li>
                <li class="breadcrumb-item"><a class="underline-lite-on-hover position-relative" href=""><span class=""></span>category</a></li>
              </ul>
              <div class="product-description">
                <div class="product-desc-content">
                  <h1 class="d-flex product-desc-content-sub">
                    <span>
                      <span class="cta-text underline-lite-on-hover position-relative">Tiffany T</span>
                    </span>
                    
                    <div class="d-flex flex-column product-details-all">
                      <span class="cta-heading">Wire Bracelet</span>
                      <span class="cta-price">$1,200</span>
                    </div>                    
                    <span class="cta-sub-heading">in Rose Gold with Mother-of-pearl</span>
                  </h1>
                </div>
              </div>
              <div class="quantity-selector d-flex justify-content-between">
                <span class="quantity-label">quantity</span>
                <form id='myform' method='POST' class='quantity' action='#' >
                  <input id="countMinus" type='button' value='-' class='qtyminus minus' field='quantity' placeholder="-" onclick="validate()"/>
                  <input type='text' name='quantity' id="quantity" value='1' class='qty' max="5"/>
                  <input id="countPlus" type='button' value='+' class='qtyplus plus' field='quantity' placeholder="+" onclick="validate()"/>
                </form>
              </div>              
              <div class="size-selector d-flex justify-content-between">
                <div>
                  <span class="s-size">Size</span>
                  <span class="select-size underline-lite-on-hover position-relative" id="viewsize">Small</span>            
                </div>
                <div>                 
                  <button class="size-guide show-on-desktop" onclick="openSizeGuide()"><span >Size Guide</span></button>
                  <button class="size-guide show-on-mobile" onclick="openSizeGuide()"><span >
                    <img style="width: 30px;" src="https://media.tiffany.com/is/content/tiffanydm/size_guide?$tile$&wid=48&hei=24" />
                  </span></button>
                </div>
              </div>
              <div id="variousSize" class="select-various-size d-none">
                <ul class="size-dropdown-list">
                  <li class="active"><a href="">Small</a> </li>
                  <li><a href="">Medium</a></li>
                  <li><a href="">Large</a></li>
                </ul>
              </div>
              <div class="product-action d-flex justify-content-between">                 
                <button class="add-to-bag btn btn-2 hover-slide-up p-0 m-0">
                  <a href="#"> <span>Buy Now</span></a>
               </button>
                <button class="add-to-bag btn btn-2 hover-slide-up p-0 m-0">
                  <a href="Cart.html"> <span>Add to Bag</span></a>
               </button>
              </div>
              <div class="product-briefing">
                <div class="briefing-heading">Description & Details</div>
                <p class="briefing-text">Graphic angles and clean lines blend to create the beautiful clarity of the Tiffany T collection. This modern bracelet is enhanced with luminous mother-of-pearl???a natural, iridescent material found in oyster shells???creating a bold design with high shine and elegant lustre.</p>
                <ul class="product-info">
                  <li>18k rose gold with mother-of-pearl</li>
                  <li>Size medium</li>
                  <li>Fits wrists up to 6.25"</li>
                  <li>Product number:63958336</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    
  </section>
<!-- Product Section -->


<!-- Terms And Condition -->
<section class="term-and-condition">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-7">
          <div class="term-and-condition-left">
            <div class="tac-container">
              <h2 class="tac-title">The Day-List Experience</h2>
              <p class="tac-desc">When you choose Day-List, you become a valued member of the Day-List family. Since 1837, we???ve prided ourselves on providing premium service, a tradition that continues to this day.</p>
            </div>
          </div>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-5">
        <div class="accordion term-and-condition-right" id="termAndCondition">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Complimentary Shipping & Returns
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#termAndCondition">
              <div class="accordion-body">
                <p>We offer complimentary shipping and returns on all Tiffany & Co. orders.</p>
                <p><a class="condition-learn-more" href="">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                At Your Service
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#termAndCondition">
              <div class="accordion-body">
                <p> Experience personalised service tailored to your every need by Tiffany & Co. Client Advisors. From choosing an engagement ring or gift to providing in-store or virtual appointments, we???re always here to help.</p>               
                <p><a class="condition-learn-more" href="">Contact Us</a></p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Responsibly Sourced
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#termAndCondition">
              <div class="accordion-body">
                <p>For more than two decades, we have made dedicated efforts to responsibly source the precious materials we use in our jewellery.</p>                
                <p><a class="condition-learn-more" href="">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                Size Guide
              </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#termAndCondition">
              <div class="accordion-body">
                <p>Determine the correct bracelet, necklace or ring size with the Tiffany & Co. size guide.</p>                
                <p><a class="condition-learn-more" href="">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFive">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                Responsibly Sourced
              </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#termAndCondition">
              <div class="accordion-body">
                <p>For more than two decades, we have made dedicated efforts to responsibly source the precious materials we use in our jewellery.</p>                
                <p><a class="condition-learn-more" href="">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingSix">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                Responsibly Sourced
              </button>
            </h2>
            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#termAndCondition">
              <div class="accordion-body">
                <p>For more than two decades, we have made dedicated efforts to responsibly source the precious materials we use in our jewellery.</p>                
                <p><a class="condition-learn-more" href="">Learn More</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</section>
<!-- Terms And Condition -->


<!-- Featured Product -->
  <section class="featured-product">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
              <div class="section-title">
                  <h2 class="ec-bg-title">You May Also Like</h2>
                  <h2 class="ec-title under-title">You May Also Like</h2>
              </div>
          </div>
      </div>
        <div class="row position-relative mt-4">
          <div class="swiper mySwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide d-flex flex-column">
                <div>
                  <img src="{{asset('front/images/product-image/p1.jpg')}}" />
                </div>                
                <div class="featured-product-title">
                  <p class="featured-product-title-label">
                    <span>Smile Bracelet </br> in Yellow Gold</span>
                  </p>
                  <p class="featured-product-title-price">$1,999</p>
                </div>
              </div>
              <div class="swiper-slide d-flex flex-column">
                <div>
                  <img src="{{asset('front/images/product-image/p1.jpg')}}" />
                </div>                
                <div class="featured-product-title">
                  <p class="featured-product-title-label">
                    <span>Smile Bracelet </br> in Yellow Gold</span>
                  </p>
                  <p class="featured-product-title-price">$1,999</p>
                </div>
              </div> <div class="swiper-slide d-flex flex-column">
                <div>
                  <img src="{{asset('front/images/product-image/p1.jpg')}}" />
                </div>                
                <div class="featured-product-title">
                  <p class="featured-product-title-label">
                    <span>Smile Bracelet </br> in Yellow Gold</span>
                  </p>
                  <p class="featured-product-title-price">$1,999</p>
                </div>
              </div> <div class="swiper-slide d-flex flex-column">
                <div>
                  <img src="{{asset('front/images/product-image/p1.jpg')}}" />
                </div>                
                <div class="featured-product-title">
                  <p class="featured-product-title-label">
                    <span>Smile Bracelet </br> in Yellow Gold</span>
                  </p>
                  <p class="featured-product-title-price">$1,999</p>
                </div>
              </div> <div class="swiper-slide d-flex flex-column">
                <div>
                  <img src="{{asset('front/images/product-image/p1.jpg')}}" />
                </div>                
                <div class="featured-product-title">
                  <p class="featured-product-title-label">
                    <span>Smile Bracelet </br> in Yellow Gold</span>
                  </p>
                  <p class="featured-product-title-price">$1,999</p>
                </div>
              </div> <div class="swiper-slide d-flex flex-column">
                <div>
                  <img src="{{asset('front/images/product-image/p1.jpg')}}" />
                </div>                
                <div class="featured-product-title">
                  <p class="featured-product-title-label">
                    <span>Smile Bracelet </br> in Yellow Gold</span>
                  </p>
                  <p class="featured-product-title-price">$1,999</p>
                </div>
              </div>
             <!-- <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div> -->
           <!-- <div class="swiper-pagination"></div> -->
          </div>
        </div>
        <div class="left-borderd"></div>
      </div> 
  </section>
<!-- Featured Product -->
    <script src="{{asset('front/js/vendor/jquery/jquery-ui.min.js')}}"></script>
    <script src="{{asset('front/js/vendor/fancybox/jquery.fancybox.js')}}"></script>
    <script src="{{asset('front/js/vendor/elevatezoom/jquery.elevatezoom.js')}}"></script>
    <script src="{{asset('front/js/vendor/panZoom/panZoom.js')}}"></script>
    <script src="{{asset('front/js/vendor/ui-carousel/ui-carousel.js')}}"></script>
    <script src="{{asset('front/js/zoom.js')}}"></script>
	<!-- Quantity Counter-->
      <script>
        jQuery(document).ready($ => {
          $('.quantity').on('click', '.plus', function (e) {
              let $input = $(this).prev('input.qty');
              let val = parseInt($input.val());
              if(val <= 4){
                $input.val(val + 1).change();             
              }                        
            });

            $('.quantity').on('click', '.minus',
              function (e) {
                let $input = $(this).next('input.qty');
                var val = parseInt($input.val());
                if (val >= 2) {
                  $input.val(val - 1).change();                  
                }
              });
          });

          // various Size Selector

          $(document).ready(function(){
            $("#viewsize").click(function(){
              $("#variousSize").toggleClass("d-none");
              $("#viewsize").toggleClass("size-selected");
              
            });       
          });

          // various Size Selector
          
      </script>
  <!-- Quantity Counter-->

  <script>
    $('.gallery-viewer')
        // tile mouse actions
        .on('mouseover', function(){
          $(this).children('.gallery-viewer-img').css({'transform': 'scale('+ $(this).attr('data-scale') +')'});
        })
        .on('mouseout', function(){
          $(this).children('.gallery-viewer-img').css({'transform': 'scale(1)'});
        })
        .on('mousemove', function(e){
          $(this).children('.gallery-viewer-img').css({'transform-origin': ((e.pageX - $(this).offset().left) / $(this).width()) * 100 + '% ' + ((e.pageY - $(this).offset().top) / $(this).height()) * 100 +'%'});
        })
        // tiles set up
        .each(function(){
          $(this)
            // add a image container
            .append('<div class="product-img--main__image"></div>')
            // set up a background image for each tile based on data-image attribute
            .children('.product-img--main__image').css({'background-image': 'url('+ $(this).attr('data-image') +')'});
        });
  </script>

@endsection

