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
                  {{-- index url --}}
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
          <div class="container">
            <div class="page-banner-wrap">
              <div role="navigation" aria-label="Breadcrumbs" class="breadcrumbs">
                <ul class="breadcrumb-items">
                    {{-- index url / --}}
                  <li class="breadcrumb-item trail-begin"><a href="{{ url('/') }}" rel="home"><span
                        itemprop="name">Home</span></a></li>
                  <li class="breadcrumb-item trail-end"><span itemprop="name">Checkout</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- page-banner-section -->
      <div class="container">
        <div class="content-wrapper">
          <div class="page-header text-center">
            <h1 class="page-title">Checkout</h1>
          </div>
          <div class="row">
            <div class="content-area col-12">
              <div class="content-section">
                <div class="row flex-row-reverse">
                  <div class="col-lg-4 col-md-12 col-12">
                    <div class="checkout-collaterals">
                      <div class="coupon">
                        <label for="coupon_code">Apply Coupon Code</label>
                        <div class="coupon-group">
                          <input type="text" name="coupon_code" class="input-text" id="coupon_code" value=""
                            placeholder="Coupon code">
                          <button type="submit" class="button" name="apply_coupon" value="Apply coupon">Apply</button>
                        </div>
                      </div>
                      <div class="reward-points">
                        <h5>Use Reward Points</h5>
                        <div class="custom-control custom-checkbox reward-points-group">
                          <input type="checkbox" class="custom-control-input" id="reward_points">
                          <label class="custom-control-label" for="reward_points"> ₹100.00</label>
                        </div>
                      </div>
                      <div class="checkout-totals">
                        <div class="order-table-wrapper">
                          <table class="shop-table checkout-totals-table">
                            <tbody>
                              <tr class="cart-subtotal">
                                <td>Subtotal</td>
                                <td class="text-right"><span class="price">₹810.00</span></td>
                              </tr>
                              <tr class="shipping-totals">
                                <td>Shipping</td>
                                <td data-title="Shipping" class="text-right">Free</td>
                              </tr>
                              <tr class="tax-totals">
                                <td>Tax</td>
                                <td data-title="Tax" class="text-right">Free</td>
                              </tr>
                              <tr class="order-total">
                                <td><strong>Total</strong></td>
                                <td class="text-right"><strong><span class="price">₹810.00</span></strong> </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <!-- order-table-wrapper -->
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-8 col-md-12 col-12">
                    <div class="checkout-login">
                      <h5 class="page-section-title">Sign In</h5>
                      <div class="checkout-login-area">
                        <form action="">
                          <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email">
                          </div>
                          <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password">
                          </div>
                          <div class="form-group-forgotpass">
                            <a href="{{ url('forget-password') }}" class="forgot-pass">Forgot Password?</a>
                          </div>
                          <div class="form-submit">
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                        </form>
                      </div>
                    </div>
                    <!-- checkout-login -->
                    <div class="shipping-sections">
                      <div class="shipping-address shipping-section">
                        <h5 class="shipping-section-title">Shipping Addrress</h5>
                        <div class="shipping-address-items">
                          <div class="shipping-address-item selected-item">
                            <p>John Smith <span class="ml-3">+91-7737384209</span></p>
                            <p>06, Shakti Vihar Kalyanpura Sanganer, Jaipur – Rajasthan, India - <span>302029</span></p>
                          </div>
                          <div class="shipping-address-item not-selected-item">
                            <p>John Smith <span class="ml-3">+91-7737384209</span></p>
                            <p>06, Shakti Vihar Kalyanpura Sanganer, Jaipur – Rajasthan, India - <span>302029</span></p>
                            <button type="button" class="btn btn-primary action-select-shipping-item"
                              data-bind="click: selectAddress">
                              <span data-bind="i18n: 'Ship Here'">Ship Here</span>
                            </button>
                          </div>
                        </div>
                        <div class="new-address-popup">
                          <button type="button" class="btn btn-primary action-show-popup" data-toggle="modal"
                            data-target="#newaddress">
                            <span>New Address</span>
                          </button>
                          <div class="modal fade checkout-newaddress-modal" id="newaddress" tabindex="-1" role="dialog"
                            aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h3 class="modal-title"> Shipping Address</h3>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <form method="POST" action="">
                                    <div class="shipping-fields-wrapper row">
                                      <div class="form-group col-sm-6 col-12" id="shipping_first_name_field">
                                        <label for="shipping_first_name" class="">First name <abbr class="required"
                                            title="required">*</abbr></label>
                                        <input type="text" class="input-text " name="shipping_first_name"
                                          id="shipping_first_name" placeholder="" value="">
                                      </div>
                                      <div class="form-group col-sm-6 col-12" id="shipping_last_name_field">
                                        <label for="shipping_last_name" class="">Last name <abbr class="required"
                                            title="required">*</abbr></label>
                                        <input type="text" class="input-text " name="shipping_last_name"
                                          id="shipping_last_name" placeholder="" value="">
                                      </div>
                                      <div class="form-group col-sm-6 col-12" id="shipping_company_field">
                                        <label for="shipping_company" class="">Company name</label>
                                        <input type="text" class="input-text " name="shipping_company"
                                          id="shipping_company" placeholder="" value="">
                                      </div>
                                      <div class="form-group col-sm-6 col-12" id="shipping_country_field">
                                        <label for="shipping_country" class="">Country / Region <abbr class="required"
                                            title="required">*</abbr></label>
                                        <select name="shipping_country" id="shipping_country" class="country_select">
                                          <option value="">Select a country / region…</option>
                                          <option value="AX">Åland Islands</option>
                                          <option value="AF">Afghanistan</option>
                                          <option value="AL">Albania</option>
                                          <option value="DZ">Algeria</option>
                                          <option value="AS">American Samoa</option>
                                          <option value="AD">Andorra</option>
                                          <option value="AO">Angola</option>
                                          <option value="AI">Anguilla</option>
                                          <option value="AQ">Antarctica</option>
                                          <option value="AG">Antigua and Barbuda</option>
                                          <option value="AR">Argentina</option>
                                          <option value="AM">Armenia</option>
                                          <option value="AW">Aruba</option>
                                          <option value="AU">Australia</option>
                                          <option value="AT">Austria</option>
                                          <option value="AZ">Azerbaijan</option>
                                          <option value="BS">Bahamas</option>
                                          <option value="BH">Bahrain</option>
                                          <option value="BD">Bangladesh</option>
                                          <option value="BB">Barbados</option>
                                          <option value="BY">Belarus</option>
                                          <option value="PW">Belau</option>
                                          <option value="BE">Belgium</option>
                                          <option value="BZ">Belize</option>
                                          <option value="BJ">Benin</option>
                                          <option value="BM">Bermuda</option>
                                          <option value="BT">Bhutan</option>
                                          <option value="BO">Bolivia</option>
                                          <option value="BQ">Bonaire, Saint Eustatius and Saba</option>
                                          <option value="BA">Bosnia and Herzegovina</option>
                                          <option value="BW">Botswana</option>
                                          <option value="BV">Bouvet Island</option>
                                          <option value="BR">Brazil</option>
                                          <option value="IO">British Indian Ocean Territory</option>
                                          <option value="BN">Brunei</option>
                                          <option value="BG">Bulgaria</option>
                                          <option value="BF">Burkina Faso</option>
                                          <option value="BI">Burundi</option>
                                          <option value="KH">Cambodia</option>
                                          <option value="CM">Cameroon</option>
                                          <option value="CA">Canada</option>
                                          <option value="CV">Cape Verde</option>
                                          <option value="KY">Cayman Islands</option>
                                          <option value="CF">Central African Republic</option>
                                          <option value="TD">Chad</option>
                                          <option value="CL">Chile</option>
                                          <option value="CN">China</option>
                                          <option value="CX">Christmas Island</option>
                                          <option value="CC">Cocos (Keeling) Islands</option>
                                          <option value="CO">Colombia</option>
                                          <option value="KM">Comoros</option>
                                          <option value="CG">Congo (Brazzaville)</option>
                                          <option value="CD">Congo (Kinshasa)</option>
                                          <option value="CK">Cook Islands</option>
                                          <option value="CR">Costa Rica</option>
                                          <option value="HR">Croatia</option>
                                          <option value="CU">Cuba</option>
                                          <option value="CW">Curaçao</option>
                                          <option value="CY">Cyprus</option>
                                          <option value="CZ">Czech Republic</option>
                                          <option value="DK">Denmark</option>
                                          <option value="DJ">Djibouti</option>
                                          <option value="DM">Dominica</option>
                                          <option value="DO">Dominican Republic</option>
                                          <option value="EC">Ecuador</option>
                                          <option value="EG">Egypt</option>
                                          <option value="SV">El Salvador</option>
                                          <option value="GQ">Equatorial Guinea</option>
                                          <option value="ER">Eritrea</option>
                                          <option value="EE">Estonia</option>
                                          <option value="ET">Ethiopia</option>
                                          <option value="FK">Falkland Islands</option>
                                          <option value="FO">Faroe Islands</option>
                                          <option value="FJ">Fiji</option>
                                          <option value="FI">Finland</option>
                                          <option value="FR">France</option>
                                          <option value="GF">French Guiana</option>
                                          <option value="PF">French Polynesia</option>
                                          <option value="TF">French Southern Territories</option>
                                          <option value="GA">Gabon</option>
                                          <option value="GM">Gambia</option>
                                          <option value="GE">Georgia</option>
                                          <option value="DE">Germany</option>
                                          <option value="GH">Ghana</option>
                                          <option value="GI">Gibraltar</option>
                                          <option value="GR">Greece</option>
                                          <option value="GL">Greenland</option>
                                          <option value="GD">Grenada</option>
                                          <option value="GP">Guadeloupe</option>
                                          <option value="GU">Guam</option>
                                          <option value="GT">Guatemala</option>
                                          <option value="GG">Guernsey</option>
                                          <option value="GN">Guinea</option>
                                          <option value="GW">Guinea-Bissau</option>
                                          <option value="GY">Guyana</option>
                                          <option value="HT">Haiti</option>
                                          <option value="HM">Heard Island and McDonald Islands</option>
                                          <option value="HN">Honduras</option>
                                          <option value="HK">Hong Kong</option>
                                          <option value="HU">Hungary</option>
                                          <option value="IS">Iceland</option>
                                          <option value="IN">India</option>
                                          <option value="ID">Indonesia</option>
                                          <option value="IR">Iran</option>
                                          <option value="IQ">Iraq</option>
                                          <option value="IE">Ireland</option>
                                          <option value="IM">Isle of Man</option>
                                          <option value="IL">Israel</option>
                                          <option value="IT">Italy</option>
                                          <option value="CI">Ivory Coast</option>
                                          <option value="JM">Jamaica</option>
                                          <option value="JP">Japan</option>
                                          <option value="JE">Jersey</option>
                                          <option value="JO">Jordan</option>
                                          <option value="KZ">Kazakhstan</option>
                                          <option value="KE">Kenya</option>
                                          <option value="KI">Kiribati</option>
                                          <option value="KW">Kuwait</option>
                                          <option value="KG">Kyrgyzstan</option>
                                          <option value="LA">Laos</option>
                                          <option value="LV">Latvia</option>
                                          <option value="LB">Lebanon</option>
                                          <option value="LS">Lesotho</option>
                                          <option value="LR">Liberia</option>
                                          <option value="LY">Libya</option>
                                          <option value="LI">Liechtenstein</option>
                                          <option value="LT">Lithuania</option>
                                          <option value="LU">Luxembourg</option>
                                          <option value="MO">Macao</option>
                                          <option value="MG">Madagascar</option>
                                          <option value="MW">Malawi</option>
                                          <option value="MY">Malaysia</option>
                                          <option value="MV">Maldives</option>
                                          <option value="ML">Mali</option>
                                          <option value="MT">Malta</option>
                                          <option value="MH">Marshall Islands</option>
                                          <option value="MQ">Martinique</option>
                                          <option value="MR">Mauritania</option>
                                          <option value="MU">Mauritius</option>
                                          <option value="YT">Mayotte</option>
                                          <option value="MX">Mexico</option>
                                          <option value="FM">Micronesia</option>
                                          <option value="MD">Moldova</option>
                                          <option value="MC">Monaco</option>
                                          <option value="MN">Mongolia</option>
                                          <option value="ME">Montenegro</option>
                                          <option value="MS">Montserrat</option>
                                          <option value="MA">Morocco</option>
                                          <option value="MZ">Mozambique</option>
                                          <option value="MM">Myanmar</option>
                                          <option value="NA">Namibia</option>
                                          <option value="NR">Nauru</option>
                                          <option value="NP">Nepal</option>
                                          <option value="NL">Netherlands</option>
                                          <option value="NC">New Caledonia</option>
                                          <option value="NZ">New Zealand</option>
                                          <option value="NI">Nicaragua</option>
                                          <option value="NE">Niger</option>
                                          <option value="NG">Nigeria</option>
                                          <option value="NU">Niue</option>
                                          <option value="NF">Norfolk Island</option>
                                          <option value="KP">North Korea</option>
                                          <option value="MK">North Macedonia</option>
                                          <option value="MP">Northern Mariana Islands</option>
                                          <option value="NO">Norway</option>
                                          <option value="OM">Oman</option>
                                          <option value="PK">Pakistan</option>
                                          <option value="PS">Palestinian Territory</option>
                                          <option value="PA">Panama</option>
                                          <option value="PG">Papua New Guinea</option>
                                          <option value="PY">Paraguay</option>
                                          <option value="PE">Peru</option>
                                          <option value="PH">Philippines</option>
                                          <option value="PN">Pitcairn</option>
                                          <option value="PL">Poland</option>
                                          <option value="PT">Portugal</option>
                                          <option value="PR">Puerto Rico</option>
                                          <option value="QA">Qatar</option>
                                          <option value="RE">Reunion</option>
                                          <option value="RO">Romania</option>
                                          <option value="RU">Russia</option>
                                          <option value="RW">Rwanda</option>
                                          <option value="ST">São Tomé and Príncipe</option>
                                          <option value="BL">Saint Barthélemy</option>
                                          <option value="SH">Saint Helena</option>
                                          <option value="KN">Saint Kitts and Nevis</option>
                                          <option value="LC">Saint Lucia</option>
                                          <option value="SX">Saint Martin (Dutch part)</option>
                                          <option value="MF">Saint Martin (French part)</option>
                                          <option value="PM">Saint Pierre and Miquelon</option>
                                          <option value="VC">Saint Vincent and the Grenadines</option>
                                          <option value="WS">Samoa</option>
                                          <option value="SM">San Marino</option>
                                          <option value="SA">Saudi Arabia</option>
                                          <option value="SN">Senegal</option>
                                          <option value="RS">Serbia</option>
                                          <option value="SC">Seychelles</option>
                                          <option value="SL">Sierra Leone</option>
                                          <option value="SG">Singapore</option>
                                          <option value="SK">Slovakia</option>
                                          <option value="SI">Slovenia</option>
                                          <option value="SB">Solomon Islands</option>
                                          <option value="SO">Somalia</option>
                                          <option value="ZA">South Africa</option>
                                          <option value="GS">South Georgia/Sandwich Islands</option>
                                          <option value="KR">South Korea</option>
                                          <option value="SS">South Sudan</option>
                                          <option value="ES">Spain</option>
                                          <option value="LK">Sri Lanka</option>
                                          <option value="SD">Sudan</option>
                                          <option value="SR">Suriname</option>
                                          <option value="SJ">Svalbard and Jan Mayen</option>
                                          <option value="SZ">Swaziland</option>
                                          <option value="SE">Sweden</option>
                                          <option value="CH">Switzerland</option>
                                          <option value="SY">Syria</option>
                                          <option value="TW">Taiwan</option>
                                          <option value="TJ">Tajikistan</option>
                                          <option value="TZ">Tanzania</option>
                                          <option value="TH">Thailand</option>
                                          <option value="TL">Timor-Leste</option>
                                          <option value="TG">Togo</option>
                                          <option value="TK">Tokelau</option>
                                          <option value="TO">Tonga</option>
                                          <option value="TT">Trinidad and Tobago</option>
                                          <option value="TN">Tunisia</option>
                                          <option value="TR">Turkey</option>
                                          <option value="TM">Turkmenistan</option>
                                          <option value="TC">Turks and Caicos Islands</option>
                                          <option value="TV">Tuvalu</option>
                                          <option value="UG">Uganda</option>
                                          <option value="UA">Ukraine</option>
                                          <option value="AE">United Arab Emirates</option>
                                          <option value="GB">United Kingdom (UK)</option>
                                          <option value="US" selected="selected">United States (US)</option>
                                          <option value="UM">United States (US) Minor Outlying Islands</option>
                                          <option value="UY">Uruguay</option>
                                          <option value="UZ">Uzbekistan</option>
                                          <option value="VU">Vanuatu</option>
                                          <option value="VA">Vatican</option>
                                          <option value="VE">Venezuela</option>
                                          <option value="VN">Vietnam</option>
                                          <option value="VG">Virgin Islands (British)</option>
                                          <option value="VI">Virgin Islands (US)</option>
                                          <option value="WF">Wallis and Futuna</option>
                                          <option value="EH">Western Sahara</option>
                                          <option value="YE">Yemen</option>
                                          <option value="ZM">Zambia</option>
                                          <option value="ZW">Zimbabwe</option>
                                        </select>
                                      </div>
                                      <div class="form-group col-sm-6 col-12" id="shipping_address_1_field">
                                        <label for="shipping_address_1" class="">Street address <abbr class="required"
                                            title="required">*</abbr></label>
                                        <input type="text" class="input-text " name="shipping_address_1"
                                          id="shipping_address_1" placeholder="House number and street name" value="">
                                      </div>
                                      <div class="form-group col-sm-6 col-12" id="shipping_address_2_field">
                                        <label for="shipping_address_2">Apartment, suite, unit, etc. </label>
                                        <input type="text" class="input-text " name="shipping_address_2"
                                          id="shipping_address_2" placeholder="Apartment, suite, unit, etc. (optional)"
                                          value="">
                                      </div>
                                      <div class="form-group col-sm-6 col-12" id="shipping_city_field">
                                        <label for="shipping_city" class="">Town / City <abbr class="required"
                                            title="required">*</abbr></label>
                                        <input type="text" class="input-text " name="shipping_city" id="shipping_city"
                                          placeholder="" value="">
                                      </div>
                                      <div class="form-group col-sm-6 col-12" id="shipping_state_field">
                                        <label for="shipping_state" class="">State <abbr class="required"
                                            title="required">*</abbr></label>
                                        <select name="shipping_state" id="shipping_state" class="state_select">
                                          <option value="">Select an option…</option>
                                          <option value="AL">Rajasthan</option>
                                        </select>
                                      </div>
                                      <div class="form-group col-sm-6 col-12" id="shipping_postcode_field">
                                        <label for="shipping_postcode" class="">ZIP <abbr class="required"
                                            title="required">*</abbr></label>
                                        <input type="text" class="input-text " name="shipping_postcode"
                                          id="shipping_postcode" placeholder="" value="">
                                      </div>
                                      <div class="form-group col-sm-6 col-12" id="shipping_phone_field">
                                        <label for="shipping_phone" class="">Phone <abbr class="required"
                                            title="required">*</abbr></label>
                                        <input type="tel" class="input-text " name="shipping_phone" id="shipping_phone"
                                          placeholder="" value="">
                                      </div>
                                      <div class="form-group col-sm-6 col-12" id="shipping_email_field">
                                        <label for="shipping_email" class="">Email address <abbr class="required"
                                            title="required">*</abbr></label>
                                        <input type="email" class="input-text " name="shipping_email"
                                          id="shipping_email" placeholder="" value="">
                                      </div>
                                      <div class="form-group text-right col-sm-12 col-12">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                      </div>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Shipping Address -->

                      <div class="checkout-orders-summery shipping-section">
                        <h5 class="shipping-section-title">Your order</h5>
                        <div class="checkout-order-summery">
                          <div class="checkout-cart-item">
                            <div class="checkout-cart-wrap">
                              <div class="checkout-cart-image">
                                <a href="{{ url('product-detail') }}"><img onerror="handleError(this);"src="{{ asset('frontend-view/images/kurti9.jpg') }}"></a>
                              </div>
                              <div class="checkout-cart-desc">
                                <p class="checkout-cart-title">Women Printed Cotton A-line Kurta</p>
                                <p class="checkout-cart-meta"><span>Product Code : 75001PP01</span></p>
                                <p class="checkout-cart-quantity">1 × <span class="mini-cart-price"><span
                                      class="price">₹410.00</span></span></p>
                              </div>
                            </div>
                          </div>
                          <div class="checkout-cart-item">
                            <div class="checkout-cart-wrap">
                              <div class="checkout-cart-image">
                                <a href="{{ url('product-detail') }}"><img onerror="handleError(this);"src="{{ asset('frontend-view/images/kurti2.jpg') }}"></a>
                              </div>
                              <div class="checkout-cart-desc">
                                <p class="checkout-cart-title">Women Printed Cotton A-line Kurta</p>
                                <p class="checkout-cart-meta"><span>Product Code : 75001PP01</span></p>
                                <p class="checkout-cart-quantity">1 × <span class="mini-cart-price"><span
                                      class="price">₹400.00</span></span></p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- shipping-order-summery -->

                      <!-- <div class="checkout-gift-wrapper shipping-section">
                        <h5 class="shipping-section-title">Gift Wrap</h5>
                        <div class="gift-wrapper" id="giftwrapper">
                          <div class="row">
                            <div class="form-group col-12">
                              <label>Select Gift Option</label>
                              <div class="form-group-radio">
                                <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="gift50" name="gift" class="custom-control-input">
                                  <label class="custom-control-label" for="gift50">Rs. 50</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="gift30" name="gift" class="custom-control-input">
                                  <label class="custom-control-label" for="gift30">Rs. 30</label>
                                </div>
                              </div>
                            </div>
                            <div class="form-group col-sm-6 col-12">
                              <label>To</label>
                              <input type="text" class="form-control" id="gift_to" name="gift_to"
                                placeholder="Enter Recepients Name" required="">
                            </div>
                            <div class="form-group col-sm-6 col-12">
                              <label for="input1">Form</label>
                              <input type="text" class="form-control" id="gift_from" placeholder="Enter Sender's Name"
                                name="gift_from" required="">
                            </div>
                            <div class="form-group col-sm-12 col-12">
                              <label for="input1">Message</label>
                              <textarea class="form-control" placeholder="Add your message"
                                name="gift_message"></textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="SUBMIT">
                          </div>
                        </div>
                      </div> -->
                      <!-- checkout-gift-wrapper -->

                      <div id="payment" class="checkout-payment shipping-section">
                        <h5 class="shipping-section-title">Payment Details</h5>
                        <div class="payemt-option">
                          <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="payment-wallet" name="payment-input" class="custom-control-input"
                              value="wallet" checked>
                            <label class="custom-control-label" for="payment-wallet">Wallet</label>
                          </div>
                          <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="payment-razorpay" name="payment-input" class="custom-control-input"
                              value="razorpay">
                            <label class="custom-control-label" for="payment-razorpay">Razorpay</label>
                          </div>
                          <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="payment-cod" name="payment-input" class="custom-control-input"
                              value="cod">
                            <label class="custom-control-label" for="payment-cod">COD</label>
                          </div>
                          <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="payment-paypal" name="payment-input" class="custom-control-input"
                              value="paypal">
                            <label class="custom-control-label" for="payment-paypal">PayPal</label>
                          </div>
                        </div>
                        <div class="payment-methods-option">
                          <div id="payment-wallet" class="payment-method wallet">
                            <div class="payment-box">
                              <h4 class="payment-box-title">Pay with your wallet</h4>
                              <p>Balance : ₹ 1000.00</p>
                              <button type="submit" class="button" name="checkout_place_order" id="place_order"
                                value="Place order" data-value="Place order">Place order</button>
                            </div>
                          </div>
                          <div id="payment-razorpay" class="payment-method razorpay" style="display: none;">
                            <div class="payment-box">
                              <h4 class="payment-box-title"> Pay with Razorpay</h4>
                              <p>Pay with Razorpay.</p>
                              <button type="submit" class="button" name="checkout_place_order" id="place_order"
                                value="Place order" data-value="Place order">Place order</button>
                            </div>
                          </div>
                          <div id="payment-cod" class="payment-method cod" style="display: none;">
                            <div class="payment-box">
                              <h4 class="payment-box-title">Cash on delivery</h4>
                              <p>Pay with cash upon delivery.</p>
                              <button type="submit" class="button" name="checkout_place_order" id="place_order"
                                value="Place order" data-value="Place order">Place order</button>
                            </div>
                          </div>
                          <div id="payment-paypal" class="payment-method paypal" style="display: none;">
                            <div class="payment-box">
                              <h4 class="payment-box-title">Pay with PayPal</h4>
                              <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.
                              </p>
                              <button type="submit" class="button" name="checkout_place_order" id="place_order"
                                value="Place order" data-value="Place order">Place order</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- checkout-payment -->
                    </div>
                  </div>


                </div>

              </div>
            </div>
            <!--content-area-->
          </div>
          <!--row-->
        </div>
        <!--content-wrapper -->
      </div>
      <!--container-->
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
                        <li><a href="{{ url('signin') }}">Login/Signup</a></li>
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
