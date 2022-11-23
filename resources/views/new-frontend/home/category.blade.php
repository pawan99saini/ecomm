@extends('new-frontend.layout.app')
@section('content')
  <section class="">
      <div class="container">
        <div class="row">
          <ul class="d-flex breadcrumb-menu">
            <li class="breadcrumb-item">
              <a class="underline-lite-on-hover position-relative" href=""
                >home</a
              >
            </li>
            <li class="breadcrumb-item">
              <a class="underline-lite-on-hover position-relative" href=""
                >category</a
              >
            </li>
            <li class="breadcrumb-item">
              <a class="underline-lite-on-hover position-relative" href=""
                >category</a
              >
            </li>
          </ul>
        </div>
      </div>
    </section>
    <div class="cata-top-banner sticky-header-next-sec container position-relative text-center">
      <div class="row">
        <div class="cata-banner-img"></div>
        <h1 class="cata-banner-title">women's Accessories</h1>
      </div>
    </div>

    <!-- Filter Side Nav Start -->
    <div id="FilterSideNav" class="filterSidenav">
      <div class="filterSidenav-head">
        <span
          href="javascript:void(0)"
          class="closebtn"
          onclick="closeFilterSideNav()"
          >&times;</span
        >
      </div>
      <div class="filterSidenav-body">
        <!-- <h2>Sign In or Create Your Account</h2>
            <p>With an account you can check out faster, view your online order history
                and access your shopping bag or saved items from any device.</p>
            <div class="sidenav-links">
                <ul>
                    <li><a href="#">Create an Account <i class="arrow"></i></a></li>
                    <li><a href="#">Sign In <i class="arrow"></i></a></li>
                </ul>
            </div> -->
        <div class="filter-wrapper">
          <div
            class="filter-subtitle d-flex justify-content-between align-items-center"
          >
            <span>Filter</span>
            <span
              ><svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                fill="#808080c9"
                viewBox="0 0 24 24"
              >
                <path
                  d="M3 17v2h6v-2H3zM3 5v2h10V5H3zm10 16v-2h8v-2h-8v-2h-2v6h2zM7 9v2H3v2h4v2h2V9H7zm14 4v-2H11v2h10zm-6-4h2V7h4V5h-4V3h-2v6z"
                ></path></svg
            ></span>
          </div>

          <!-- Price Filter -->
          <div class="price-filter">
            <div class="accordion filter-menu" id="price">
              <div class="card border-0">
                <div class="card-header p-0 border-0" id="priceHead">
                  <a
                    href="#"
                    class="btn btn-header-link collapsed"
                    data-toggle="collapse"
                    data-target="#price1"
                    aria-expanded="true"
                    aria-controls="price1"
                    >Price</a
                  >
                </div>

                <div
                  id="price1"
                  class="collapse show"
                  aria-labelledby="priceHead"
                  data-parent="#price"
                >
                  <div class="card-body p-0 mb-0 d-flex flex-column">
                    <label class="custom-checkbox mb-1">
                      <input type="checkbox" />
                      <b></b>
                      <span class="sub-label">0-1000</span>
                    </label>
                    <label class="custom-checkbox mb-1">
                      <input type="checkbox" />
                      <b></b>
                      <span class="sub-label">0-1000</span>
                    </label>
                    <label class="custom-checkbox mb-1">
                      <input type="checkbox" />
                      <b></b>
                      <span class="sub-label">0-1000</span>
                    </label>
                    <label class="custom-checkbox mb-1">
                      <input type="checkbox" />
                      <b></b>
                      <span class="sub-label">0-1000</span>
                    </label>
                    <label class="custom-checkbox mb-1">
                      <input type="checkbox" />
                      <b></b>
                      <span class="sub-label">0-1000</span>
                    </label>
                    <label class="custom-checkbox mb-1">
                      <input type="checkbox" />
                      <b></b>
                      <span class="sub-label">0-1000</span>
                    </label>
                    <label class="custom-checkbox mb-1">
                      <input type="checkbox" />
                      <b></b>
                      <span class="sub-label">0-1000</span>
                    </label>
                  </div>
                </div>
              </div>
            </div>

            <div class="d-flex flex-column">
              <div class="custom-price d-flex">
                <div>
                  <input type="text" placeholder="1000" />
                </div>
                <span class="delimiter">-</span>
                <div>
                  <input type="text" placeholder="1000" />
                </div>
              </div>
              <div class="custome-price-btn">
                <button class="am-filter-go">APPLY</button>
              </div>
            </div>
          </div>
          <!-- Size Filter -->
          <div class="size-filter">
            <div class="accordion filter-menu" id="size">
              <div class="card border-0">
                <div class="card-header p-0 border-0" id="sizeHead">
                  <a
                    href="#"
                    class="btn btn-header-link"
                    data-toggle="collapse"
                    data-target="#size1"
                    aria-expanded="true"
                    aria-controls="size1"
                    >Size</a
                  >
                </div>

                <div
                  id="size1"
                  class="collapse show"
                  aria-labelledby="sizeHead"
                  data-parent="#size"
                >
                  <div class="card-body p-0 mb-0 d-flex flex-column">
                    <label class="custom-checkbox mb-1">
                      <input type="checkbox" />
                      <b></b>
                      <span class="sub-label">S</span>
                    </label>
                    <label class="custom-checkbox mb-1">
                      <input type="checkbox" />
                      <b></b>
                      <span class="sub-label">M</span>
                    </label>
                    <label class="custom-checkbox mb-1">
                      <input type="checkbox" />
                      <b></b>
                      <span class="sub-label">L</span>
                    </label>
                    <label class="custom-checkbox mb-1">
                      <input type="checkbox" />
                      <b></b>
                      <span class="sub-label">XL</span>
                    </label>
                    <label class="custom-checkbox mb-1">
                      <input type="checkbox" />
                      <b></b>
                      <span class="sub-label">XXL</span>
                    </label>
                    <label class="custom-checkbox mb-1">
                      <input type="checkbox" />
                      <b></b>
                      <span class="sub-label">XXXL</span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Color Filter -->
          <div class="color-filter">
            <div class="accordion filter-menu" id="color">
              <div class="card border-0">
                <div class="card-header p-0 border-0" id="colorHead">
                  <a
                    href="#"
                    class="btn btn-header-link"
                    data-toggle="collapse"
                    data-target="#color1"
                    aria-expanded="true"
                    aria-controls="color1"
                    >color</a
                  >
                </div>

                <div
                  id="color1"
                  class="collapse show"
                  aria-labelledby="colorHead"
                  data-parent="#color"
                >
                  <div class="card-body p-0 mb-0 d-flex flex-column">
                    <label class="custom-checkbox mb-1">
                      <input type="checkbox" />
                      <b></b>
                      <span class="sub-label">Black</span>
                    </label>
                    <label class="custom-checkbox mb-1">
                      <input type="checkbox" />
                      <b></b>
                      <span class="sub-label">White</span>
                    </label>
                    <label class="custom-checkbox mb-1">
                      <input type="checkbox" />
                      <b></b>
                      <span class="sub-label">Blue</span>
                    </label>
                    <label class="custom-checkbox mb-1">
                      <input type="checkbox" />
                      <b></b>
                      <span class="sub-label">Green</span>
                    </label>
                    <label class="custom-checkbox mb-1">
                      <input type="checkbox" />
                      <b></b>
                      <span class="sub-label">Pink</span>
                    </label>
                    <label class="custom-checkbox mb-1">
                      <input type="checkbox" />
                      <b></b>
                      <span class="sub-label">Red</span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Style Filter -->
          <div class="style-filter">
            <div class="accordion filter-menu" id="style">
              <div class="card border-0">
                <div class="card-header p-0 border-0" id="styleHead">
                  <a
                    href="#"
                    class="btn btn-header-link"
                    data-toggle="collapse"
                    data-target="#style1"
                    aria-expanded="true"
                    aria-controls="style1"
                    >style</a
                  >
                </div>

                <div
                  id="style1"
                  class="collapse show"
                  aria-labelledby="styleHead"
                  data-parent="#size"
                >
                  <div class="card-body p-0 mb-0 d-flex flex-column">
                    <label class="custom-checkbox mb-1">
                      <input type="checkbox" />
                      <b></b>
                      <span class="sub-label">A-line</span>
                    </label>
                    <label class="custom-checkbox mb-1">
                      <input type="checkbox" />
                      <b></b>
                      <span class="sub-label">Babydoll</span>
                    </label>
                    <label class="custom-checkbox mb-1">
                      <input type="checkbox" />
                      <b></b>
                      <span class="sub-label">Backless</span>
                    </label>
                    <label class="custom-checkbox mb-1">
                      <input type="checkbox" />
                      <b></b>
                      <span class="sub-label">Blouse</span>
                    </label>
                    <label class="custom-checkbox mb-1">
                      <input type="checkbox" />
                      <b></b>
                      <span class="sub-label">bomber</span>
                    </label>
                    <label class="custom-checkbox mb-1">
                      <input type="checkbox" />
                      <b></b>
                      <span class="sub-label">Bootcut</span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Filter Side Nav End -->

    <main class="cata-main-content" id="category-main-content">
      <div class="container p-0">
        <div class="">
          <div class="cata-main">
            <div class="col-12 text-uppercase">
              <!-- toolbar Start -->
              <div class="toolbar-product d-flex justify-content-between align-items-baseline">
                <div
                  class="filter-subtitle justify-content-between align-items-center"
                >
                  <span class="mob-filter-title">Filter</span>
                  <span onclick="openFilterSideNav()">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="#808080c9"
                    >
                      <path
                        d="M3 17v2h6v-2H3zM3 5v2h10V5H3zm10 16v-2h8v-2h-8v-2h-2v6h2zM7 9v2H3v2h4v2h2V9H7zm14 4v-2H11v2h10zm-6-4h2V7h4V5h-4V3h-2v6z"
                      ></path></svg
                  ></span>
                </div>
                <!-- <div class="filter-subtitle">Filter</div> -->

                <div class="w-250">
                  <div class="sort-section d-flex">
                    <span class="sort-item">Sort by :</span>
                    <div class="dropdown">
                      <div class="select">
                        <span>Sort By</span>
                        <i class="fa fa-chevron-down"></i>
                      </div>
                      <input type="hidden" name="gender">
                      <ul class="dropdown-menu">
                        <li id="male">Price : L to H</li>
                        <li id="noba">Price : L to H</li>
                        <li id="female">Relevence</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="layout-changer">
                  <span class="layout-changer-label" onclick="changeTwo()"
                    ><svg
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      width="21px"
                      height="20px"
                      viewBox="0 0 21 20"
                      version="1.1"
                    >
                      <g
                        id="Page-1"
                        stroke="#9d9d9d"
                        stroke-width="1"
                        fill="#9d9d9d"
                        fill-rule="evenodd"
                      >
                        <g
                          id="Dribbble-Light-Preview"
                          fill="#9d9d9d57"
                          stroke="#9d9d9d00"
                          transform="translate(-99.000000, -200.000000)"
                          fill="#000000"
                        >
                          <g
                            id="icons"
                            transform="translate(56.000000, 160.000000)"
                          >
                            <path
                              d="M60.85,51 L57.7,51 C55.96015,51 54.55,52.343 54.55,54 L54.55,57 C54.55,58.657 55.96015,60 57.7,60 L60.85,60 C62.58985,60 64,58.657 64,57 L64,54 C64,52.343 62.58985,51 60.85,51 M49.3,51 L46.15,51 C44.41015,51 43,52.343 43,54 L43,57 C43,58.657 44.41015,60 46.15,60 L49.3,60 C51.03985,60 52.45,58.657 52.45,57 L52.45,54 C52.45,52.343 51.03985,51 49.3,51 M60.85,40 L57.7,40 C55.96015,40 54.55,41.343 54.55,43 L54.55,46 C54.55,47.657 55.96015,49 57.7,49 L60.85,49 C62.58985,49 64,47.657 64,46 L64,43 C64,41.343 62.58985,40 60.85,40 M52.45,43 L52.45,46 C52.45,47.657 51.03985,49 49.3,49 L46.15,49 C44.41015,49 43,47.657 43,46 L43,43 C43,41.343 44.41015,40 46.15,40 L49.3,40 C51.03985,40 52.45,41.343 52.45,43"
                              id="menu_navigation_grid-[#1529]"
                            />
                          </g>
                        </g>
                      </g></svg
                  ></span>
                  <span class="layout-changer-label" onclick="changeThree()">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      width="21px"
                      height="20px"
                      viewBox="0 0 21 20"
                      version="1.1"
                    >
                      <g
                        id="Page-1"
                        stroke="none"
                        stroke-width="1"
                        fill="none"
                        fill-rule="evenodd"
                      >
                        <g
                          id="Dribbble-Light-Preview"
                          fill="#9d9d9d57"
                          stroke="#9d9d9d00"
                          transform="translate(-219.000000, -200.000000)"
                          fill="#000000"
                        >
                          <g
                            id="icons"
                            transform="translate(56.000000, 160.000000)"
                          >
                            <path
                              d="M181.9,54 L179.8,54 C178.63975,54 177.7,54.895 177.7,56 L177.7,58 C177.7,59.105 178.63975,60 179.8,60 L181.9,60 C183.06025,60 184,59.105 184,58 L184,56 C184,54.895 183.06025,54 181.9,54 M174.55,54 L172.45,54 C171.28975,54 170.35,54.895 170.35,56 L170.35,58 C170.35,59.105 171.28975,60 172.45,60 L174.55,60 C175.71025,60 176.65,59.105 176.65,58 L176.65,56 C176.65,54.895 175.71025,54 174.55,54 M167.2,54 L165.1,54 C163.93975,54 163,54.895 163,56 L163,58 C163,59.105 163.93975,60 165.1,60 L167.2,60 C168.36025,60 169.3,59.105 169.3,58 L169.3,56 C169.3,54.895 168.36025,54 167.2,54 M181.9,47 L179.8,47 C178.63975,47 177.7,47.895 177.7,49 L177.7,51 C177.7,52.105 178.63975,53 179.8,53 L181.9,53 C183.06025,53 184,52.105 184,51 L184,49 C184,47.895 183.06025,47 181.9,47 M174.55,47 L172.45,47 C171.28975,47 170.35,47.895 170.35,49 L170.35,51 C170.35,52.105 171.28975,53 172.45,53 L174.55,53 C175.71025,53 176.65,52.105 176.65,51 L176.65,49 C176.65,47.895 175.71025,47 174.55,47 M167.2,47 L165.1,47 C163.93975,47 163,47.895 163,49 L163,51 C163,52.105 163.93975,53 165.1,53 L167.2,53 C168.36025,53 169.3,52.105 169.3,51 L169.3,49 C169.3,47.895 168.36025,47 167.2,47 M181.9,40 L179.8,40 C178.63975,40 177.7,40.895 177.7,42 L177.7,44 C177.7,45.105 178.63975,46 179.8,46 L181.9,46 C183.06025,46 184,45.105 184,44 L184,42 C184,40.895 183.06025,40 181.9,40 M174.55,40 L172.45,40 C171.28975,40 170.35,40.895 170.35,42 L170.35,44 C170.35,45.105 171.28975,46 172.45,46 L174.55,46 C175.71025,46 176.65,45.105 176.65,44 L176.65,42 C176.65,40.895 175.71025,40 174.55,40 M169.3,42 L169.3,44 C169.3,45.105 168.36025,46 167.2,46 L165.1,46 C163.93975,46 163,45.105 163,44 L163,42 C163,40.895 163.93975,40 165.1,40 L167.2,40 C168.36025,40 169.3,40.895 169.3,42,"
                              id="grid-[#1526]"
                            />
                          </g>
                        </g>
                      </g>
                    </svg>
                  </span>
                  <span class="change-four layout-changer-label" onclick="changeFour()">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                  </span>
                </div>
                <div class="w-150">
                  <div class="view-mode d-flex">
                    <span class="sort-item">View :</span>
                    <select name="items" id="items" class="sorter-options">
                      <option value="10">10</option>
                      <option value="20">20</option>
                      <option value="40">40</option>
                      <option value="50">50</option>
                    </select>
                  </div>
                </div>
              </div>
              <!-- toolbar End -->

              <!-- Products Start -->
              <div class="products_wrapper">
                <div class="row mb-3">
                  <div
                    class="productChange col-sm-6 col-md-6 col-lg-4 position-relative p-i-10 mb-3"
                  >
                    <div class="position-relative cata-img-wrapper">
                      <a href="Product.html" target="_blank">
                        <img
                          src="https://cdn.shopify.com/s/files/1/0424/6647/6192/products/9.30__O_22FRO067PL06-GC_010_1200x.jpg?v=1667335073"
                          onmouseover="this.src='https://cdn.shopify.com/s/files/1/0424/6647/6192/products/9.30__T_22FKT024KN02-NA_002.jpg?v=1667335626'"
                          onmouseout="this.src='https://cdn.shopify.com/s/files/1/0424/6647/6192/products/9.30__O_22FRO067PL06-GC_010_1200x.jpg?v=1667335073'"
                        />

                        <div class="cata-add-cart position-absolute">
                          <a href="#" class="cata-add-cart">Add to cart</a>
                          <div class="color-palette mt-8px d-flex gap-10">
                            <span class="cGreen"></span>
                            <span class="cRed"></span>
                            <span class="cBlue"></span>
                            <span class="cPink"></span>
                            <span class="totalColor">07 Colors</span>
                          </div>
                        </div>
                        <button class="float-right heart position-absolute">
                          <i class="ecicon eci-heart-o"></i>
                        </button>
                      </a>
                    </div>

                    <span class="sale-label"> 30% OFF </span>
                    <div class="mt-8px">
                      <a class="product-label" href=""
                        ><span>Maggia Faux Leather Jacket</span></a
                      >
                      <div class="product-price">
                        <span>&#8377;5000.00</span>
                      </div>
                    </div>
                  </div>
                  <div
                    class="productChange col-sm-6 col-md-6 col-lg-4 position-relative p-i-10 mb-3"
                  >
                    <div class="position-relative cata-img-wrapper">
                      <a href="Product.html" target="_blank">
                        <img
                          src="https://cdn.shopify.com/s/files/1/0424/6647/6192/products/9.30__O_22FRO067PL06-GC_010_1200x.jpg?v=1667335073"
                          onmouseover="this.src='https://cdn.shopify.com/s/files/1/0424/6647/6192/products/9.30__T_22FKT024KN02-NA_002.jpg?v=1667335626'"
                          onmouseout="this.src='https://cdn.shopify.com/s/files/1/0424/6647/6192/products/9.30__O_22FRO067PL06-GC_010_1200x.jpg?v=1667335073'"
                        />

                        <div class="cata-add-cart position-absolute">
                          <a href="#" class="cata-add-cart">Add to cart</a>
                          <div class="color-palette mt-8px d-flex gap-10">
                            <span class="cGreen"></span>
                            <span class="cRed"></span>
                            <span class="cBlue"></span>
                            <span class="cPink"></span>
                            <span class="totalColor">07 Colors</span>
                          </div>
                        </div>
                        <button class="float-right heart position-absolute">
                          <i class="ecicon eci-heart-o"></i>
                        </button>
                      </a>
                    </div>

                    <span class="sale-label"> 30% OFF </span>
                    <div class="mt-8px">
                      <a class="product-label" href=""
                        ><span>Maggia Faux Leather Jacket</span></a
                      >
                      <div class="product-price">
                        <span>&#8377;5000.00</span>
                      </div>
                    </div>
                  </div>
                  <div
                    class="productChange col-sm-6 col-md-6 col-lg-4 position-relative p-i-10 mb-3"
                  >
                    <div class="position-relative cata-img-wrapper">
                      <a href="Product.html" target="_blank">
                        <img
                          src="https://cdn.shopify.com/s/files/1/0424/6647/6192/products/9.30__O_22FRO067PL06-GC_010_1200x.jpg?v=1667335073"
                          onmouseover="this.src='https://cdn.shopify.com/s/files/1/0424/6647/6192/products/9.30__T_22FKT024KN02-NA_002.jpg?v=1667335626'"
                          onmouseout="this.src='https://cdn.shopify.com/s/files/1/0424/6647/6192/products/9.30__O_22FRO067PL06-GC_010_1200x.jpg?v=1667335073'"
                        />

                        <div class="cata-add-cart position-absolute">
                          <a href="#" class="cata-add-cart">Add to cart</a>
                          <div class="color-palette mt-8px d-flex gap-10">
                            <span class="cGreen"></span>
                            <span class="cRed"></span>
                            <span class="cBlue"></span>
                            <span class="cPink"></span>
                            <span class="totalColor">07 Colors</span>
                          </div>
                        </div>
                        <button class="float-right heart position-absolute">
                          <i class="ecicon eci-heart-o"></i>
                        </button>
                      </a>
                    </div>

                    <span class="sale-label"> 30% OFF </span>
                    <div class="mt-8px">
                      <a class="product-label" href=""
                        ><span>Maggia Faux Leather Jacket</span></a
                      >
                      <div class="product-price">
                        <span>&#8377;5000.00</span>
                      </div>
                    </div>
                  </div>
                  <div
                    class="productChange col-sm-6 col-md-6 col-lg-4 position-relative p-i-10 mb-3"
                  >
                    <div class="position-relative cata-img-wrapper">
                      <a href="Product.html" target="_blank">
                        <img
                          src="https://cdn.shopify.com/s/files/1/0424/6647/6192/products/9.30__O_22FRO067PL06-GC_010_1200x.jpg?v=1667335073"
                          onmouseover="this.src='https://cdn.shopify.com/s/files/1/0424/6647/6192/products/9.30__T_22FKT024KN02-NA_002.jpg?v=1667335626'"
                          onmouseout="this.src='https://cdn.shopify.com/s/files/1/0424/6647/6192/products/9.30__O_22FRO067PL06-GC_010_1200x.jpg?v=1667335073'"
                        />

                        <div class="cata-add-cart position-absolute">
                          <a href="#" class="cata-add-cart">Add to cart</a>
                          <div class="color-palette mt-8px d-flex gap-10">
                            <span class="cGreen"></span>
                            <span class="cRed"></span>
                            <span class="cBlue"></span>
                            <span class="cPink"></span>
                            <span class="totalColor">07 Colors</span>
                          </div>
                        </div>
                        <button class="float-right heart position-absolute">
                          <i class="ecicon eci-heart-o"></i>
                        </button>
                      </a>
                    </div>

                    <span class="sale-label"> 30% OFF </span>
                    <div class="mt-8px">
                      <a class="product-label" href=""
                        ><span>Maggia Faux Leather Jacket</span></a
                      >
                      <div class="product-price">
                        <span>&#8377;5000.00</span>
                      </div>
                    </div>
                  </div>
                  <div
                    class="productChange col-sm-6 col-md-6 col-lg-4 position-relative p-i-10 mb-3"
                  >
                    <div class="position-relative cata-img-wrapper">
                      <a href="Product.html" target="_blank">
                        <img
                          src="https://cdn.shopify.com/s/files/1/0424/6647/6192/products/9.30__O_22FRO067PL06-GC_010_1200x.jpg?v=1667335073"
                          onmouseover="this.src='https://cdn.shopify.com/s/files/1/0424/6647/6192/products/9.30__T_22FKT024KN02-NA_002.jpg?v=1667335626'"
                          onmouseout="this.src='https://cdn.shopify.com/s/files/1/0424/6647/6192/products/9.30__O_22FRO067PL06-GC_010_1200x.jpg?v=1667335073'"
                        />

                        <div class="cata-add-cart position-absolute">
                          <a href="#" class="cata-add-cart">Add to cart</a>
                          <div class="color-palette mt-8px d-flex gap-10">
                            <span class="cGreen"></span>
                            <span class="cRed"></span>
                            <span class="cBlue"></span>
                            <span class="cPink"></span>
                            <span class="totalColor">07 Colors</span>
                          </div>
                        </div>
                        <button class="float-right heart position-absolute">
                          <i class="ecicon eci-heart-o"></i>
                        </button>
                      </a>
                    </div>

                    <span class="sale-label"> 30% OFF </span>
                    <div class="mt-8px">
                      <a class="product-label" href=""
                        ><span>Maggia Faux Leather Jacket</span></a
                      >
                      <div class="product-price">
                        <span>&#8377;5000.00</span>
                      </div>
                    </div>
                  </div>
                  <div
                    class="productChange col-sm-6 col-md-6 col-lg-4 position-relative p-i-10 mb-3"
                  >
                    <div class="position-relative cata-img-wrapper">
                      <a href="Product.html" target="_blank">
                        <img
                          src="https://cdn.shopify.com/s/files/1/0424/6647/6192/products/9.30__O_22FRO067PL06-GC_010_1200x.jpg?v=1667335073"
                          onmouseover="this.src='https://cdn.shopify.com/s/files/1/0424/6647/6192/products/9.30__T_22FKT024KN02-NA_002.jpg?v=1667335626'"
                          onmouseout="this.src='https://cdn.shopify.com/s/files/1/0424/6647/6192/products/9.30__O_22FRO067PL06-GC_010_1200x.jpg?v=1667335073'"
                        />

                        <div class="cata-add-cart position-absolute">
                          <a href="#" class="cata-add-cart">Add to cart</a>
                          <div class="color-palette mt-8px d-flex gap-10">
                            <span class="cGreen"></span>
                            <span class="cRed"></span>
                            <span class="cBlue"></span>
                            <span class="cPink"></span>
                            <span class="totalColor">07 Colors</span>
                          </div>
                        </div>
                        <button class="float-right heart position-absolute">
                          <i class="ecicon eci-heart-o"></i>
                        </button>
                      </a>
                    </div>

                    <span class="sale-label"> 30% OFF </span>
                    <div class="mt-8px">
                      <a class="product-label" href=""
                        ><span>Maggia Faux Leather Jacket</span></a
                      >
                      <div class="product-price">
                        <span>&#8377;5000.00</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Products End -->
            </div>
            <!-- Pagination -->
            <div class="pagination">
              <button class="button button_square" id="pagination__prev-button">                
              </button>
              <button class="button button_square">1</button>
              <button class="button button_square">2</button>
              <button class="button button_square">3</button>
              <button class="button button_square">4</button>
              <button class="button button_square" id="pagination__next-button">                
              </button>
            </div>
            <!-- Pagination -->
          </div>
          <!-- <div class="cata-sidebar">
            <div class="filter-wrapper">
              <div class="filter-subtitle justify-content-between align-items-center">
                <span onclick="openFilterSideNav()">Filter</span>
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    fill="#808080c9"
                    viewBox="0 0 24 24"
                  >
                    <path
                      d="M3 17v2h6v-2H3zM3 5v2h10V5H3zm10 16v-2h8v-2h-8v-2h-2v6h2zM7 9v2H3v2h4v2h2V9H7zm14 4v-2H11v2h10zm-6-4h2V7h4V5h-4V3h-2v6z"
                    ></path></svg
                ></span>
              </div>
              
              <div class="price-filter">
                <div class="accordion filter-menu" id="price">
                  <div class="card border-0">
                    <div class="card-header p-0 border-0" id="priceHead">
                      <a
                        href="#"
                        class="btn btn-header-link collapsed"
                        data-toggle="collapse"
                        data-target="#price1"
                        aria-expanded="true"
                        aria-controls="price1"
                        >Price</a
                      >
                    </div>

                    <div
                      id="price1"
                      class="collapse show"
                      aria-labelledby="priceHead"
                      data-parent="#price"
                    >
                      <div class="card-body p-0 mb-0 d-flex flex-column">
                        <label class="custom-checkbox mb-1">
                          <input type="checkbox" />
                          <b></b>
                          <span class="sub-label">0-1000</span>
                        </label>
                        <label class="custom-checkbox mb-1">
                          <input type="checkbox" />
                          <b></b>
                          <span class="sub-label">0-1000</span>
                        </label>
                        <label class="custom-checkbox mb-1">
                          <input type="checkbox" />
                          <b></b>
                          <span class="sub-label">0-1000</span>
                        </label>
                        <label class="custom-checkbox mb-1">
                          <input type="checkbox" />
                          <b></b>
                          <span class="sub-label">0-1000</span>
                        </label>
                        <label class="custom-checkbox mb-1">
                          <input type="checkbox" />
                          <b></b>
                          <span class="sub-label">0-1000</span>
                        </label>
                        <label class="custom-checkbox mb-1">
                          <input type="checkbox" />
                          <b></b>
                          <span class="sub-label">0-1000</span>
                        </label>
                        <label class="custom-checkbox mb-1">
                          <input type="checkbox" />
                          <b></b>
                          <span class="sub-label">0-1000</span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="d-flex flex-column">
                  <div class="custom-price d-flex">
                    <div>
                      <input type="text" placeholder="1000" />
                    </div>
                    <span class="delimiter">-</span>
                    <div>
                      <input type="text" placeholder="1000" />
                    </div>
                  </div>
                  <div class="custome-price-btn">
                    <button class="am-filter-go">APPLY</button>
                  </div>
                </div>
              </div>
             
              <div class="size-filter">
                <div class="accordion filter-menu" id="size">
                  <div class="card border-0">
                    <div class="card-header p-0 border-0" id="sizeHead">
                      <a
                        href="#"
                        class="btn btn-header-link"
                        data-toggle="collapse"
                        data-target="#size1"
                        aria-expanded="true"
                        aria-controls="size1"
                        >Size</a
                      >
                    </div>

                    <div
                      id="size1"
                      class="collapse show"
                      aria-labelledby="sizeHead"
                      data-parent="#size"
                    >
                      <div class="card-body p-0 mb-0 d-flex flex-column">
                        <label class="custom-checkbox mb-1">
                          <input type="checkbox" />
                          <b></b>
                          <span class="sub-label">S</span>
                        </label>
                        <label class="custom-checkbox mb-1">
                          <input type="checkbox" />
                          <b></b>
                          <span class="sub-label">M</span>
                        </label>
                        <label class="custom-checkbox mb-1">
                          <input type="checkbox" />
                          <b></b>
                          <span class="sub-label">L</span>
                        </label>
                        <label class="custom-checkbox mb-1">
                          <input type="checkbox" />
                          <b></b>
                          <span class="sub-label">XL</span>
                        </label>
                        <label class="custom-checkbox mb-1">
                          <input type="checkbox" />
                          <b></b>
                          <span class="sub-label">XXL</span>
                        </label>
                        <label class="custom-checkbox mb-1">
                          <input type="checkbox" />
                          <b></b>
                          <span class="sub-label">XXXL</span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="color-filter">
                <div class="accordion filter-menu" id="color">
                  <div class="card border-0">
                    <div class="card-header p-0 border-0" id="colorHead">
                      <a
                        href="#"
                        class="btn btn-header-link"
                        data-toggle="collapse"
                        data-target="#color1"
                        aria-expanded="true"
                        aria-controls="color1"
                        >color</a
                      >
                    </div>

                    <div
                      id="color1"
                      class="collapse show"
                      aria-labelledby="colorHead"
                      data-parent="#color"
                    >
                      <div class="card-body p-0 mb-0 d-flex flex-column">
                        <label class="custom-checkbox mb-1">
                          <input type="checkbox" />
                          <b></b>
                          <span class="sub-label">Black</span>
                        </label>
                        <label class="custom-checkbox mb-1">
                          <input type="checkbox" />
                          <b></b>
                          <span class="sub-label">White</span>
                        </label>
                        <label class="custom-checkbox mb-1">
                          <input type="checkbox" />
                          <b></b>
                          <span class="sub-label">Blue</span>
                        </label>
                        <label class="custom-checkbox mb-1">
                          <input type="checkbox" />
                          <b></b>
                          <span class="sub-label">Green</span>
                        </label>
                        <label class="custom-checkbox mb-1">
                          <input type="checkbox" />
                          <b></b>
                          <span class="sub-label">Pink</span>
                        </label>
                        <label class="custom-checkbox mb-1">
                          <input type="checkbox" />
                          <b></b>
                          <span class="sub-label">Red</span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
             
              <div class="style-filter">
                <div class="accordion filter-menu" id="style">
                  <div class="card border-0">
                    <div class="card-header p-0 border-0" id="styleHead">
                      <a
                        href="#"
                        class="btn btn-header-link"
                        data-toggle="collapse"
                        data-target="#style1"
                        aria-expanded="true"
                        aria-controls="style1"
                        >style</a
                      >
                    </div>

                    <div
                      id="style1"
                      class="collapse show"
                      aria-labelledby="styleHead"
                      data-parent="#size"
                    >
                      <div class="card-body p-0 mb-0 d-flex flex-column">
                        <label class="custom-checkbox mb-1">
                          <input type="checkbox" />
                          <b></b>
                          <span class="sub-label">A-line</span>
                        </label>
                        <label class="custom-checkbox mb-1">
                          <input type="checkbox" />
                          <b></b>
                          <span class="sub-label">Babydoll</span>
                        </label>
                        <label class="custom-checkbox mb-1">
                          <input type="checkbox" />
                          <b></b>
                          <span class="sub-label">Backless</span>
                        </label>
                        <label class="custom-checkbox mb-1">
                          <input type="checkbox" />
                          <b></b>
                          <span class="sub-label">Blouse</span>
                        </label>
                        <label class="custom-checkbox mb-1">
                          <input type="checkbox" />
                          <b></b>
                          <span class="sub-label">bomber</span>
                        </label>
                        <label class="custom-checkbox mb-1">
                          <input type="checkbox" />
                          <b></b>
                          <span class="sub-label">Bootcut</span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </main>

@endsection
