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
                      <p class="announcement-item"><a href="{{ url('product-list') }}">Shipping Flat $30 for all International Orders -  Explore</a></p>
                      <p class="announcement-item"><a href="{{ url('product-list') }}">Wild Iris & Himalayan Poppy - Dinnerware Collection - Shop Now</a>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="header-top-right col-lg-6 col-md-4 col-sm-12 col-12">
                  <ul class="header-nav">
                    <li><a href="{{ url('about') }}">About Us</a></li>
                    <li><a href="{{ url('contact-us') }}">Contact Us</a></li>
                    <li><a href="{{ url('blog') }}">Blog</a></li>
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
                  {{-- index urkl --}}
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
                      <p class="pl-3 m-2">Hi Arjun!</p>
                      <ul class="account-menu-list">
                        <li><a href="{{ url('my-account') }}"><i class="fa fa-user"></i>My Account </a> </li>
                        <li><a href="{{ url('my-address') }}"><i class="fa fa-address-book"></i>My Address </a> </li>
                        <li><a href="{{ url('my-orders') }}"><i class="fa fa-shopping-basket"></i>My Orders </a> </li>
                        <li><a href="{{ url('my-wishlist') }}"><i class="far fa-heart"></i>My Wishlist </a> </li>
                        <li><a href="{{ url('my-coupones') }}"><i class="fa fa-tags"></i>My Coupons </a> </li>
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
                              <a href="{{ url('product-detail') }}"><img onerror="handleError(this);"src="{{ asset('frontend-view/images/1.jpg') }}" alt="">Malti Cushion Cover Set of Two-Reversible </a>
                              <span class="quantity">1 × <span class="mini-cart-price"><span class="price">₹4100.00</span></span></span>
                            </li>
                            <li class="mini-cart-item">
                              <a href="javascript:void(0);" class="remove remove_from_cart_button" aria-label="Remove this item" data-product_id="1876">×</a>
                              <a href="{{ url('product-detail') }}"><img onerror="handleError(this);"src="{{ asset('frontend-view/images/2.jpg') }}" alt="">Malti Cushion Cover Set of Two -Reversible </a>
                              <span class="quantity">1 × <span class="mini-cart-price"><span class="price">₹4100.00</span> </span></span>
                            </li>
                          </ul>
                          <p class="mini-cart-total">
                            <strong>Subtotal:</strong> <span class="mini-cart-price"><span class="price">₹4100.00</span> </span>
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
                    <li class="current-menu-item"> <a href="{{ url('index') }}">Home</a></li>
                    <li class="has-children"><a href="javascript:void(0);">Jewellery Type</a>
                      <div class="mega-menu">
                        <div class="mega-menu-area">
                            <div class="mega-menu-items">
                              <ul class="mega-menu-item">
                                <li class="has-children"><a href="{{ url('product-list') }}">Dresses</a>
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
                                </li>
                                <li class="has-children"><a href="{{ url('product-list') }}">Kurta Sets</a>
                                  <div class="mega-submenu">
                                    <div class="mega-submenu-column">
                                      <h4 class="mega-submenu-title">Women2</h4>
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
                                      <h4 class="mega-submenu-title">Collection2</h4>
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
                                      <h4 class="mega-submenu-title">Body Type2</h4>
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
                                </li>
                                <li class="has-children"><a href="{{ url('product-list') }}">Lehenga</a>
                                  <div class="mega-submenu">
                                    <div class="mega-submenu-column">
                                      <h4 class="mega-submenu-title">Women3</h4>
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
                                      <h4 class="mega-submenu-title">Collection3</h4>
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
                                      <h4 class="mega-submenu-title">Body Type3</h4>
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
                                </li>
                                <li class="has-children"><a href="{{ url('product-list') }}">Coordinated Sets</a>
                                  <div class="mega-submenu">
                                    <div class="mega-submenu-column">
                                      <h4 class="mega-submenu-title">Women4</h4>
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
                                      <h4 class="mega-submenu-title">Collection4</h4>
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
                                      <h4 class="mega-submenu-title">Body Type4</h4>
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
                                </li>
                                <li class="has-children"><a href="{{ url('product-list') }}">Night Wear</a>
                                  <div class="mega-submenu">
                                    <div class="mega-submenu-column">
                                      <h4 class="mega-submenu-title">Women5</h4>
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
                                      <h4 class="mega-submenu-title">Collection5</h4>
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
                                      <h4 class="mega-submenu-title">Body Type5</h4>
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
                                </li>
                                <li class="has-children"><a href="{{ url('product-list') }}">Home Textile</a>
                                  <div class="mega-submenu">
                                    <div class="mega-submenu-column">
                                      <h4 class="mega-submenu-title">Women6</h4>
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
                                      <h4 class="mega-submenu-title">Collection6</h4>
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
                                      <h4 class="mega-submenu-title">Body Type6</h4>
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
                                </li>
                                <li class="has-children"><a href="{{ url('product-list') }}">Bags</a>
                                  <div class="mega-submenu">
                                    <div class="mega-submenu-column">
                                      <h4 class="mega-submenu-title">Women7</h4>
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
                                      <h4 class="mega-submenu-title">Collection7</h4>
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
                                      <h4 class="mega-submenu-title">Body Type7</h4>
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
                                </li>
                              </ul>
                            </div>
                        </div>
                      </div>
                    </li>
                    <li class="has-children"><a href="{{ url('product-list') }}">Jewellery Collection</a>
                      <div class="mega-menu">
                        <div class="mega-menu-area">
                            <div class="mega-menu-items">
                              <ul class="mega-menu-item">
                                <li class="has-children"><a href="{{ url('product-list') }}">Collection 1</a>
                                  <div class="mega-submenu">
                                    <div class="mega-submenu-column">
                                      <h4 class="mega-menu-title">Collection 1</h4>
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
                                </li>
                                <li class="has-children"><a href="{{ url('product-list') }}">Collection 2</a>
                                  <div class="mega-submenu">
                                    <div class="mega-submenu-column">
                                      <h4 class="mega-submenu-title">Collection 2</h4>
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
                                      <h4 class="mega-submenu-title">Collection2</h4>
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
                                      <h4 class="mega-submenu-title">Body Type2</h4>
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
                                </li>
                                <li class="has-children"><a href="{{ url('product-list') }}">Collection 3</a>
                                  <div class="mega-submenu">
                                    <div class="mega-submenu-column">
                                      <h4 class="mega-submenu-title">Collection 3</h4>
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
                                      <h4 class="mega-submenu-title">Collection3</h4>
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
                                      <h4 class="mega-submenu-title">Body Type3</h4>
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
                                </li>
                                <li class="has-children"><a href="{{ url('product-list') }}">Collection 4</a>
                                  <div class="mega-submenu">
                                    <div class="mega-submenu-column">
                                      <h4 class="mega-submenu-title">Collection 4</h4>
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
                                      <h4 class="mega-submenu-title">Collection4</h4>
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
                                      <h4 class="mega-submenu-title">Body Type4</h4>
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
                                </li>
                                <li class="has-children"><a href="{{ url('product-list') }}">Collection 5</a>
                                  <div class="mega-submenu">
                                    <div class="mega-submenu-column">
                                      <h4 class="mega-submenu-title">Collection 5</h4>
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
                                      <h4 class="mega-submenu-title">Collection5</h4>
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
                                      <h4 class="mega-submenu-title">Body Type5</h4>
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
                                </li>
                                <li class="has-children"><a href="{{ url('product-list') }}">Collection 6</a>
                                  <div class="mega-submenu">
                                    <div class="mega-submenu-column">
                                      <h4 class="mega-submenu-title">Collection 6</h4>
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
                                      <h4 class="mega-submenu-title">Collection6</h4>
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
                                      <h4 class="mega-submenu-title">Body Type6</h4>
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
                                </li>
                                <li class="has-children"><a href="{{ url('product-list') }}">Collection 7</a>
                                  <div class="mega-submenu">
                                    <div class="mega-submenu-column">
                                      <h4 class="mega-submenu-title">Collection 7</h4>
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
                                      <h4 class="mega-submenu-title">Collection7</h4>
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
                                      <h4 class="mega-submenu-title">Body Type7</h4>
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
                                </li>
                              </ul>
                            </div>
                        </div>
                      </div>
                    </li>
                    <li><a href="{{ url('product-list') }}">Exclusive Collection </a></li>
                    <li><a href="{{ url('product-list') }}">Clearance sale</a></li>
                    <li><a href="{{ url('product-list') }}">New Arrivals</a></li>
                    <li><a href="{{ url('product-list') }}">Restock Products</a></li>
                    <li><a href="{{ url('product-list') }}">Premium Boutique Collection</a></li>
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

    <section class="site-content bg-gray">
      <div class="page-banner-section">
        <div class="page-banner page-banner-bg">
          <div class="container">
            <div class="page-banner-wrap">
              <div role="navigation" aria-label="Breadcrumbs" class="breadcrumbs">
                <ul class="breadcrumb-items">
                    {{-- index url --}}
                  <li class="breadcrumb-item trail-begin"><a href="{{ url('index') }}l" rel="home"><span
                        itemprop="name">Home</span></a></li>
                  <li class="breadcrumb-item trail-end"><span itemprop="name">FAQs</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- page-banner-section -->
      <div class="content-wrapper">
        <div class="container">
          <div class="page-header text-center">
            <h1 class="page-title">FAQs</h1>
          </div>
            <div class="content-area">
              <div class="content-section">

                <div class="faqpageaccordion" id="accordionfaq">
                  <h4 class="mb-4">ORDERS ENQUIRIES:</h4>
                  <div class="faq-card">
                    <div class="faq-header">
                      <button class="faq-button" type="button" data-toggle="collapse" data-target="#faq1" aria-expanded="true">
                        Question-1:- How do I place an order?
                      </button>
                    </div>
                    <div id="faq1" class="collapse show" data-parent="#accordionfaq">
                      <div class="faq-body">
                        To place on order on our website first step is to register with your complete details. Second step is to add products in your cart which you want to buy. Once the total cart value meets our minimum order requirement (for India INR 5000 and for International orders USD 100) you can Check-out with the available payment options.
                      </div>
                    </div>
                  </div>
                  <div class="faq-card">
                    <div class="faq-header">
                      <button class="faq-button collapsed" type="button" data-toggle="collapse" data-target="#faq2"aria-expanded="false">
                        Question-2:- How long does it take for me to get my order?
                      </button>
                    </div>
                    <div id="faq2" class="collapse" data-parent="#accordionfaq">
                      <div class="faq-body">
                       <p> We have all items ready in stock and we ship them within two working days of receiving clear payments. We use reputed couriers to ship the products and it takes maximum five to seven working days to get delivered to your doorstep under normal conditions.</p>
                      </div>
                    </div>
                  </div>
                  <div class="faq-card">
                    <div class="faq-header">
                      <button class="faq-button collapsed" type="button" data-toggle="collapse" data-target="#faq3" aria-expanded="false">
                        Question-3:- What is your minimum order?
                      </button>
                    </div>
                    <div id="faq3" class="collapse" data-parent="#accordionfaq">
                      <div class="faq-body">
                        <p>Minimum order value for Indian customers is INR 5000 and for International customers it is USD 100.</p>
                      </div>
                    </div>
                  </div>
                  <div class="faq-card">
                    <div class="faq-header">
                      <button class="faq-button collapsed" type="button" data-toggle="collapse" data-target="#faq4" aria-expanded="false">
                        Question-4:- How can the order be treated as a confirmed order, Any advance payment required?
                      </button>
                    </div>
                    <div id="faq4" class="collapse" data-parent="#accordionfaq">
                      <div class="faq-body">
                       <p> We have two types of payment processes. First process is, purchase from our website directly which products are showing on our website. Add products in cart, checkout and make payment and after payment we will dispatch the order.</p>

                        <p>Second process is, if you have requirement for the products which are not currently available on our website. Then inform us. We will charge 50% payment before manufacturing of the required products and remaining 50% once the products are ready for dispatch.</p>
                      </div>
                    </div>
                  </div>
                  <div class="faq-card">
                    <div class="faq-header">
                      <button class="faq-button collapsed" type="button" data-toggle="collapse" data-target="#faq5" aria-expanded="false">
                        Question-5:- Can I order more items than what are currently in stock?
                      </button>
                    </div>
                    <div id="faq5" class="collapse" data-parent="#accordionfaq">
                      <div class="faq-body">
                        <p>Yes you can do that but you have to contact us for the same.</p>
                      </div>
                    </div>
                  </div>
                  <div class="faq-card">
                    <div class="faq-header">
                      <button class="faq-button collapsed" type="button" data-toggle="collapse" data-target="#faq6" aria-expanded="false">
                        Question-6:- How do I check the status of my order?
                      </button>
                    </div>
                    <div id="faq6" class="collapse" data-parent="#accordionfaq">
                      <div class="faq-body">
                        <p>In order the check the current status of your order you need to got to My Account and check under My orders tab. You will find here all the details pertaining to your previous orders.</p>
                      </div>
                    </div>
                  </div>
                  <div class="faq-card">
                    <div class="faq-header">
                      <button class="faq-button collapsed" type="button" data-toggle="collapse" data-target="#faq7" aria-expanded="false">
                        Question-7:- What is the cancellation Process?
                      </button>
                    </div>
                    <div id="faq7" class="collapse" data-parent="#accordionfaq">
                      <div class="faq-body">
                        <p>1. Cancellations will be considered only if the request is made before the order has been dispatched / shipped at our end.</p>
                        <p>2. There will not be any cancellation if the order has been dispatched / shipped.</p>
                        <p>3. No cancellations are entertained for those products that the Eindiawholesale.com marketing team has obtained for special Festival occasions. These are limited occasion offers and therefore cancellations are not possible.</p>
                      </div>
                    </div>
                  </div>
                  <div class="faq-card">
                    <div class="faq-header">
                      <button class="faq-button collapsed" type="button" data-toggle="collapse" data-target="#faq8" aria-expanded="false">
                        Question-8:- How do I track my order after it has been shipped or if it is not delivered within the standard time?
                      </button>
                    </div>
                    <div id="faq8" class="collapse" data-parent="#accordionfaq">
                      <div class="faq-body">
                        <p>In this case, please contact to our customer support team.  We will revert you after discuss from our logistic support partners.</p>
                      </div>
                    </div>
                  </div>
                  <div class="faq-card">
                    <div class="faq-header">
                      <button class="faq-button collapsed" type="button" data-toggle="collapse" data-target="#faq9" aria-expanded="false">
                        Question-9:- Is Ordering online safe?
                      </button>
                    </div>
                    <div id="faq9" class="collapse" data-parent="#accordionfaq">
                      <div class="faq-body">
                        <p>Yes it is 100% safe. </p>
                        <p>The payment gateways integrated on our website are 100% secured and safe for all the online transactions. We do not store any of your financial information.</p>
                      </div>
                    </div>
                  </div>
                  <div class="faq-card">
                    <div class="faq-header">
                      <button class="faq-button collapsed" type="button" data-toggle="collapse" data-target="#faq10" aria-expanded="false">
                        Question-10:- Can you give me a special discount on ordering jewelry in a big quantity?
                      </button>
                    </div>
                    <div id="faq10" class="collapse" data-parent="#accordionfaq">
                      <div class="faq-body">
                        <p>Yes we give special discounts.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- faqpageaccordion  -->
              </div>
            </div>
            <!--content-area-->
        </div>
        <!--container-->
      </div>
      <!--content-wrapper-->
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
                      <ul id="menu-about" class="menu">
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
                      <ul id="menu-about" class="menu">
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
                      <ul id="menu-my-account" class="menu">
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
                    <p>&copy;2021 eIndiawholesale. All Rights Reserved. Powered BY : <a href="https://dzoneindia.co.in/"
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
    <div class="whatsapp-call">
      <div class="d-none d-md-block">
        <a target="_blank" href="https://web.whatsapp.com/send?phone=+91123456789&amp;text=Hi, I had some queries."
          class="whatsapp"> <i class="fab fa-whatsapp"></i></a>
      </div>
      <div class="d-md-none">
        <a target="_blank" href="https://api.whatsapp.com/send?phone=+91123456789&amp;text=Hi, I had some queries."
          class="whatsapp"> <i class="fab fa-whatsapp"></i> </a>
      </div>
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
