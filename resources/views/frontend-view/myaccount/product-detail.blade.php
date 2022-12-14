@include('frontend-view.includes.header')
 <div class="wrapper">
    <header class="header-section">
      <div class="header fixed">
        <div class="header-top">
          <div class="container-custom">
            <div class="header-top-inner">
              <div class="row">
                <div class="header-top-left col-lg-6 col-md-6 col-sm-12 col-12">
                  <div class="header-announcement">
                    <div class="header-announcement-carousel">
                      <p class="announcement-item"><a href="#">Reach out via call/ WhatsApp for personal shopping experience</a></p>
                      <p class="announcement-item"><a href="#">Free Shipping All Over India</a></p>
                      <p class="announcement-item"><a href="#">Reach out via call/ WhatsApp for personal shopping experience</a></p>
                    </div>
                  </div>
                </div>
                <div class="header-top-right col-lg-6 col-md-4 col-sm-12 col-12">
                  <ul class="header-nav">
                    <li><a href="{{ url('about') }}">About Us</a></li>
                    <li><a href="{{ url('contact-us') }}">Contact Us</a></li>
                    <li>
                      <div class="header-currency">
                        <form method="post" action="" class="currency-switcher-form">
                          <input type="hidden" name="currency-switcher" value="INR">
                          <select name="currency-switcher" data-width="100%" class="currency-switcher"
                            onchange="woocs_redirect(this.value); void(0);">
                            <option class="USD" value="USD">$ USD</option>
                            <option class="INR" value="INR" selected="selected">₹ INR</option>
                          </select>
                        </form>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="header-middle">
          <div class="container-custom">
            <div class="header-row">
              <div class="header-logo">
                  {{-- index url / --}}
                <a class="logo-link" href="{{ url('/') }}"><img onerror="handleError(this);"class="logo" src="{{ asset('frontend-view/images/logo.png') }}" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
                  aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              </div>
              <div class="header-search">
                <div class="searchForm">
                  <form action="" method="get">
                    <input type="search" name="s" class="serach-input" placeholder="Search Products">
                    <button class="btn btn-primary searchicon" type="submit"><i class="fa fa-search"></i></button>
                  </form>
                </div>
              </div>
              <div class="header-shop-menu">
                <ul class="header-shop-link">
                  <li class="d-block d-md-none"><a class="search-icon" href="javascript:void(0);">
                      <span class="shop-icon">
                        <svg class="desktop-icon" viewBox="-3 -3 23 23" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <g stroke-width="2">
                            <polygon points="18.7071068 17.2928932 17.2928932 18.7071068 12.7628932 14.1771068 14.1771068 12.7628932"></polygon>
                            <path d="M8,16 C3.581722,16 0,12.418278 0,8 C0,3.581722 3.581722,0 8,0 C12.418278,0 16,3.581722 16,8 C16,12.418278 12.418278,16 8,16 Z M8,14 C11.3137085,14 14,11.3137085 14,8 C14,4.6862915 11.3137085,2 8,2 C4.6862915,2 2,4.6862915 2,8 C2,11.3137085 4.6862915,14 8,14 Z"></path>
                          </g>
                        </svg>
                      </span>
                    </a>
                    <div class="search-wrapper"> <a href="javascript:void(0);" class="search-cancel">Cancel</a>
                      <div class="searchForm">
                        <form action="" method="get">
                          <input type="search" name="s" class="serach-input" placeholder="Search Products">
                          <button class="btn btn-primary searchicon" type="submit"><i class="fa fa-search"></i></button>
                        </form>
                      </div>
                    </div>
                  </li>
                  <li class="acoount-icon dropdown">
                    <a class="account-toggle" href="javascript:void(0);" data-toggle="modal" data-target="#loginregister">
                      <span class="shop-icon">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve">
                          <g>
                            <g>
                              <path
                                d="M256,288.389c-153.837,0-238.56,72.776-238.56,204.925c0,10.321,8.365,18.686,18.686,18.686h439.747 c10.321,0,18.686-8.365,18.686-18.686C494.56,361.172,409.837,288.389,256,288.389z M55.492,474.628 c7.35-98.806,74.713-148.866,200.508-148.866s193.159,50.06,200.515,148.866H55.492z" />
                            </g>
                          </g>
                          <g>
                            <g>
                              <path
                                d="M256,0c-70.665,0-123.951,54.358-123.951,126.437c0,74.19,55.604,134.54,123.951,134.54s123.951-60.35,123.951-134.534 C379.951,54.358,326.665,0,256,0z M256,223.611c-47.743,0-86.579-43.589-86.579-97.168c0-51.611,36.413-89.071,86.579-89.071 c49.363,0,86.579,38.288,86.579,89.071C342.579,180.022,303.743,223.611,256,223.611z" />
                            </g>
                          </g>
                        </svg></span>
                    </a>
                    <div class="account-menu dropdown-menu dropdown-menu-right">
                      <p class="pl-3 m-2">Hi John!</p>
                      <ul class="account-menu-list">
                        <li><a href="#"><i class="fa fa-user"></i>My Account </a> </li>
                        <li><a href="#"><i class="fa fa-address-book"></i>My Address </a> </li>
                        <li><a href="#"><i class="fa fa-shopping-basket"></i>My Orders </a> </li>
                        <li><a href="#"><i class="far fa-heart"></i>My Wishlist </a> </li>
                        <li><a href="#"><i class="fa fa-tags"></i>My Coupons </a> </li>
                        <li class="logout"><a href="javascript:void(0);"><i class="fa fa-sign-out"></i>Log out</a> </li>
                      </ul>
                    </div>
                  </li>
                  <li class="shoping-icon">
                    <a href="{{ url('my-wishlist') }}">
                      <span class="shop-icon"><svg viewBox="0 -28 512.001 512" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="m256 455.515625c-7.289062 0-14.316406-2.640625-19.792969-7.4375-20.683593-18.085937-40.625-35.082031-58.21875-50.074219l-.089843-.078125c-51.582032-43.957031-96.125-81.917969-127.117188-119.3125-34.644531-41.804687-50.78125-81.441406-50.78125-124.742187 0-42.070313 14.425781-80.882813 40.617188-109.292969 26.503906-28.746094 62.871093-44.578125 102.414062-44.578125 29.554688 0 56.621094 9.34375 80.445312 27.769531 12.023438 9.300781 22.921876 20.683594 32.523438 33.960938 9.605469-13.277344 20.5-24.660157 32.527344-33.960938 23.824218-18.425781 50.890625-27.769531 80.445312-27.769531 39.539063 0 75.910156 15.832031 102.414063 44.578125 26.191406 28.410156 40.613281 67.222656 40.613281 109.292969 0 43.300781-16.132812 82.9375-50.777344 124.738281-30.992187 37.398437-75.53125 75.355469-127.105468 119.308594-17.625 15.015625-37.597657 32.039062-58.328126 50.167969-5.472656 4.789062-12.503906 7.429687-19.789062 7.429687zm-112.96875-425.523437c-31.066406 0-59.605469 12.398437-80.367188 34.914062-21.070312 22.855469-32.675781 54.449219-32.675781 88.964844 0 36.417968 13.535157 68.988281 43.882813 105.605468 29.332031 35.394532 72.960937 72.574219 123.476562 115.625l.09375.078126c17.660156 15.050781 37.679688 32.113281 58.515625 50.332031 20.960938-18.253907 41.011719-35.34375 58.707031-50.417969 50.511719-43.050781 94.136719-80.222656 123.46875-115.617188 30.34375-36.617187 43.878907-69.1875 43.878907-105.605468 0-34.515625-11.605469-66.109375-32.675781-88.964844-20.757813-22.515625-49.300782-34.914062-80.363282-34.914062-22.757812 0-43.652344 7.234374-62.101562 21.5-16.441406 12.71875-27.894532 28.796874-34.609375 40.046874-3.453125 5.785157-9.53125 9.238282-16.261719 9.238282s-12.808594-3.453125-16.261719-9.238282c-6.710937-11.25-18.164062-27.328124-34.609375-40.046874-18.449218-14.265626-39.34375-21.5-62.097656-21.5zm0 0" />
                        </svg><span class="shop-number wishlist-number ">0</span></span> </a>
                  </li>
                  <li class="cart-menu dropdown">
                    <a href="{{ url('cart') }}" title="View your shopping cart" class="cart-contents">
                      <span class="cart-icon">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 511.997 511.997"
                          style="enable-background:new 0 0 511.997 511.997;" xml:space="preserve">
                          <g>
                            <g>
                              <path d="M405.387,362.612c-35.202,0-63.84,28.639-63.84,63.84s28.639,63.84,63.84,63.84s63.84-28.639,63.84-63.84
                                          S440.588,362.612,405.387,362.612z M405.387,451.988c-14.083,0-25.536-11.453-25.536-25.536s11.453-25.536,25.536-25.536
                                          c14.083,0,25.536,11.453,25.536,25.536S419.47,451.988,405.387,451.988z" />
                            </g>
                          </g>
                          <g>
                            <g>
                              <path
                                d="M507.927,115.875c-3.626-4.641-9.187-7.348-15.079-7.348H118.22l-17.237-72.12c-2.062-8.618-9.768-14.702-18.629-14.702
                                      H19.152C8.574,21.704,0,30.278,0,40.856s8.574,19.152,19.152,19.152h48.085l62.244,260.443
                                      c2.062,8.625,9.768,14.702,18.629,14.702h298.135c8.804,0,16.477-6.001,18.59-14.543l46.604-188.329
                                      C512.849,126.562,511.553,120.516,507.927,115.875z M431.261,296.85H163.227l-35.853-150.019h341.003L431.261,296.85z" />
                            </g>
                          </g>
                          <g>
                            <g>
                              <path d="M173.646,362.612c-35.202,0-63.84,28.639-63.84,63.84s28.639,63.84,63.84,63.84s63.84-28.639,63.84-63.84
                                  S208.847,362.612,173.646,362.612z M173.646,451.988c-14.083,0-25.536-11.453-25.536-25.536s11.453-25.536,25.536-25.536
                                  s25.536,11.453,25.536,25.536S187.729,451.988,173.646,451.988z" />
                            </g>
                          </g>
                        </svg><span class="cart-count cart-number-items">1</span></span>
                    </a>
                    <div class="cart-dropdown">
                      <div class="widget-shopping-cart">
                        <div class="widget-shopping-cart-content">
                          <ul class="mini-cart">
                            <li class="mini-cart-item">
                              <a href="javascript:void(0);" class="remove remove_from_cart_button" aria-label="Remove this item"
                                data-product_id="1876">×</a>
                              <a href="#"><img onerror="handleError(this);"src="{{ asset('frontend-view/images/kurti3.jpg') }}" alt="">Women Printed Cotton A-line Kurta </a>
                              <span class="quantity">1 × <span class="mini-cart-price"><span class="price">₹410.00</span></span></span>
                            </li>
                            <li class="mini-cart-item">
                              <a href="javascript:void(0);" class="remove remove_from_cart_button" aria-label="Remove this item" data-product_id="1876">×</a>
                              <a href="#"><img onerror="handleError(this);"src="{{ asset('frontend-view/images/kurti9.jpg') }}" alt="">Women Printed Cotton A-line KurtaMalti Cushion Cover Set of Two -Reversible </a>
                              <span class="quantity">1 × <span class="mini-cart-price"><span class="price">₹400.00</span> </span></span>
                            </li>
                          </ul>
                          <p class="mini-cart-total">
                            <strong>Subtotal:</strong> <span class="mini-cart-price"><span class="price">₹810.00</span> </span>
                          </p>
                          <p class="mini-cart-buttons">
                            <a href="{{ url('cart') }}" class="button">View cart</a>
                            <a href="{{ url('checkout') }}" class="button checkout">Checkout</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="header-outer header-fixed">
          <div class="container-fluid">
            <div class="header-menu navbar-expand-lg navbar-dark">
              <nav class="nav-menu">
                <div id="navbar" class="collapse navbar-collapse">
                  <ul class="navbar-nav">
                    <li><a href="{{ url('product-list') }}">New Arrivals</a></li>
                    <li class="has-children"><a href="javascript:void(0);">Women</a>
                      <div class="mega-menu">
                        <div class="mega-menu-area">
                            <div class="mega-menu-items">
                              <div class="mega-submenu">
                                    <div class="mega-submenu-column">
                                      <h4 class="mega-menu-title">Women</h4>
                                      <ul class="mega-submenu-item">
                                        <li><a href="{{ url('product-list') }}">Dresses</a></li>
                                        <li><a href="{{ url('product-list') }}">Kurta Sets</a></li>
                                        <li><a href="{{ url('product-list') }}">Lehenga</a></li>
                                        <li><a href="{{ url('product-list') }}">Coordinated Sets</a></li>
                                        <li><a href="{{ url('product-list') }}">Night Wear</a> </li>
                                        <li><a href="{{ url('product-list') }}">Home Textile</a></li>
                                        <li><a href="{{ url('product-list') }}">Bags</a></li>
                                      </ul>
                                    </div>
                                    <div class="mega-submenu-column">
                                      <h4 class="mega-submenu-title">Collection</h4>
                                      <ul class="mega-submenu-item">
                                        <li><a href="{{ url('product-list') }}">Dresses</a></li>
                                        <li><a href="{{ url('product-list') }}">Kurta Sets</a></li>
                                        <li><a href="{{ url('product-list') }}">Lehenga</a></li>
                                        <li><a href="{{ url('product-list') }}">Coordinated Sets</a></li>
                                        <li><a href="{{ url('product-list') }}">Night Wear</a> </li>
                                        <li><a href="{{ url('product-list') }}">Home Textile</a></li>
                                        <li><a href="{{ url('product-list') }}">Bags</a></li>
                                      </ul>
                                    </div>
                                    <div class="mega-submenu-column">
                                      <h4 class="mega-submenu-title">Body Type</h4>
                                      <ul class="mega-submenu-item">
                                        <li><a href="{{ url('product-list') }}">Dresses</a></li>
                                        <li><a href="{{ url('product-list') }}">Kurta Sets</a></li>
                                        <li><a href="{{ url('product-list') }}">Lehenga</a></li>
                                        <li><a href="{{ url('product-list') }}">Coordinated Sets</a></li>
                                        <li><a href="{{ url('product-list') }}">Night Wear</a> </li>
                                        <li><a href="{{ url('product-list') }}">Home Textile</a></li>
                                        <li><a href="{{ url('product-list') }}">Bags</a></li>
                                      </ul>
                                    </div>
                                  </div>
                            </div>
                        </div>
                      </div>
                    </li>
                    <li class="has-children"><a href="javascript:void(0);">Men</a>
                      <div class="mega-menu">
                        <div class="mega-menu-area">
                            <div class="mega-menu-items">
                              <div class="mega-submenu">
                                    <div class="mega-submenu-column">
                                      <h4 class="mega-menu-title">Men</h4>
                                      <ul class="mega-submenu-item">
                                        <li><a href="{{ url('product-list') }}">Dresses</a></li>
                                        <li><a href="{{ url('product-list') }}">Casual Shirt</a></li>
                                        <li><a href="{{ url('product-list') }}">Formal Shirt</a></li>
                                        <li><a href="{{ url('product-list') }}">Pents</a></li>
                                        <li><a href="{{ url('product-list') }}">Night Wear</a> </li>
                                        <li><a href="{{ url('product-list') }}">Home Textile</a></li>
                                        <li><a href="{{ url('product-list') }}">Purse</a></li>
                                      </ul>
                                    </div>
                                    <div class="mega-submenu-column">
                                      <h4 class="mega-submenu-title">Collection</h4>
                                      <ul class="mega-submenu-item">
                                        <li><a href="{{ url('product-list') }}">Dresses</a></li>
                                        <li><a href="{{ url('product-list') }}">Kurta Sets</a></li>
                                        <li><a href="{{ url('product-list') }}">Lehenga</a></li>
                                        <li><a href="{{ url('product-list') }}">Coordinated Sets</a></li>
                                        <li><a href="{{ url('product-list') }}">Night Wear</a> </li>
                                        <li><a href="{{ url('product-list') }}">Home Textile</a></li>
                                        <li><a href="{{ url('product-list') }}">Bags</a></li>
                                      </ul>
                                    </div>
                                    <div class="mega-submenu-column">
                                      <h4 class="mega-submenu-title">Body Type</h4>
                                      <ul class="mega-submenu-item">
                                        <li><a href="{{ url('product-list') }}">Dresses</a></li>
                                        <li><a href="{{ url('product-list') }}">Kurta Sets</a></li>
                                        <li><a href="{{ url('product-list') }}">Lehenga</a></li>
                                        <li><a href="{{ url('product-list') }}">Coordinated Sets</a></li>
                                        <li><a href="{{ url('product-list') }}">Night Wear</a> </li>
                                        <li><a href="{{ url('product-list') }}">Home Textile</a></li>
                                        <li><a href="{{ url('product-list') }}">Bags</a></li>
                                      </ul>
                                    </div>
                                  </div>
                            </div>
                        </div>
                      </div>
                    </li>
                    <li><a href="{{ url('product-list') }}">Western Wear</a></li>
                    <li><a href="{{ url('product-list') }}">Night Wear</a></li>
                    <li><a href="{{ url('product-list') }}">Sale</a></li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!--=====================================================
                        Header Section End
    =========================================================-->
    <section class="site-content">
      <div class="page-banner-section">
          <div class="page-banner page-banner-bg">
              <div class="container-custom">
                  <div class="page-banner-wrap">
                      <div role="navigation" aria-label="Breadcrumbs" class="breadcrumbs">
                          <ul class="breadcrumb-items">
                              {{-- index url --}}
                              <li class="breadcrumb-item trail-begin"><a href="{{ url('/') }}" rel="home"><span
                                          itemprop="name">Home</span></a></li>
                              <li class="breadcrumb-item trail-end"><span itemprop="name">Women Printed Cotton A-line Kurta</span></li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- page-banner-section -->
      <div class="content-wrapper">
          <div class="content-area">
              <div id="product-[]" class="single-product">
                  <div class="container-custom">
                      <div class="single-product-details">
                          <div class="row">
                              <div class="col-lg-6 col-md-12 col-sm-12 pr-xl-5">
                                  <div class="product-gallery">
                                      <div class="product-gallery-area product-gallery-with-images">
                                          <div class="product-label">
                                              <span class="new-title">New</span>
                                              <span class="sale-title">-32%</span>
                                          </div>
                                          <div class="product-gallery-wrapper product-gallery-slider">
                                              <div class="product-gallery-image">
                                                  <a data-fancybox="gallery" href="images/kurti1.jpg"><img onerror="handleError(this);"src="{{ asset('frontend-view/images/kurti1.jpg') }}" alt=""></a>
                                              </div>
                                              <div class="product-gallery-image">
                                                  <a data-fancybox="gallery" href="images/kurti2.jpg"><img onerror="handleError(this);"src="{{ asset('frontend-view/images/kurti2.jpg') }}" alt=""></a>
                                              </div>
                                              <div class="product-gallery-image">
                                                  <a data-fancybox="gallery" href="images/kurti3.jpg"><img onerror="handleError(this);"src="{{ asset('frontend-view/images/kurti3.jpg') }}" alt=""></a>
                                              </div>
                                              <div class="product-gallery-image">
                                                  <a data-fancybox="gallery" href="images/kurti4.jpg"><img onerror="handleError(this);"src="{{ asset('frontend-view/images/kurti4.jpg') }}" alt=""></a>
                                              </div>
                                              <div class="product-gallery-image">
                                                  <a data-fancybox="gallery" href="images/kurti5.jpg"><img onerror="handleError(this);"src="{{ asset('frontend-view/images/kurti5.jpg') }}" alt=""></a>
                                              </div>
                                              <div class="product-gallery-image">
                                                  <a data-fancybox="gallery" href="images/kurti6.jpg"><img onerror="handleError(this);"src="{{ asset('frontend-view/images/kurti6.jpg') }}" alt=""></a>
                                              </div>
                                              <div class="product-gallery-image">
                                                  <a data-fancybox="gallery" href="images/kurti7.jpg"><img onerror="handleError(this);"src="{{ asset('frontend-view/images/kurti7.jpg') }}" alt=""></a>
                                              </div>
                                              <div class="product-gallery-image">
                                                  <a data-fancybox="gallery" href="images/kurti8.jpg"><img onerror="handleError(this);"src="{{ asset('frontend-view/images/kurti8.jpg') }}" alt=""></a>
                                              </div>
                                          </div>
                                          <ol class="product-gallery-thumbs">
                                              <li><img onerror="handleError(this);"src="{{ asset('frontend-view/images/kurti1.jpg') }}" alt=""></li>
                                              <li><img onerror="handleError(this);"src="{{ asset('frontend-view/images/kurti2.jpg') }}" alt=""></li>
                                              <li><img onerror="handleError(this);"src="{{ asset('frontend-view/images/kurti3.jpg') }}" alt=""></li>
                                              <li><img onerror="handleError(this);"src="{{ asset('frontend-view/images/kurti4.jpg') }}" alt=""></li>
                                              <li><img onerror="handleError(this);"src="{{ asset('frontend-view/images/kurti5.jpg') }}" alt=""></li>
                                              <li><img onerror="handleError(this);"src="{{ asset('frontend-view/images/kurti6.jpg') }}" alt=""></li>
                                              <li><img onerror="handleError(this);"src="{{ asset('frontend-view/images/kurti7.jpg') }}" alt=""></li>
                                              <li><img onerror="handleError(this);"src="{{ asset('frontend-view/images/kurti8.jpg') }}" alt=""></li>
                                          </ol>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-6 col-md-12 col-sm-12">
                                  <div class="summary product-summary">
                                      <h1 class="product-single-title">Women Printed Cotton A-line Kurta</h1>
                                      <div class="product-price price">
                                        <span class="new-price">₹619.00</span>
                                        <span class="old-price">₹2100.00</span>
                                      </div>
                                      <div class="product-meta">
                                          <span class="product-meta-code"><strong>SKU Code : </strong> <span class="sku">75001PP01</span></span>
                                          <span class="product-meta-code"><strong>Available Qty : </strong> <span class="available">15</span></span>
                                          <span class="product-meta-category"><strong>Categories : </strong> <a href="#">Kurta</a>, <a href="#">Anarkali Kurti</a></span>
                                      </div>
                                      <div class="product-short-desription">
                                          <p>Bring out the best of you with this beautiful Kurta Set from the house of MYAZA. The fabric in this bright and bold color kurta will make sure that the fitting of this beautiful kurta looks elegant on you.</p>
                                              <ul>
                                                <li>Cotton Fabric</li>
                                                <li>Casual</li>
                                                <li>Pleated</li>
                                                <li>3/4 Sleeves</li>
                                            </ul>
                                      </div>
                                      <!-- <div class="product-pincode">
                                        <label> Enter pincode to check availability</label>
                                        <div class="pincode-area">
                                            <div class="pincode-input">
                                                <input type="text" id="pincode" class="form-control" keypress-bind="true">
                                            </div>
                                            <div class="pincode-btn">
                                                    <button class="btn btn-primary" type="submit">Check</button>
                                            </div>
                                        </div>
                                      </div> -->
                                      <div class="product-summary-cart">
                                          <form class="variations-form addcart" action="#" method="post">
                                              <div class="product-summary-attribute">
                                                  <div class="attribute-group">
                                                      <label>Sizes</label>
                                                      <select name="size" id="size" class="" title="">
                                                          <option value="1">XXL</option>
                                                          <option value="2">XL</option>
                                                          <option value="1">L</option>
                                                          <option value="2">M</option>
                                                          <option value="1">S</option>
                                                      </select>
                                                  </div>
                                                  <div class="size-chart">
                                                      <a href="javascript:void(0);" class="size-chart-button" data-target="#sizeModal" data-toggle="modal" type="button"><i class="fas fa-chart-bar"></i> Size Chart</a>
                                                      <div class="modal fade" id="sizeModal">
                                                          <div class="modal-dialog modal-dialog-centered modal-md">
                                                              <div class="modal-content">
                                                                  <button type="button" class="close" data-dismiss="modal"
                                                                      aria-label="Close"><span
                                                                          aria-hidden="true">×</span></button>
                                                                  <div class="modal-body">
                                                                      <table>
                                                                          <tbody>
                                                                              <tr>
                                                                                  <td width="86">Size</td>
                                                                                  <td width="96">Bust (in)</td>
                                                                                  <td width="97">Whist (in)</td>
                                                                                  <td width="103">Length (in)</td>
                                                                                  <td width="95">Hip (in)</td>
                                                                                  <td width="163">Across Shoulder
                                                                                      (in)
                                                                                  </td>
                                                                              </tr>
                                                                              <tr>
                                                                                  <td width="86">S</td>
                                                                                  <td width="96">38</td>
                                                                                  <td width="97">34</td>
                                                                                  <td width="103">56</td>
                                                                                  <td width="95">39</td>
                                                                                  <td width="163">14.5</td>
                                                                              </tr>
                                                                              <tr>
                                                                                  <td width="86">M</td>
                                                                                  <td width="96">40</td>
                                                                                  <td width="97">36</td>
                                                                                  <td width="103">56</td>
                                                                                  <td width="95">41</td>
                                                                                  <td width="163">15</td>
                                                                              </tr>
                                                                              <tr>
                                                                                  <td width="86">L</td>
                                                                                  <td width="96">42</td>
                                                                                  <td width="97">38</td>
                                                                                  <td width="103">56</td>
                                                                                  <td width="95">43</td>
                                                                                  <td width="163">15.5</td>
                                                                              </tr>
                                                                              <tr>
                                                                                  <td width="86">XL</td>
                                                                                  <td width="96">44</td>
                                                                                  <td width="97">40</td>
                                                                                  <td width="103">56</td>
                                                                                  <td width="95">45</td>
                                                                                  <td width="163">16</td>
                                                                              </tr>
                                                                              <tr>
                                                                                  <td width="86">XXL</td>
                                                                                  <td width="96">46</td>
                                                                                  <td width="97">42</td>
                                                                                  <td width="103">56</td>
                                                                                  <td width="95">47</td>
                                                                                  <td width="163">16.5</td>
                                                                              </tr>
                                                                          </tbody>
                                                                      </table>
                                                                      <p>Garment Measurements in Inches</p>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="product-variations">
                                                <table class="variations" cellspacing="0">
                                                  <tbody>
                                                      <tr>
                                                          <td class="label"><label for="pa_color">Color</label></td>
                                                          <td class="value">
                                                              <ul class="variable-items-wrapper button-variable-wrapper">
                                                                  <li class="variable-item selected">
                                                                      <input id="color_aqua" type="radio" name="pa_color">
                                                                      <label  data-toggle="tooltip" for="color_aqua" title="Aqua"><span style="background-color: #00ffff;"></span></label>
                                                                  </li>
                                                                  <li class="variable-item">
                                                                      <input id="color_black" type="radio" name="pa_color">
                                                                      <label  data-toggle="tooltip" for="color_black" title="Black"><span style="background-color: #000000;"></span></label>
                                                                  </li>
                                                                  <li class="variable-item">
                                                                      <input id="color_denim" type="radio" name="pa_color">
                                                                      <label  data-toggle="tooltip" for="color_denim" title="Denim"><span style="background-color: #1560bd;"></span></label>
                                                                  </li>
                                                                  <li class="variable-item">
                                                                      <input id="color_pink" type="radio" name="pa_color">
                                                                      <label  data-toggle="tooltip" for="color_pink" title="Pink"><span style="background-color: #ff00ff;"></span></label>
                                                                  </li>
                                                                  <li class="variable-item">
                                                                      <input id="color_silver" type="radio" name="pa_color">
                                                                      <label  data-toggle="tooltip" for="color_silver" title="Silver"><span style="background-color: #c0c0c0;"></span></label>
                                                                  </li>

                                                              </ul>
                                                          </td>
                                                      </tr>
                                                  </tbody>
                                              </table>
                                              </div>
                                              <div class="wishlist-quantity-button">
                                                  <div class="quantity">
                                                      <label for="quantity"> Quantity </label>
                                                      <div class="quantity-group">
                                                          <a href="javascript:void(0)" class="dec qty-btn"></a>
                                                          <input type="text" id="quantity" class="input-text qty"
                                                              name="quantity" value="1" maxlength="50">
                                                          <a href="javascript:void(0)" class="inc qty-btn"></a>
                                                      </div>
                                                  </div>
                                                  <div class="single-wishlist-btn">
                                                      <a href="#add_to_wishlist=[]" rel="nofollow" data-product-id="" class="add_to_wishlist single_add_to_wishlist" title="Add to Wishlist">
                                                          <i class="far fa-heart"></i> <span>Add to  Wishlist</span>
                                                      </a>
                                                  </div>
                                              </div>
                                              <div class="product-summary-button">
                                                  <input type="submit" name="add" class="add_to_cart_button button" id="grouped-add-to-cart" value="Add to Cart">
                                                  <button type="submit" class="buy_now_button btn btn-outline-primary">Buy Now</button>
                                              </div>
                                          </form>
                                      </div>
                                      <div class="product-promise">
                                          <div class="promise">
                                              <ul class="promise-items">
                                                  <li>
                                                      <div class="promise-wrap">
                                                          <div class="promise-icon"><i class="far fa-money-bill-alt"></i></div>
                                                          <p> 30 -Day Money Back</p>
                                                      </div>
                                                  </li>
                                                  <li><span class="promise-wrap">
                                                          <div class="promise-icon"><i class="fas fa-sync"></i></div>
                                                          <p>Lifetime Exchange &amp; Buy-Back</p>
                                                      </span></li>
                                                  <li>
                                                      <div class="promise-wrap">
                                                          <div class="promise-icon"><i class="fas fa-ribbon"></i></div>
                                                          <p>Certified Jewellery</p>
                                                      </div>
                                                  </li>
                                              </ul>
                                          </div>
                                          <div class="promise-help">
                                              <p>Any Questions? Please feel free to reach us at :
                                                  <strong>1800-123-4567</strong></p>
                                          </div>
                                      </div>
                                      <div class="product-share">
                                          <span>Share On : </span>
                                          <div class="product-share-icon">
                                              <a class="facebook" href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                              <a class="twitter" href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                                              <a class="whatsapp" href="#" target="_blank"><i class="fab fa-whatsapp"></i></a>
                                              <a class="envelope" href="#" target="_blank"><i class="far fa-envelope"></i></a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>

                      </div>
                  </div>

                  <div class="spec-highlights">
                      <div class="container-custom">
                          <div class="row">
                              <div class="col-sm-4 col-xs-12 col-md-4">
                                  <h3>The Purity Guarantee</h3>
                                  <span>---------------</span>
                                  <p>The state-of-the-art Karatmeter present in every Tanishq store is a very accurate
                                      way of measuring the purity of gold thus making our gold as pure as we say it is.
                                  </p>
                              </div>
                              <div class="col-sm-4 col-xs-12 col-md-4">
                                  <h3>You never pay for stones at the rate of gold</h3>
                                  <span>---------------</span>
                                  <p>We charge only for the actual weight of gold, after subtracting the weight of
                                      stones from the total weight of the piece. You are never charged the price of gold
                                      for the weight of
                                      stones.</p>
                              </div>
                              <div class="col-sm-4 col-xs-12 col-md-4">
                                  <h3>100% Exchange value for Diamonds, Polki, Rubies, Emeralds</h3>
                                  <span>---------------</span>
                                  <p>All our precious stones are carefully selected to deliver best-in-class quality.
                                      So much so, we offer 100% buyback on them at current prices. No wonder we are
                                      IndiaÃÂs leading
                                      diamond jeweler.</p>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="product-information">
                      <div class="container-custom">
                          <ul class="nav single-product-tabs">
                              <li><a class="active" data-toggle="tab" href="#description">Description</a></li>
                              <li><a data-toggle="tab" href="#specification">Specification</a></li>
                              <li><a data-toggle="tab" href="#reviews">Reviews(0)</a></li>
                              <li><a data-toggle="tab" href="#shipping">Shipping</a></li>
                          </ul>
                          <div class="tab-content">
                              <div class="tab-pane fade active show" id="description">
                                  <p><strong>Description</strong></p>
                                  <p>We’ve put a lot of work and innovation into these shoes. In
                                      our
                                      opinion, they define what the next level of jogging is!<br>
                                      These new sneakers have everything running shoes ought to
                                      have…
                                      Manufactured with the most durable material available, it’s
                                      at
                                      the
                                      same time as light as a feather. Enhanced with multiple
                                      modern
                                      technologies, this footwear is more like a hi-tech artwork.
                                      One
                                      of
                                      such sports technologies was developed in collaboration with
                                      Olympic
                                      champions. The stars of the running athletics &ndash; Usain
                                      Bolt
                                      and
                                      Oscar Pistorius made a priceless contribution to that
                                      process.
                                      Shoes
                                      include an extra special fabric, that absorbs all the liquid
                                      and
                                      reeves all the air. It ensures that your feet are able to
                                      “breath”
                                      easily, while you’re “on a go”</p>
                              </div>
                              <div class="tab-pane fade" id="specification">
                                  <p><strong>Specification</strong></p>
                                  <p>Lorem Ipsum is simply dummy text of the printing and
                                      typesetting
                                      industry. Lorem Ipsum has been the industry's standard dummy
                                      text
                                      ever since the 1500s, when an unknown printer took a galley
                                      of
                                      type
                                      and scrambled it to make a type specimen book. It has
                                      survived
                                      not
                                      only five centuries, but also the leap into electronic
                                      typesetting,
                                      remaining essentially unchanged. It was popularised in the
                                      1960s
                                      with the release of Letraset sheets containing Lorem Ipsum
                                      passages,
                                      and more recently with desktop publishing software like
                                      Aldus
                                      PageMaker including versions of Lorem Ipsum.</p>
                              </div>
                              <div class="tab-pane fade" id="reviews">
                                  <div id="reviews" class="review-form-section">
                                      <div class="comments">
                                          <p>There are no reviews for this product.</p>
                                      </div>
                                      <div class="review-form-wrapper">
                                          <h5 class="comment-reply-title">Add a review </h5>
                                          <form action="" method="post" id="commentform" class="comment-form"
                                              novalidate="">
                                              <div class="comment-form-rating">
                                                  <h4>Your Rating</h4>
                                                  <div class="stars-rating"> <span>Bad</span>
                                                      <span class="rating">
                                                          <input type="radio" id="star1" name="rating" value="1" />
                                                          <label for="star1" title="Sucks big time - 1 star"></label>
                                                          <input type="radio" id="star2" name="rating" value="2" />
                                                          <label for="star2" title="Kinda bad - 2 stars"></label>
                                                          <input type="radio" id="star3" name="rating" value="3" />
                                                          <label for="star3" title="Meh - 3 stars"></label>
                                                          <input type="radio" id="star4" name="rating" value="4" />
                                                          <label for="star4" title="Pretty good - 4 stars"></label>
                                                          <input type="radio" id="star5" name="rating" value="5" />
                                                          <label for="star5" title="Awesome - 5 stars"></label>
                                                      </span> <span>Good</span>
                                                  </div>
                                              </div>
                                              <div class="row">
                                                  <div class="comment-form-comment form-group col-12">
                                                      <label for="comment">Your Review <span
                                                              class="required">*</span></label>
                                                      <textarea class="form-control" id="comment" name="comment" cols="45"
                                                          rows="8" aria-required="true" required=""></textarea>
                                                  </div>
                                                  <div class="comment-form-author form-group col-md-6 col-sm-6 col-12">
                                                      <label for="author">Name <span class="required">*</span></label>
                                                      <input class="form-control" id="author" name="author" value="" size="30" aria-required="true" required="" type="text" placeholder="Name">
                                                  </div>
                                                  <div class="comment-form-email form-group col-md-6 col-sm-6 col-12">
                                                      <label for="email">Email <span class="required">*</span></label>
                                                      <input class="form-control" id="email" name="email" value="" size="30" aria-required="true" required="" type="email" placeholder="Email">
                                                  </div>
                                              </div>
                                              <div class="form-submit">
                                                  <input name="submit" id="submit" class="btn btn-primary submit"
                                                      value="Submit" type="submit">
                                              </div>
                                          </form>
                                      </div>
                                  </div>
                              </div>

                              <div class="tab-pane fade" id="shipping">
                                  <p><strong>Shipping</strong></p>
                                  <p>Lorem Ipsum is simply dummy text of the printing and
                                      typesetting
                                      industry. Lorem Ipsum has been the industry's standard dummy
                                      text
                                      ever since the 1500s, when an unknown printer took a galley
                                      of
                                      type
                                      and scrambled it to make a type specimen book. It has
                                      survived
                                      not
                                      only five centuries, but also the leap into electronic
                                      typesetting,
                                      remaining essentially unchanged. It was popularised in the
                                      1960s
                                      with the release of Letraset sheets containing Lorem Ipsum
                                      passages,
                                      and more recently with desktop publishing software like
                                      Aldus
                                      PageMaker including versions of Lorem Ipsum.</p>
                              </div>
                          </div>
                      </div>
                  </div>


                  <div class="related-products">
                      <div class="container-custom">
                          <div class="section-header text-center">
                              <h2 class="section-title">Related Products</h2>
                          </div>
                          <div class="products product-carousel with-bg-white">
                              <div class="product-item animate__animated animate__fadeInUp">
                                  <div class="product-wrap">
                                      <div class="product-image">
                                          <a class="pro-img" href="#">
                                              <img onerror="handleError(this);"src="{{ asset('frontend-view/images/kurti1.jpg') }}" alt="">
                                          </a>
                                          <div class="product-label">
                                              <span class="new-title">New</span>
                                              <span class="sale-title">-32%</span>
                                          </div>
                                          <div class="product-action">
                                              <a class="wishlist" href="javascript:void(0);" title="Wishlist"
                                                  data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                  <i class="fa fa-heart"></i>
                                              </a>
                                              <a href="javascript:void(0);" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                                                  <span class="cart-title"><i class="fa fa-shopping-bag"></i></span>
                                              </a>
                                              <a href="javascript:void(0);" class="quick-view" data-toggle="tooltip"
                                                  data-placement="top" title="Quickview">
                                                  <i class="fa fa-eye"></i>
                                              </a>
                                          </div>
                                      </div>
                                      <div class="product-content">
                                          <h3 class="product-title">
                                              <a href="#">Women Printed Cotton A-line Kurta</a>
                                          </h3>
                                          <div class="product-price">
                                              <span class="new-price">₹619.00</span>
                                              <span class="old-price">₹2100.00</span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <!-- product-item -->
                              <div class="product-item animate__animated animate__fadeInUp">
                                  <div class="product-wrap">
                                      <div class="product-image">
                                          <a class="pro-img" href="#">
                                              <img onerror="handleError(this);"src="{{ asset('frontend-view/images/kurti2.jpg') }}" alt="">
                                          </a>
                                          <div class="product-action">
                                              <a class="wishlist" href="javascript:void(0);" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                  <i class="fa fa-heart"></i>
                                              </a>
                                              <a href="javascript:void(0);" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                                                  <span class="cart-title"><i class="fa fa-shopping-bag"></i></span>
                                              </a>
                                              <a href="javascript:void(0);" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                  <i class="fa fa-eye"></i>
                                              </a>
                                          </div>
                                      </div>
                                      <div class="product-content">
                                          <h3 class="product-title">
                                              <a href="#">Women Printed Cotton A-line Kurta</a>
                                          </h3>
                                          <div class="product-price">
                                              <span class="new-price">₹619.00</span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <!-- product-item -->
                              <div class="product-item animate__animated animate__fadeInUp">
                                  <div class="product-wrap">
                                      <div class="product-image">
                                          <a class="pro-img" href="#">
                                              <img onerror="handleError(this);"src="{{ asset('frontend-view/images/kurti3.jpg') }}" alt="">
                                          </a>
                                          <div class="product-action">
                                              <a class="wishlist" href="javascript:void(0);" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                  <i class="fa fa-heart"></i>
                                              </a>
                                              <a href="javascript:void(0);" class="add-to-cart ajax-spin-cart"  data-toggle="tooltip" data-placement="top" title="Add to cart">
                                                  <span class="cart-title"><i class="fa fa-shopping-bag"></i></span>
                                              </a>
                                              <a href="javascript:void(0);" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                  <i class="fa fa-eye"></i>
                                              </a>
                                          </div>
                                      </div>
                                      <div class="product-content">
                                          <h3 class="product-title">
                                              <a href="#">Women Printed Cotton A-line Kurta</a>
                                          </h3>
                                          <div class="product-price">
                                              <span class="new-price">₹410.00</span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <!-- product-item -->
                              <div class="product-item animate__animated animate__fadeInUp">
                                  <div class="product-wrap">
                                      <div class="product-image">
                                          <a class="pro-img" href="#">
                                              <img onerror="handleError(this);"src="{{ asset('frontend-view/images/kurti4.jpg') }}" alt="">
                                          </a>
                                          <div class="product-label">
                                              <span class="new-title">New</span>
                                              <span class="sale-title">-32%</span>
                                          </div>
                                          <div class="product-action">
                                              <a class="wishlist" href="javascript:void(0);" title="Wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                  <i class="fa fa-heart"></i>
                                              </a>
                                              <a href="javascript:void(0);" class="add-to-cart ajax-spin-cart" data-toggle="tooltip" data-placement="top" title="Add to cart">
                                                  <span class="cart-title"><i class="fa fa-shopping-bag"></i></span>
                                              </a>
                                              <a href="javascript:void(0);" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quickview">
                                                  <i class="fa fa-eye"></i>
                                              </a>
                                          </div>
                                      </div>
                                      <div class="product-content">
                                          <h3 class="product-title">
                                              <a href="#">Women Printed Cotton A-line Kurta</a>
                                          </h3>
                                          <div class="product-price">
                                              <span class="new-price">₹410.00</span>
                                              <span class="old-price">₹2100.00</span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <!-- product-item -->
                              <div class="product-item animate__animated animate__fadeInUp">
                                  <div class="product-wrap">
                                      <div class="product-image">
                                          <a class="pro-img" href="#">
                                              <img onerror="handleError(this);"src="{{ asset('frontend-view/images/kurti5.jpg') }}" alt="">
                                          </a>
                                          <div class="product-label">
                                              <span class="new-title">New</span>
                                          </div>
                                          <div class="product-action">
                                              <a class="wishlist" href="javascript:void(0);" title="Wishlist"
                                                  data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                  <i class="fa fa-heart"></i>
                                              </a>
                                              <a href="javascript:void(0);" class="add-to-cart ajax-spin-cart"
                                                  data-toggle="tooltip" data-placement="top" title="Add to cart">
                                                  <span class="cart-title"><i class="fa fa-shopping-bag"></i></span>
                                              </a>
                                              <a href="javascript:void(0);" class="quick-view" data-toggle="tooltip"
                                                  data-placement="top" title="Quickview">
                                                  <i class="fa fa-eye"></i>
                                              </a>
                                          </div>
                                      </div>
                                      <div class="product-content">
                                          <h3 class="product-title">
                                              <a href="#">Women Printed Cotton A-line Kurta</a>
                                          </h3>
                                          <div class="product-price">
                                              <span class="new-price">₹4100.00</span>
                                              <span class="old-price">₹6000.00</span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <!-- product-item -->
                              <div class="product-item animate__animated animate__fadeInUp">
                                  <div class="product-wrap">
                                      <div class="product-image">
                                          <a class="pro-img" href="#">
                                              <img onerror="handleError(this);"src="{{ asset('frontend-view/images/kurti6.jpg') }}" alt="">
                                          </a>
                                          <div class="product-label">
                                              <span class="sale-title">-32%</span>
                                          </div>
                                          <div class="product-action">
                                              <a class="wishlist" href="javascript:void(0);" title="Wishlist"
                                                  data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                  <i class="fa fa-heart"></i>
                                              </a>
                                              <a href="javascript:void(0);" class="add-to-cart ajax-spin-cart"
                                                  data-toggle="tooltip" data-placement="top" title="Add to cart">
                                                  <span class="cart-title"><i class="fa fa-shopping-bag"></i></span>
                                              </a>
                                              <a href="javascript:void(0);" class="quick-view" data-toggle="tooltip"
                                                  data-placement="top" title="Quickview">
                                                  <i class="fa fa-eye"></i>
                                              </a>
                                          </div>
                                      </div>
                                      <div class="product-content">
                                          <h3 class="product-title">
                                              <a href="#">Women Printed Cotton A-line Kurta</a>
                                          </h3>
                                          <div class="product-price">
                                              <span class="new-price">₹400.00</span>
                                              <span class="old-price">₹2100.00</span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <!-- product-item -->
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!--content-wrapper -->
    </section>
    <!--=====================================================
                    Site Section End
      =========================================================-->
    <footer class="footer-section" id="footer-section">
      <div class="footer">
        <div class="footer-newsletter">
          <div class="footer-newsletter-outer">
              <div class="container">
                  <div class="footer-widget">
                      <h3 class="footer-widget-title">JOIN OUR NEWSLETTER</h3>
                      <form method="post" data-id="106">
                          <div class="mc4wp-form-fields">
                              <div class="newsletter-off">
                                  <div class="newsletter-form">
                                      <p class="newsletter-input">
                                          <input type="email" name="EMAIL" placeholder="Your email address" required />
                                      </p>
                                      <p class="newsletter-submit">
                                          <input class="btn btn-secondary" type="submit" value="Subscribe" />
                                      </p>
                                  </div>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
        <div class="footer-top">
          <div class="container-custom">
            <div class="footer-widget-outer">
              <div class="row">
                <div class="footer-column footer-1 col-lg-3 col-md-6 col-sm-6 col-12 wow animate__animated animate__fadeIn"  data-wow-delay="0.3">
                  <div class="footer-widget">
                    <h4 class="footer-widget-title">Quick Links</h4>
                    <div class="menu-about-container">
                      <ul id="menu-about" class="">
                        <li><a href="{{ url('about') }}">About Us</a></li>
                        <li><a href="{{ url('blog') }}">Blog</a></li>
                        <li><a href="{{ url('contact-us') }}">Contact Us</a></li>
                        <li><a href="{{ url('faqs') }}">FAQ</a></li>
                        <li><a href="#">Stock Clearance Sale</a></li>
                        <li><a href="#">The Green Store</a></li>
                        <li><a href="#">Traditional Jaipuri Jewellery </a></li>
                        <li><a href="#">Packing Process</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="footer-column footer-2 col-lg-3 col-md-6 col-sm-6 col-12 wow animate__animated animate__fadeIn" data-wow-delay="0.5s">
                  <div class="footer-widget">
                    <h4 class="footer-widget-title">Information</h4>
                    <div class="menu-about-container">
                      <ul id="menu-about" class="">
                        <li><a href="privacy-policy.html">Privacy Policy</a></li>
                        <li><a href="#">Terms &amp; Conditions</a></li>
                        <li><a href="#">Shipping Policy</a></li>
                        <li><a href="#">Cancellation & Return Policy</a></li>
                        <li><a href="#">Payment Policy</a></li>
                        <li><a href="#">Dispute Resolution</a></li>
                        <li><a href="#">Genuine Quality product</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="footer-column footer-2  col-lg-3 col-md-6 col-sm-6 col-12 wow animate__animated animate__fadeIn" data-wow-delay="0.7s">
                  <div class="footer-widget widget_nav_menu">
                    <h4 class="footer-widget-title">My Account</h4>
                    <div class="menu-my-account-container">
                      <ul id="menu-my-account" class="">
                        <li><a href="{{ url('sign-in') }}">Login/Signup</a></li>
                        <li><a href="{{ url('my-account') }}">My account</a></li>
                        <li><a href="{{ url('my-account') }}">My account</a></li>
                        <li><a href="{{ url('my-orders') }}">Orders</a></li>
                        <li><a href="{{ url('my-wishlist') }}">Wishlist</a></li>
                        <li><a href="#">Reward Program</a></li>
                        <li><a href="#">Bulk Buy </a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="footer-column footer-1 col-lg-3 col-md-6 col-sm-6 col-12 wow animate__animated animate__fadeIn"  data-wow-delay="0.9s">
                  <div class="footer-widget">
                    <div class="footer-social">
                      <h4 class="footer-widget-title">Follow Us</h4>
                      <ul class="footer-social-icon">
                        <li class="facebook"><a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="instagram"><a target="_blank" href="#"><i class="fab fa-instagram"></i></a></li>
                        <li class="pinterest"><a target="_blank" href="#"><i class="fab fa-pinterest"></i></a></li>
                        <li class="twitter"><a target="_blank" href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="youtube"><a target="_blank" href="#"><i class="fab fa-youtube"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="footer-payment-widget footer-widget">
                    <h4 class="footer-widget-title">Payment Options</h4>
                    <div class="">
                      <img onerror="handleError(this);"src="{{ asset('frontend-view/images/card-image.png') }}" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-bottom">
          <div class="container-custom">
            <div class="footer-bottom-outer">
              <div class="row">
                <div class="footer-bottom-left col-md-6 col-sm-12 col-12">
                  <div class="copyright">
                    <p>&copy;2021 myazakurties. All Rights Reserved. Powered BY : <a href="https://dzoneindia.co.in/"
                        target="_blank">Dzone India</a></p>
                  </div>
                </div>
                <div class="footer-bottom-right col-md-6 col-sm-12 col-12">
                  <ul class="footer-menu">
                    <li><a href="#">Disclaimer Policy </a></li>
                    <li><a href="#">Help</a></li>
                    <li><a href="#">Site Map </a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!--=====================================================
                                  Footer Section End
      =========================================================-->
    <div class="scroll-top">
      <a class="scroll-to-top" href="javascript:void(0);" id="scrolltop"><i class="fa fa-angle-up"></i></a>
    </div>
    <!-- <div id="loader" class="loader"></div> -->
    <div class="msg-call">
      <nav class="menu">
  <input type="checkbox" href="#" class="menu-open" name="menu-open" id="menu-open"/>
  <label class="menu-open-button" for="menu-open">
    <i class="far fa-comment-dots"></i>
  </label>

  <a target="_blank" href="https://wa.me/917737384209/?text=Hello Myazakurties" class="menu-item"> <i class="fab fa-whatsapp"></i> </a>
  <a target="_blank" href="mailto:info@myazakurties.com" class="menu-item"> <i class="fa fa-envelope"></i> </a>
  <a target="_blank" href="tel:0773738420" class="menu-item"> <i class="fa fa-phone-alt"></i> </a>


</nav>


<!-- filters -->
<svg xmlns="http://www.w3.org/2000/svg" version="1.1">
    <defs>
      <filter id="shadowed-goo">

          <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10" />
          <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
          <feGaussianBlur in="goo" stdDeviation="3" result="shadow" />
          <feColorMatrix in="shadow" mode="matrix" values="0 0 0 0 0  0 0 0 0 0  0 0 0 0 0  0 0 0 1 -0.2" result="shadow" />
          <feOffset in="shadow" dx="1" dy="1" result="shadow" />
          <feBlend in2="shadow" in="goo" result="goo" />
          <feBlend in2="goo" in="SourceGraphic" result="mix" />
      </filter>
      <filter id="goo">
          <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10" />
          <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
          <feBlend in2="goo" in="SourceGraphic" result="mix" />
      </filter>
    </defs>
</svg>
</div>
    <!-- whatsapp-call -->
    <div class="modal fade loginregister-modal" id="loginregister" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-md modal-dialog-centered" role="document">
          <div class="modal-content">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
              <div class="modal-body">
                  <div class="modal-login loginregister-area">
                      <div class="loginregister-header">
                          <h3>Sign in</h3>
                          <p>Enter your email address to sign in.</p>
                      </div>
                      <div class="loginregister-body">
                          <form action="">
                              <div class="form-group">
                                  <label for="email">Email address</label>
                                  <input type="email" class="form-control" id="email" placeholder="Enter email">
                              </div>
                              <div class="form-group">
                                  <label for="password">Password</label>
                                  <input type="password" class="form-control" id="password" placeholder="Password">
                              </div>
                              <div class="form-forgot-pass">
                                  <a href="{{ url('forget-password') }}" class="forgot-pass">Forgot Password?</a>
                              </div>
                              <div class="form-submit">
                                  <button type="submit" class="btn btn-primary">Submit</button>
                              </div>
                          </form>

                          <div class="login-social">
                              <p class="login-social-title"><strong> OR SIGN IN USING </strong></p>
                              <div class="social">
                                  <ul class="social-icon">
                                      <li class="facebook"><a target="_blank" href="#"><i class="fab fa-facebook-f"></i><span>Facebook</span></a></li>
                                      <li class="google"><a target="_blank" href="#"><i class="fab fa-google"></i><span>Google</span></a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="loginregister-now">
                              <h4>Do not have an account?</h4>
                              <a href="#" class="account-link register">Sign Up?</a>
                          </div>
                      </div>
                  </div>
                  <div class="modal-register d-none loginregister-area">
                      <div class="loginregister-header">
                          <h3>Signup</h3>
                          <p>Create an account to latest Update.</p>
                      </div>
                      <div class="loginregister-body">
                          <form action="">
                              <div class="form-group">
                                  <label for="name">Name</label>
                                  <input type="text" class="form-control" id="name" placeholder="Name">
                              </div>
                              <div class="form-group">
                                  <label for="email">Email address</label>
                                  <input type="email" class="form-control" id="email" placeholder="Enter email">
                              </div>
                              <div class="form-group">
                                  <label for="phone_number">Phone Number</label>
                                  <input type="tel" class="form-control" id="phone_number" placeholder="Phone Number">
                              </div>
                              <div class="form-group">
                                  <label for="password">Password</label>
                                  <input type="password" class="form-control" id="password" placeholder="Password">
                              </div>
                              <div class="form-submit">
                                  <button type="submit" class="btn btn-primary">Create an account</button>
                              </div>
                          </form>
                          <div class="login-social">
                              <p class="login-social-title"><strong> OR SIGN IN USING </strong></p>
                              <div class="social">
                                  <ul class="social-icon">
                                      <li class="facebook"><a target="_blank" href="#"><i class="fab fa-facebook-f"></i><span>Facebook</span></a></li>
                                      <li class="google"><a target="_blank" href="#"><i class="fab fa-google"></i><span>Google</span></a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="loginregister-now">
                              <h4>Already have an account?</h4>
                              <a href="#" class="account-link login">Sign in?</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
    <!-- modal -->
  </div>
  <!-- Wrapper -->
@include('frontend-view.includes.footer')
