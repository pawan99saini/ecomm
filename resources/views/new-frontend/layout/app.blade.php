<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Daylist || Home</title>

    <!-- css Icon Font -->
    <link rel="stylesheet" href="{{asset('front/css/vendor/ecicons.min.css')}}" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="{{asset('front/js/Sidenav.js')}}"></script>

    <!-- css All Plugins Files -->
    <link rel="stylesheet" href="{{asset('front/css/plugins/animate.css')}}" />
    <link rel="stylesheet" href="{{asset('front/css/plugins/swiper-bundle.min.css')}}" />
    <link rel="stylesheet" href="{{asset('front/css/plugins/jquery-ui.min.css')}}" />
    <link rel="stylesheet" href="{{asset('front/css/plugins/countdownTimer.css')}}" />
    <link rel="stylesheet" href="{{asset('front/css/plugins/slick.min.css')}}" />
    <link rel="stylesheet" href="{{asset('front/css/plugins/bootstrap.css')}}" />

    <!-- Main Style -->
    <link rel="stylesheet" href="{{asset('front/css/demo1.css')}}" />
    <link rel="stylesheet" href="{{asset('front/css/responsive.css')}}" />
    <link rel="stylesheet" href="{{asset('front/css/custom.css')}}" />
    <link rel="stylesheet" href="{{asset('front/css/Hover.css')}}" />
    <link rel="stylesheet" href="{{asset('front/css/Currency-switcher.css')}}" />
    <link rel="stylesheet" href="{{asset('front/css/categoryStyle.css')}}" />
    <link rel="stylesheet" href="{{asset('front/css/SignUp.css')}}" />
    <link rel="stylesheet" href="{{asset('front/css/Login.css')}}" />

    <style>
        .bcontent {
            margin-top: 10px;
        }

        .carousel-inner img {
            width: 100%;
            height: 100%;
        }
        .sticky{
            position: fixed;
            top: 0;
            width: 100%;
        }
    </style>  
    
    

    
</head>

<body>
    <!-- Header start  -->

    <header id="stickIT" class="ec-header">



        <!-- Header pannel show -->

        <nav class="navbar navbar-expand-lg navbar-light d-none show-on-mb mobile-menu">
            <div class="ec-header-bottom d-lg-none">
                <div class="container position-relative">
                    <div class="d-flex justify-content-between align-items-center">

                        <!-- Ec Header Logo Start -->
                        <div class="">
                            <div class="header-logo">
                                <a href="index.html"><img src="{{asset('front/images/logo/logo.png')}}" alt="Site Logo" /></a>
                            </div>
                        </div>

                        <div>
                            <input type="checkbox" id="checkbox3" class="checkbox3 visuallyHidden"
                                data-toggle="collapse" data-target="#navbarToggler02" aria-controls="navbarToggler02"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <label for="checkbox3">
                                <div class="hamburger hamburger3">
                                    <span class="bar bar1"></span>
                                    <span class="bar bar2"></span>
                                    <span class="bar bar3"></span>
                                    <span class="bar bar4"></span>
                                </div>
                            </label>
                        </div>


                        <!-- Ec Header Search End -->
                    </div>
                </div>

            </div>

            <div class="collapse navbar-collapse" id="navbarToggler02">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li>
                        <form class="form-inline my-2 my-lg-0 position-relative">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search">
                            <svg class="t-icon mobile-menu-search" xmlns="http://www.w3.org/2000/svg" width="20"
                                height="20" viewBox="0 0 24 24" fill="none" stroke="#42843e" stroke-width="1"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                <circle cx="11" cy="11" r="8"></circle>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                            </svg>
                        </form>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>

                    </li>
                    <li class="nav-item mobile-menu-second arrow-mover">
                        <a class="nav-link" href="#">Shop<i class="Uparrow"></i></a>
                        <ul class="show-on">
                            <li>
                                <a href="#">Collection</a>
                            </li>
                            <li>
                                <a href="#">Collection</a>
                            </li>
                            <li>
                                <a href="#">Collection</a>
                            </li>
                            <li>
                                <a href="#">Collection</a>
                            </li>
                            <li>
                                <a href="#">Collection</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sale</a>
                    </li>
                    <li class="nav-item mobile-menu-second arrow-mover">
                        <a class="nav-link" href="#">Collection<i class="Uparrow"></i></a>
                        <ul class="show-on">
                            <li>
                                <a href="#">Collection</a>
                            </li>
                            <li>
                                <a href="#">Collection</a>
                            </li>
                            <li>
                                <a href="#">Collection</a>
                            </li>
                            <li>
                                <a href="#">Collection</a>
                            </li>
                            <li>
                                <a href="#">Collection</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Gifting</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Track Order</a>
                    </li>
                    <li class="nav-item mobile-menu-second arrow-mover">
                        <a class="nav-link" href="#">Account<i class="Uparrow"></i></a>
                        <ul class="show-on">
                            <li>
                                <a href="Login.html">Sign In</a>
                            </li>
                            <li>
                                <a href="SignUp.html">Register</a>
                            </li>                            
                        </ul>
                    </li>

                </ul>

            </div>
        </nav>
        <!-- Ec Header Bottom  Start -->
        <div class="ec-header-bottom d-none d-lg-block">
            <div class="container position-relative">
                <div class="row">
                    <div class="ec-flex">
                        <!-- Ec Header Search Start -->
                        <div class="align-self-center search-area">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="20px" height="20px" viewBox="0 0 28 28" version="1.1">

                                <g id="🔍-Product-Icons" stroke="#81d8d0" stroke-width="1" fill="black"
                                    fill-rule="evenodd">
                                    <g id="ic_fluent_phone_28_regular" fill="black" fill-rule="nonzero">
                                        <path
                                            d="M7.92072596,2.64472005 L9.58060919,2.14438844 C11.1435675,1.67327249 12.8134781,2.43464008 13.4828053,3.92352899 L14.5160823,6.22200834 C15.0865915,7.491081 14.7859439,8.98254111 13.7683291,9.93148073 L11.9633958,11.6146057 C11.9410906,11.6354021 11.9227774,11.6601187 11.9093651,11.6875342 C11.720585,12.0734103 12.0066606,13.1043886 12.9061418,14.6623357 C13.9199541,16.4183102 14.7035571,17.1131712 15.0654726,17.005305 L17.4348517,16.2809111 C18.765101,15.8742119 20.2066891,16.3591908 21.0206203,17.4872349 L22.4880851,19.5210248 C23.440761,20.8413581 23.2694403,22.6628821 22.0872853,23.782427 L20.8252038,24.9776653 C19.9337363,25.8219337 18.6854328,26.1763171 17.4833291,25.9264007 C13.966189,25.1951903 10.8150019,22.3628582 8.00336279,17.4929565 C5.18895293,12.6182556 4.31270988,8.46966127 5.44310245,5.05625686 C5.82703045,3.89692852 6.75144427,2.9971717 7.92072596,2.64472005 Z M8.35362603,4.08089467 C7.65205693,4.29236569 7.09740832,4.83222008 6.86705161,5.52781682 C5.89305385,8.46896164 6.6820141,12.2043134 9.30240089,16.7429565 C11.9202871,21.2772684 14.7578382,23.8276999 17.7886493,24.4578029 C18.5099109,24.6077526 19.2588899,24.3951235 19.7937719,23.888561 L21.0558584,22.6933179 C21.6924034,22.0904861 21.784653,21.1096654 21.2716737,20.3987168 L19.8042088,18.3649269 C19.3659382,17.7575185 18.5896985,17.496376 17.8734103,17.7153679 L15.4990066,18.4412788 C14.1848357,18.833027 12.9496858,17.7377562 11.6071037,15.4123357 C10.4705242,13.4437223 10.075962,12.0217729 10.5619671,11.0283539 C10.6558865,10.8363778 10.7841758,10.6632305 10.9404443,10.5175321 L12.7453325,8.83444937 C13.2932789,8.32348189 13.455166,7.52038798 13.1479688,6.83704116 L12.1146918,4.53856182 C11.7542848,3.7368524 10.8551022,3.32688524 10.0135093,3.58056306 L8.35362603,4.08089467 Z"
                                            id="🎨-Color" />
                                    </g>
                                </g>
                            </svg>
                            <span class="header-tel">+91 9988775566</span>
                        </div>
                        <!-- Ec Header Search End -->

                        <!-- Ec Header Logo Start -->
                        <div class="align-self-center header-logo">
                            <a href="index.html"><img src="{{asset('front/images/logo/logo.png')}}" alt="Site Logo" /></a>
                        </div>
                        <!-- Ec Header Logo End -->

                        <!-- Ec Header Button Start -->
                        <div class="align-self-center" id="group-hover">
                            <div id="search-toggle-button" class="ec-header-bottons header-icons">
                                <a href="#" class="icon-hover search-open" onclick="openSearch()">
                                    <svg class="t-icon " xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="#42843e" stroke-width="1"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                    </svg>
                                </a>
                                <a id="" href="#" class="icon-hover search-close" onclick="closeSearch()">

                                    <span class="search-close" onclick="closeSearch()">
                                        <!-- × -->
                                        <svg data-v-6a943414="" width="20" height="20"
                                            xmlns="http://www.w3.org/2000/svg" class="close-icon">
                                            <path
                                                d="M6.414 5A1 1 0 1 0 5 6.414L10.586 12 5 17.586A1 1 0 1 0 6.414 19L12 13.414 17.586 19A1 1 0 1 0 19 17.586L13.414 12 19 6.414A1 1 0 1 0 17.586 5L12 10.586 6.414 5Z">
                                            </path>
                                        </svg>
                                    </span>
                                </a>


                                <a href="#" class="icon-hover">
                                    <svg class="t-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 113 114" fill="none" stroke="#42843e" stroke-width="1"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="85" cy="86.5" r="25.5" stroke="#42843e" stroke-width="4" />
                                        <path d="M15.5 46H66.5" stroke="#42843e" stroke-width="4" />
                                        <path d="M28.5 0L28.5 15" stroke="#42843e" stroke-width="4" />
                                        <path d="M63.5 0L63.5 15" stroke="#42843e" stroke-width="4" />
                                        <path d="M3.5 27L88.5 27" stroke="#42843e" stroke-width="4" />
                                        <path d="M15.5 62H51.5" stroke="#42843e" stroke-width="4" />
                                        <path d="M70.5 85.2571L81.1333 94L99.5 77" stroke="#42843e" stroke-width="4" />
                                        <path
                                            d="M60.5 94H13.5C4.7 93.6 2.5 86.5 2.5 83V18C2.5 14.3333 4.7 7 13.5 7H77.5C81.5 7 89.5 9.2 89.5 18V61.5"
                                            stroke="#42843e" stroke-width="4" />
                                    </svg>
                                </a>
                                <a href="#" class="icon-hover" fill="#81d8d0">
                                    <svg class="t-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 105 103" fill="none">
                                        <path d="M11.7838 79L4 100L28 93.6364" stroke="#42843e" stroke-width="4" />
                                        <path
                                            d="M43.0741 40.0421L36.0741 25.0421C24.8741 24.2421 23.0741 35.0421 23.5741 40.5421C32.3741 64.1421 51.9075 75.0421 60.5741 77.5421C75.3741 82.3421 82.0741 72.5421 81.0741 65.5421L67.5741 60.0421L60.5741 65.5421C49.3741 63.5421 41.2408 52.3754 38.5741 47.0421L43.0741 40.0421Z"
                                            stroke="#42843e" stroke-width="4" />
                                        <path
                                            d="M12.5 80.5001C5.66666 70.8334 -3.90001 45.9001 12.5 23.5001C27.875 2.50001 65 -10.5 92.5 23.5001C92.5 23.5001 114.5 51.0001 92.5 80.5001C82.8333 92.1667 60 108.5 26.5 93.5001"
                                            stroke="#42843e" stroke-width="4" />
                                    </svg>
                                </a>

                                <div class="ec-header-user dropdown add-account hoverable" id="hover-me">
                                    <a href="#" class="icon-hover" data-bs-toggle="dropdown" onclick="openNav()"><svg
                                            class="t-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 99 98" fill="none">
                                            <circle cx="49.5" cy="49" r="47" stroke="#42843e" stroke-width="4" />
                                            <circle cx="49" cy="42.5" r="19.5" stroke="#42843e" stroke-width="4" />
                                            <path d="M20.5 85C23 76.5 31.4 62.5 49 62.5C66.6 62.5 74.5 75.5 77.5 85"
                                                stroke="#42843e" stroke-width="4" />
                                        </svg>
                                    </a>
                                    <!-- <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span> -->
                                    <div id="mySidenav" class="sidenav">
                                        <div class="sidenav-head">
                                            <span href="javascript:void(0)" class="closebtn"
                                                onclick="closeNav()">&times;</span>
                                        </div>
                                        <div class="sidenav-body">
                                            <h2>Sign In or Create Your Account</h2>
                                            <p>With an account you can check out faster, view your online order history
                                                and access your shopping bag or saved items from any device.</p>
                                            <div class="sidenav-links">
                                                <ul>
                                                    <li><a href="SignUp.html">Create an Account <i class="arrow"></i></a></li>
                                                    <li><a href="Login.html">Sign In <i class="arrow"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="myWishList" class="wishListSidenav">
                                        <div class="wishListSidenav-head">
                                            <span href="javascript:void(0)" class="closebtn"
                                                onclick="closeWishlistSideNav()">&times;</span>
                                        </div>
                                        <div class="wishListSidenav-body">
                                            <h2>Welcome to your Saved Items</h2>
                                            <p>View saved favourites, build-your-own designs and sent hints.</p>
                                            <div class="wishListSidenav-links">
                                                <ul>
                                                    <li><a href="Login.html">Sign In <i class="arrow"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                    <div id="myCart" class="cartSidenav">
                                        <div class="cartSidenav-head">
                                            <span href="javascript:void(0)" class="closebtn"
                                                onclick="closeMyCart()">&times;</span>
                                        </div>
                                        <div class="cartSidenav-body">
                                            <h2>Your Shopping Bag</h2>
                                            <p>Your shopping bag is empty.</p>
                                            <div class="cartSidenav-links">
                                                <ul>
                                                    <li><a href="Login.html">Sign In <i class="arrow"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a class="dropdown-item" href="#">Register</a></li>
                                        <li><a class="dropdown-item" href="#">Checkout</a></li>
                                        <li><a class="dropdown-item" href="#">Login</a></li>
                                    </ul> -->

                                </div>

                                <a href="#" class="icon-hover" onclick="openWishlistSideNav()">
                                    <svg class="t-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 101 100" fill="none">
                                        <rect x="72.7" y="48.7" width="13.6" height="3.4"
                                            transform="rotate(90 72.7 48.7)" fill="#42843e" />
                                        <rect x="72.7" y="47" width="3.4" height="3.4" rx="1.7"
                                            transform="rotate(90 72.7 47)" fill="#42843e" />
                                        <rect x="72.7" y="60.6" width="3.4" height="3.4" rx="1.7"
                                            transform="rotate(90 72.7 60.6)" fill="#42843e" />
                                        <rect x="77.8" y="57.2" width="13.6" height="3.4"
                                            transform="rotate(-180 77.8 57.2)" fill="#42843e" />
                                        <rect x="65.9" y="57.2" width="3.4" height="3.4" rx="1.7"
                                            transform="rotate(-180 65.9 57.2)" fill="#42843e" />
                                        <rect x="79.5" y="57.2" width="3.4" height="3.4" rx="1.7"
                                            transform="rotate(-180 79.5 57.2)" fill="#42843e" />
                                        <rect x="2.5" y="2" width="96" height="96" rx="12" stroke="#42843e"
                                            stroke-width="4" />
                                        <path
                                            d="M74.4999 40.5C75.4999 32.5 64.5 18.5 50.5 33C45 25 28.5 23 26.5 40.5C26.4999 47 31.7 55.3 44.5 72.5C46.3333 74.5 51.0999 77.3 55.4999 72.5L60.4999 65.5"
                                            stroke="#42843e" stroke-width="4" />
                                    </svg>
                                </a>

                                <a href="#ec-side-cart00" class="icon-hover" onclick="openMyCart()">
                                    <svg class="t-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 89 98" fill="none">
                                        <path
                                            d="M2.5 30H86.5V88C86.5 92.4183 82.9183 96 78.5 96H10.5C6.08172 96 2.5 92.4183 2.5 88V30Z"
                                            stroke="#42843e" stroke-width="4" />
                                        <path d="M25.5 40.9999V20.4999C25 1.71661e-05 61 -6.5 64.5 20.4999V40.5"
                                            stroke="#42843e" stroke-width="4" />
                                    </svg>
                                </a>


                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div id="searchToggle" class="search">
                <div class="wrap">
                    <form action="" class="search__form">
                        <input type="text" name="q" class="input search__input" placeholder="Search...">
                        <button type="submit" class="search__submit search__submit--brand">
                            <span>
                                <svg class="t-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="#42843e" stroke-width="1"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="11" cy="11" r="8"></circle>
                                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                </svg>
                            </span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <!-- Ec Header Button End -->
        <!-- Header responsive Bottom  Start -->




        <!-- Header responsive Bottom  End -->
        <!-- EC Main Menu Start -->
        <div id="mySidenav" class="sidenav">
            <div class="sidenav-head">
                <span href="javascript:void(0)" class="closebtn"
                    onclick="closeNav()">&times;</span>
            </div>
            <div class="sidenav-body">
                <h2>Sign In or Create Your Account</h2>
                <p>With an account you can check out faster, view your online order history
                    and access your shopping bag or saved items from any device.</p>
                <div class="sidenav-links">
                    <ul>
                        <li><a href="SignUp.html">Create an Account <i class="arrow"></i></a></li>
                        <li><a href="Login.html">Sign In <i class="arrow"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="myWishList" class="wishListSidenav">
            <div class="wishListSidenav-head">
                <span href="javascript:void(0)" class="closebtn"
                    onclick="closeWishlistSideNav()">&times;</span>
            </div>
            <div class="wishListSidenav-body">
                <h2>Welcome to your Saved Items</h2>
                <p>View saved favourites, build-your-own designs and sent hints.</p>
                <div class="wishListSidenav-links">
                    <ul>
                        <li><a href="Login.html">Sign In <i class="arrow"></i></a></li>
                    </ul>
                </div>
            </div>

        </div>
        <div id="myCart" class="cartSidenav">
            <div class="cartSidenav-head">
                <span href="javascript:void(0)" class="closebtn"
                    onclick="closeMyCart()">&times;</span>
            </div>
            <div class="cartSidenav-body">
                <h2>Your Shopping Bag</h2>
                <p>Your shopping bag is empty.</p>
                <div class="cartSidenav-links">
                    <ul>
                        <li><a href="Login.html">Sign In <i class="arrow"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="ec-main-menu-desk" class="d-none d-lg-block sticky-nav">
            <div class="container-fluid position-relative">
                <div class="row">
                    <div class="col-md-12 align-self-center">
                        <div class="ec-main-menu">
                            <div class="header-logo">
                                <a href="index.html"><img src="{{asset('front/images/logo/logo.png')}}" alt="Site Logo" /></a>
                            </div>
                            <div class="doubly-float">
                                <select class="currency-switcher right" name="doubly-currencies">
                                    <option value="INR" data-country="India" data-currency-symbol="₹"
                                        data-display="INR">
                                        Indian Rupee
                                    </option>
                                    <option value="USD" data-country="United-States" data-currency-symbol="$"
                                        data-display="USD">
                                        US Dollar
                                    </option>
                                    <option value="AED" data-country="United-Arab-Emirates" data-currency-symbol="د.إ"
                                        data-display="AED">
                                        United Arab Emirates Dirham
                                    </option>
                                    <option value="GBP" data-country="United-Kingdom" data-currency-symbol="£"
                                        data-display="GBP">
                                        British Pound Sterling
                                    </option>
                                    <option value="EUR" data-country="European-Union" data-currency-symbol="€"
                                        data-display="EUR">
                                        Euro
                                    </option>
                                    <option value="CAD" data-country="Canada" data-currency-symbol="$"
                                        data-display="CAD">
                                        Canadian Dollar
                                    </option>
                                    <option value="AUD" data-country="Australia" data-currency-symbol="$"
                                        data-display="AUD">
                                        Australian Dollar
                                    </option>
                                </select>
                                <div id="curSwitcher" class="doubly-nice-select currency-switcher right "
                                    data-nosnippet="" onclick="switchCur()">
                                    <span class="current notranslate"><span class="flags flags-India"></span>
                                        &nbsp;INR</span>
                                    <ul class="list">
                                        <li class="option notranslate" data-value="INR" data-country="India"
                                            data-currency-symbol="₹" data-display="INR">
                                            <span class="flags flags-India"></span> &nbsp;Indian Rupee
                                        </li>
                                        <li class="option notranslate" data-value="USD" data-country="United-States"
                                            data-currency-symbol="$" data-display="USD">
                                            <span class="flags flags-United-States"></span> &nbsp;US Dollar
                                        </li>
                                        <li class="option notranslate" data-value="AED"
                                            data-country="United-Arab-Emirates" data-currency-symbol="د.إ"
                                            data-display="AED">
                                            <span class="flags flags-United-Arab-Emirates"></span> &nbsp;United
                                            Arab Emirates Dirham
                                        </li>
                                        <li class="option notranslate" data-value="GBP" data-country="United-Kingdom"
                                            data-currency-symbol="£" data-display="GBP">
                                            <span class="flags flags-United-Kingdom"></span> &nbsp;British Pound
                                            Sterling
                                        </li>
                                        <li class="option notranslate" data-value="EUR" data-country="European-Union"
                                            data-currency-symbol="€" data-display="EUR">
                                            <span class="flags flags-European-Union"></span> &nbsp;Euro
                                        </li>
                                        <li class="option notranslate" data-value="CAD" data-country="Canada"
                                            data-currency-symbol="$" data-display="CAD">
                                            <span class="flags flags-Canada"></span> &nbsp;Canadian Dollar
                                        </li>
                                        <li class="option notranslate" data-value="AUD" data-country="Australia"
                                            data-currency-symbol="$" data-display="AUD">
                                            <span class="flags flags-Australia"></span> &nbsp;Australian Dollar
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <ul>
                                <li><a class="underline-on-hover" href="index.html">Home</a></li>
                                <li class="dropdown position-static arrow-mover"><a class="underline-on-hover"
                                        href="javascript:void(0)">Shop<i class="Uparrow"></i></a>
                                    <ul class="mega-menu d-block">
                                        <li class="d-flex">
                                            <ul class="d-block">
                                                <li class="menu_title"><a href="javascript:void(0)">Classic
                                                        Variation1</a></li>
														@foreach ($categories as $row)
                                                <li class="sub-menu-d"><a href="javascript:void(0)"><span
                                                            class="underline-lite-on-hover position-relative">{{ $row->name }}
                                                            1</span></a>
                                                </li>
												@endforeach
                                                <li class="sub-menu-d"><a href="javascript:void(0)"><span
                                                            class="underline-lite-on-hover position-relative">Categories
                                                            1</span></a>
                                                </li>
                                                <li class="sub-menu-d"><a href="javascript:void(0)"><span
                                                            class="underline-lite-on-hover position-relative">Categories
                                                            1</span></a>
                                                </li>
                                                <li class="sub-menu-d"><a href="javascript:void(0)"><span
                                                            class="underline-lite-on-hover position-relative">Categories
                                                            1</span></a>
                                                </li>
                                                <li class="sub-menu-d"><a href="javascript:void(0)"><span
                                                            class="underline-lite-on-hover position-relative">Categories
                                                            1</span></a>
                                                </li>
                                            </ul>
                                            <ul class="d-block">
                                                <li class="menu_title"><a href="javascript:void(0)">Classic
                                                        Variation2</a></li>
                                                <li class="sub-menu-d"><a href="javascript:void(0)"><span
                                                            class="underline-lite-on-hover position-relative">Categories
                                                            1</span></a>
                                                </li>
                                                <li class="sub-menu-d"><a href="javascript:void(0)"><span
                                                            class="underline-lite-on-hover position-relative">Categories
                                                            1</span></a>
                                                </li>
                                                <li class="sub-menu-d"><a href="javascript:void(0)"><span
                                                            class="underline-lite-on-hover position-relative">Categories
                                                            1</span></a>
                                                </li>
                                                <li class="sub-menu-d"><a href="javascript:void(0)"><span
                                                            class="underline-lite-on-hover position-relative">Categories
                                                            1</span></a>
                                                </li>
                                                <li class="sub-menu-d"><a href="javascript:void(0)"><span
                                                            class="underline-lite-on-hover position-relative">Categories
                                                            1</span></a>
                                                </li>
                                            </ul>
                                            <ul class="d-block">
                                                <li class="menu_title"><a href="javascript:void(0)">Classic
                                                        Variation3</a></li>
                                                <li class="sub-menu-d"><a href="javascript:void(0)"><span
                                                            class="underline-lite-on-hover position-relative">Categories
                                                            1</span></a>
                                                </li>
                                                <li class="sub-menu-d"><a href="javascript:void(0)"><span
                                                            class="underline-lite-on-hover position-relative">Categories
                                                            1</span></a>
                                                </li>
                                                <li class="sub-menu-d"><a href="javascript:void(0)"><span
                                                            class="underline-lite-on-hover position-relative">Categories
                                                            1</span></a>
                                                </li>
                                                <li class="sub-menu-d"><a href="javascript:void(0)"><span
                                                            class="underline-lite-on-hover position-relative">Categories
                                                            1</span></a>
                                                </li>
                                                <li class="sub-menu-d"><a href="javascript:void(0)"><span
                                                            class="underline-lite-on-hover position-relative">Categories
                                                            1</span></a>
                                                </li>
                                            </ul>
                                            <ul class="d-block">
                                                <li class="menu_title"><a href="javascript:void(0)">Classic
                                                        Variation4</a></li>
                                                <li class="sub-menu-d"><a href="javascript:void(0)"><span
                                                            class="underline-lite-on-hover position-relative">Categories
                                                            1</span></a>
                                                </li>
                                                <li class="sub-menu-d"><a href="javascript:void(0)"><span
                                                            class="underline-lite-on-hover position-relative">Categories
                                                            1</span></a>
                                                </li>
                                                <li class="sub-menu-d"><a href="javascript:void(0)"><span
                                                            class="underline-lite-on-hover position-relative">Categories
                                                            1</span></a>
                                                </li>
                                                <li class="sub-menu-d"><a href="javascript:void(0)"><span
                                                            class="underline-lite-on-hover position-relative">Categories
                                                            1</span></a>
                                                </li>
                                                <li class="sub-menu-d"><a href="javascript:void(0)"><span
                                                            class="underline-lite-on-hover position-relative">Categories
                                                            1</span></a>
                                                </li>
                                            </ul>
                                            <ul>
                                                <li class="sub-menu-img">
                                                    <img src="{{asset('front/images/instragram-image/3.jpg')}}" />
                                                    <span class="sub-menu-img-title">
                                                        Discover<br> More <br>Items
                                                    </span>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul class="ec-main-banner w-100">
                                                <li><a class="p-0" href="javascript:void(0)"><img class="img-responsive"
                                                            src="{{asset('front/images/menu-banner/1.jpg')}}" alt=""></a></li>
                                                <li><a class="p-0" href="javascript:void(0)"><img class="img-responsive"
                                                            src="{{asset('front/images/menu-banner/2.jpg')}}" alt=""></a></li>
                                                <li><a class="p-0" href="javascript:void(0)"><img class="img-responsive"
                                                            src="{{asset('front/images/menu-banner/3.jpg')}}" alt=""></a></li>
                                                <li><a class="p-0" href="javascript:void(0)"><img class="img-responsive"
                                                            src="{{asset('front/images/menu-banner/4.jpg')}}" alt=""></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a class="underline-on-hover" href="javascript:void(0)">Sale</a>
                                </li>
                                <li class="dropdown position-static arrow-mover"><a class="underline-on-hover"
                                        href="javascript:void(0)">Collection<i class="Uparrow"></i></a>
                                    <ul class="mega-menu d-block">
                                        <li class="d-flex">
                                            <ul>
                                                <li class="sub-menu-img">
                                                    <img src="{{asset('front/images/instragram-image/3.jpg')}}" />
                                                    <span class="sub-menu-img-title">
                                                        Discover<br> More <br>Items
                                                    </span>
                                                </li>
                                            </ul>
                                            <ul>
                                                <li class="sub-menu-img">
                                                    <img src="{{asset('front/images/instragram-image/3.jpg')}}" />
                                                    <span class="sub-menu-img-title">
                                                        Discover<br> More <br>Items
                                                    </span>
                                                </li>
                                            </ul>
                                            <ul>
                                                <li class="sub-menu-img">
                                                    <img src="{{asset('front/images/instragram-image/3.jpg')}}" />
                                                    <span class="sub-menu-img-title">
                                                        Discover<br> More <br>Items
                                                    </span>
                                                </li>
                                            </ul>
                                            <ul>
                                                <li class="sub-menu-img">
                                                    <img src="{{asset('front/images/instragram-image/3.jpg')}}" />
                                                    <span class="sub-menu-img-title">
                                                        Discover<br> More <br>Items
                                                    </span>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul class="ec-main-banner w-100">
                                                <li><a class="p-0" href="javascript:void(0)"><img class="img-responsive"
                                                            src="{{asset('front/images/menu-banner/1.jpg')}}" alt=""></a></li>
                                                <li><a class="p-0" href="javascript:void(0)"><img class="img-responsive"
                                                            src="{{asset('front/images/menu-banner/2.jpg')}}" alt=""></a></li>
                                                <li><a class="p-0" href="javascript:void(0)"><img class="img-responsive"
                                                            src="{{asset('front/images/menu-banner/3.jpg')}}" alt=""></a></li>
                                                <li><a class="p-0" href="javascript:void(0)"><img class="img-responsive"
                                                            src="{{asset('front/images/menu-banner/4.jpg')}}" alt=""></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a class="underline-on-hover" href="javascript:void(0)">Gifting</a>
                                </li>
                                <li class="dropdown"><a class="underline-on-hover" href="javascript:void(0)">About
                                        Us</a></li>
                                <li class="dropdown"><a class="underline-on-hover" href="javascript:void(0)">Track
                                        Order</a></li>
                                <li><a class="underline-on-hover" href="javascript:void(0)">Blog</a></li>
                            </ul>
                            <div class="sticky-icons" class="align-self-center" id="group-hover">
                                <div id="search-toggle-button" class="ec-header-bottons header-icons">
                                    <a href="#" class="icon-hover search-open" onclick="openSearch()">
                                        <svg class="t-icon " xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="#42843e" stroke-width="1"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                            <circle cx="11" cy="11" r="8"></circle>
                                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                        </svg>
                                    </a>
                                    <a id="" href="#" class="icon-hover search-close" onclick="closeSearch()">
    
                                        <span class="search-close" onclick="closeSearch()">
                                            <!-- × -->
                                            <svg data-v-6a943414="" width="20" height="20"
                                                xmlns="http://www.w3.org/2000/svg" class="close-icon">
                                                <path
                                                    d="M6.414 5A1 1 0 1 0 5 6.414L10.586 12 5 17.586A1 1 0 1 0 6.414 19L12 13.414 17.586 19A1 1 0 1 0 19 17.586L13.414 12 19 6.414A1 1 0 1 0 17.586 5L12 10.586 6.414 5Z">
                                                </path>
                                            </svg>
                                        </span>
                                    </a>
    
    
                                    <a href="#" class="icon-hover">
                                        <svg class="t-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 113 114" fill="none" stroke="#42843e" stroke-width="1"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="85" cy="86.5" r="25.5" stroke="#42843e" stroke-width="4" />
                                            <path d="M15.5 46H66.5" stroke="#42843e" stroke-width="4" />
                                            <path d="M28.5 0L28.5 15" stroke="#42843e" stroke-width="4" />
                                            <path d="M63.5 0L63.5 15" stroke="#42843e" stroke-width="4" />
                                            <path d="M3.5 27L88.5 27" stroke="#42843e" stroke-width="4" />
                                            <path d="M15.5 62H51.5" stroke="#42843e" stroke-width="4" />
                                            <path d="M70.5 85.2571L81.1333 94L99.5 77" stroke="#42843e" stroke-width="4" />
                                            <path
                                                d="M60.5 94H13.5C4.7 93.6 2.5 86.5 2.5 83V18C2.5 14.3333 4.7 7 13.5 7H77.5C81.5 7 89.5 9.2 89.5 18V61.5"
                                                stroke="#42843e" stroke-width="4" />
                                        </svg>
                                    </a>
                                    <a href="#" class="icon-hover" fill="#81d8d0">
                                        <svg class="t-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 105 103" fill="none">
                                            <path d="M11.7838 79L4 100L28 93.6364" stroke="#42843e" stroke-width="4" />
                                            <path
                                                d="M43.0741 40.0421L36.0741 25.0421C24.8741 24.2421 23.0741 35.0421 23.5741 40.5421C32.3741 64.1421 51.9075 75.0421 60.5741 77.5421C75.3741 82.3421 82.0741 72.5421 81.0741 65.5421L67.5741 60.0421L60.5741 65.5421C49.3741 63.5421 41.2408 52.3754 38.5741 47.0421L43.0741 40.0421Z"
                                                stroke="#42843e" stroke-width="4" />
                                            <path
                                                d="M12.5 80.5001C5.66666 70.8334 -3.90001 45.9001 12.5 23.5001C27.875 2.50001 65 -10.5 92.5 23.5001C92.5 23.5001 114.5 51.0001 92.5 80.5001C82.8333 92.1667 60 108.5 26.5 93.5001"
                                                stroke="#42843e" stroke-width="4" />
                                        </svg>
                                    </a>
    
                                    <div class="ec-header-user dropdown add-account hoverable" id="hover-me">
                                        <a href="#" class="icon-hover" data-bs-toggle="dropdown" onclick="openNav()"><svg
                                                class="t-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 99 98" fill="none">
                                                <circle cx="49.5" cy="49" r="47" stroke="#42843e" stroke-width="4" />
                                                <circle cx="49" cy="42.5" r="19.5" stroke="#42843e" stroke-width="4" />
                                                <path d="M20.5 85C23 76.5 31.4 62.5 49 62.5C66.6 62.5 74.5 75.5 77.5 85"
                                                    stroke="#42843e" stroke-width="4" />
                                            </svg>
                                        </a>
                                        <!-- <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span> -->
                                        
                                        <!-- <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a class="dropdown-item" href="#">Register</a></li>
                                            <li><a class="dropdown-item" href="#">Checkout</a></li>
                                            <li><a class="dropdown-item" href="#">Login</a></li>
                                        </ul> -->
    
                                    </div>
    
                                    <a href="#" class="icon-hover" onclick="openWishlistSideNav()">
                                        <svg class="t-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 101 100" fill="none">
                                            <rect x="72.7" y="48.7" width="13.6" height="3.4"
                                                transform="rotate(90 72.7 48.7)" fill="#42843e" />
                                            <rect x="72.7" y="47" width="3.4" height="3.4" rx="1.7"
                                                transform="rotate(90 72.7 47)" fill="#42843e" />
                                            <rect x="72.7" y="60.6" width="3.4" height="3.4" rx="1.7"
                                                transform="rotate(90 72.7 60.6)" fill="#42843e" />
                                            <rect x="77.8" y="57.2" width="13.6" height="3.4"
                                                transform="rotate(-180 77.8 57.2)" fill="#42843e" />
                                            <rect x="65.9" y="57.2" width="3.4" height="3.4" rx="1.7"
                                                transform="rotate(-180 65.9 57.2)" fill="#42843e" />
                                            <rect x="79.5" y="57.2" width="3.4" height="3.4" rx="1.7"
                                                transform="rotate(-180 79.5 57.2)" fill="#42843e" />
                                            <rect x="2.5" y="2" width="96" height="96" rx="12" stroke="#42843e"
                                                stroke-width="4" />
                                            <path
                                                d="M74.4999 40.5C75.4999 32.5 64.5 18.5 50.5 33C45 25 28.5 23 26.5 40.5C26.4999 47 31.7 55.3 44.5 72.5C46.3333 74.5 51.0999 77.3 55.4999 72.5L60.4999 65.5"
                                                stroke="#42843e" stroke-width="4" />
                                        </svg>
                                    </a>
    
                                    <a href="#ec-side-cart00" class="icon-hover" onclick="openMyCart()">
                                        <svg class="t-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 89 98" fill="none">
                                            <path
                                                d="M2.5 30H86.5V88C86.5 92.4183 82.9183 96 78.5 96H10.5C6.08172 96 2.5 92.4183 2.5 88V30Z"
                                                stroke="#42843e" stroke-width="4" />
                                            <path d="M25.5 40.9999V20.4999C25 1.71661e-05 61 -6.5 64.5 20.4999V40.5"
                                                stroke="#42843e" stroke-width="4" />
                                        </svg>
                                    </a>
    
    
                                </div>
    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Ec Main Menu End -->
        <!-- Mobile Menu Start -->
        <div id="ec-mobile-menu" class="ec-side-cart ec-mobile-menu">
            <div class="ec-menu-title">
                <span class="menu_title">My Menu</span>
                <button class="ec-close">×</button>
            </div>
            <div class="ec-menu-inner">
                <div class="ec-menu-content">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="javascript:void(0)">Shop</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="javascript:void(0)">Classic Variation</a>
                                    <ul class="sub-menu">
                                        <li><a href="javascript:void(0)">Categories 1</a></li>
                                        <li><a href="javascript:void(0)">Categories 2</a></li>
                                        <li><a href="javascript:void(0)">Categories 3</a></li>
                                        <li><a href="javascript:void(0)">Categories 4</a></li>
                                        <li><a href="javascript:void(0)">Categories 5</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Classic Variation</a>
                                    <ul class="sub-menu">
                                        <li><a href="javascript:void(0)">Categories 1</a></li>
                                        <li><a href="javascript:void(0)">Categories 2</a></li>
                                        <li><a href="javascript:void(0)">Categories 3</a></li>
                                        <li><a href="javascript:void(0)">Categories 4</a></li>
                                        <li><a href="javascript:void(0)">Categories 5</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Classic Variation</a>
                                    <ul class="sub-menu">
                                        <li><a href="javascript:void(0)">Categories 1</a></li>
                                        <li><a href="javascript:void(0)">Categories 2</a></li>
                                        <li><a href="javascript:void(0)">Categories 3</a></li>
                                        <li><a href="javascript:void(0)">Categories 4</a></li>
                                        <li><a href="javascript:void(0)">Categories 5</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Classic Variation</a>
                                    <ul class="sub-menu">
                                        <li><a href="javascript:void(0)">Categories 1</a></li>
                                        <li><a href="javascript:void(0)">Categories 2</a></li>
                                        <li><a href="javascript:void(0)">Categories 3</a></li>
                                        <li><a href="javascript:void(0)">Categories 4</a></li>
                                        <li><a href="javascript:void(0)">Categories 5</a></li>

                                    </ul>
                                </li>
                                <li><a class="p-0" href="javascript:void(0)">
                                        <img class="img-responsive" src="{{asset('front/images/menu-banner/1.jpg')}}" alt=""></a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)">Sale</a></li>
                        <li><a href="javascript:void(0)">Collection</a></li>
                        <li><a href="javascript:void(0)">Gifting</a></li>
                        <li class="dropdown"><a href="javascript:void(0)">About Us</a></li>
                        <li class="dropdown"><a href="javascript:void(0)">Track Order</a></li>
                        <li><a href="javascript:void(0)">Blog</a></li>
                    </ul>
                </div>
                <div class="header-res-lan-curr">
                    <div class="header-top-lan-curr">
                        <!-- Language Start -->
                        <div class="header-top-lan dropdown">
                            <button class="dropdown-toggle text-upper" data-bs-toggle="dropdown">Language <i
                                    class="ecicon eci-caret-down" aria-hidden="true"></i></button>
                            <ul class="dropdown-menu">
                                <li class="active"><a class="dropdown-item" href="#">English</a></li>
                                <li><a class="dropdown-item" href="#">Italiano</a></li>
                            </ul>
                        </div>
                        <!-- Language End -->
                        <!-- Currency Start -->
                        <div class="header-top-curr dropdown">
                            <button class="dropdown-toggle text-upper" data-bs-toggle="dropdown">Currency <i
                                    class="ecicon eci-caret-down" aria-hidden="true"></i></button>
                            <ul class="dropdown-menu">
                                <li class="active"><a class="dropdown-item" href="#">USD $</a></li>
                                <li><a class="dropdown-item" href="#">EUR €</a></li>
                            </ul>
                        </div>
                        <!-- Currency End -->
                    </div>
                    <!-- Social Start -->
                    <div class="header-res-social">
                        <div class="header-top-social">
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
                    <!-- Social End -->
                </div>
            </div>
        </div>
        <!-- mobile Menu End -->
    </header>
    <!-- Header End  -->

    <!-- Cart Start -->
    <div class="ec-side-cart-overlay d-none"></div>
    <div id="ec-side-cart" class="ec-side-cart">
        <div class="ec-cart-inner">
            <div class="ec-cart-top">
                <div class="ec-cart-title">
                    <span class="cart_title">My Cart</span>
                    <button class="ec-close">×</button>
                </div>
                <ul class="eccart-pro-items">
                    <li>
                        <a href="javascript:void(0)" class="sidekka_pro_img"><img
                                src="{{asset('front/images/product-image/6_1.jpg')}}" alt="product"></a>
                        <div class="ec-pro-content">
                            <a href="javascript:void(0)" class="cart_pro_title">T-shirt For Women</a>
                            <span class="cart-price"><span>$76.00</span> x 1</span>
                            <div class="qty-plus-minus">
                                <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                            </div>
                            <a href="javascript:void(0)" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="sidekka_pro_img"><img
                                src="{{asset('front/images/product-image/6_1.jpg')}}" alt="product"></a>
                        <div class="ec-pro-content">
                            <a href="javascript:void(0)" class="cart_pro_title">Women Leather Shoes</a>
                            <span class="cart-price"><span>$64.00</span> x 1</span>
                            <div class="qty-plus-minus">
                                <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                            </div>
                            <a href="javascript:void(0)" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="sidekka_pro_img"><img
                                src="{{asset('front/images/product-image/6_1.jpg')}}" alt="product"></a>
                        <div class="ec-pro-content">
                            <a href="javascript:void(0)" class="cart_pro_title">Girls Nylon Purse</a>
                            <span class="cart-price"><span>$59.00</span> x 1</span>
                            <div class="qty-plus-minus">
                                <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                            </div>
                            <a href="javascript:void(0)" class="remove">×</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="ec-cart-bottom">
                <div class="cart-sub-total">
                    <table class="table cart-table">
                        <tbody>
                            <tr>
                                <td class="text-left">Sub-Total :</td>
                                <td class="text-right">$300.00</td>
                            </tr>
                            <tr>
                                <td class="text-left">VAT (20%) :</td>
                                <td class="text-right">$60.00</td>
                            </tr>
                            <tr>
                                <td class="text-left">Total :</td>
                                <td class="text-right primary-color">$360.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="cart_btn">
                    <a href="javascript:void(0)" class="btn btn-primary">View Cart</a>
                    <a href="javascript:void(0)" class="btn btn-secondary">Checkout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart End -->

@yield('content')
    <!-- Footer Start -->
    <footer class="ec-footer section-space-mt">
        <div class="footer-container">
            <div class="footer-offer">
                <div class="container">
                    <div class="row">
                        <div class="text-center footer-off-msg">
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-top section-space-footer-p">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-lg-3 ec-footer-info">
                            <div class="ec-footer-widget">
                                <h4 class="ec-footer-heading">CUSTOMER CARE<div class="ec-heading-res"><i
                                            class="ecicon eci-angle-down"></i></div>
                                </h4>
                                <div class="ec-footer-links ec-footer-dropdown">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link"><a class="underline-lite-on-hover position-relative"
                                                href="#">Menu Link</a></li>
                                        <li class="ec-footer-link"><a class="underline-lite-on-hover position-relative"
                                                href="#">Menu Link</a></li>
                                        <li class="ec-footer-link"><a class="underline-lite-on-hover position-relative"
                                                href="#">Menu Link</a></li>
                                        <li class="ec-footer-link"><a class="underline-lite-on-hover position-relative"
                                                href="#">Menu Link</a></li>
                                        <li class="ec-footer-link"><a class="underline-lite-on-hover position-relative"
                                                href="#">Menu Link</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-3 ec-footer-account">
                            <div class="ec-footer-widget">
                                <h4 class="ec-footer-heading">ABOUT DAYLIST<div class="ec-heading-res"><i
                                            class="ecicon eci-angle-down"></i></div>
                                </h4>
                                <div class="ec-footer-links ec-footer-dropdown">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link"><a class="underline-lite-on-hover position-relative"
                                                href="#">Menu Link</a></li>
                                        <li class="ec-footer-link"><a class="underline-lite-on-hover position-relative"
                                                href="#">Menu Link</a></li>
                                        <li class="ec-footer-link"><a class="underline-lite-on-hover position-relative"
                                                href="#">Menu Link</a></li>
                                        <li class="ec-footer-link"><a class="underline-lite-on-hover position-relative"
                                                href="#">Menu Link</a></li>
                                        <li class="ec-footer-link"><a class="underline-lite-on-hover position-relative"
                                                href="#">Menu Link</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-3 ec-footer-service">
                            <div class="ec-footer-widget">
                                <h4 class="ec-footer-heading">QUICK LINKS<div class="ec-heading-res"><i
                                            class="ecicon eci-angle-down"></i></div>
                                </h4>
                                <div class="ec-footer-links ec-footer-dropdown">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link"><a class="underline-lite-on-hover position-relative"
                                                href="#">Menu Link</a></li>
                                        <li class="ec-footer-link"><a class="underline-lite-on-hover position-relative"
                                                href="#">Menu Link </a></li>
                                        <li class="ec-footer-link"><a class="underline-lite-on-hover position-relative"
                                                href="#">Menu Link</a></li>
                                        <li class="ec-footer-link"><a class="underline-lite-on-hover position-relative"
                                                href="#">Menu Link</a></li>
                                        <li class="ec-footer-link"><a class="underline-lite-on-hover position-relative"
                                                href="#">Menu Link</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-3 ec-footer-news">
                            <div class="ec-footer-widget">
                                <h4 class="ec-footer-heading">CONTACT US<div class="ec-heading-res"><i
                                            class="ecicon eci-angle-down"></i></div>
                                </h4>
                                <div class="ec-footer-links ec-footer-dropdown">
                                    <ul class="align-items-center">

                                        <li class="ec-footer-link"><span>Call Us:</span><a href="#">+91
                                                4444 666666</a></li>
                                        <li class="ec-footer-link">
                                            <span>Email:</span>
                                            <a href="#">info@example.com</a>
                                        </li>
                                        <li class="ec-footer-link">
                                            <a href="#"
                                                class="more-details underline-lite-on-hover position-relative">More
                                                Details</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Footer social Start -->
                        <!-- <div class="col-sm-12 col-md-2 text-left footer-bottom-left">
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
                        </div> -->
                        <!-- Footer social End -->
                        <!-- Footer Copyright Start -->
                        <div class="col-sm-12 col-md-12 text-center footer-copy">
                            <div class="footer-bottom-copy ">
                                <div class="ec-copy">Copyright © 2022 
                                    <a class="site-name text-upper"
                                        href="#">Daylist<span>.</span>
                                    </a>. All Rights Reserved . <span>Developer By <a class="site-name text-upper" href="http://dzoneindia.co.in/" target="_blank">Dzone India Software Pvt. Ltd.</a></span>
                                </div>
                            </div>
                        </div>
                        <!-- Footer Copyright End -->
                        <!-- Footer payment -->
                        <!-- <div class="col-sm-12 col-md-2 footer-bottom-right">
                            <div class="footer-bottom-payment d-flex justify-content-end">
                                <div class="payment-link">
                                    <img src="front/images/icons/payment.png" alt="">
                                </div>

                            </div>
                        </div> -->
                        <!-- Footer payment -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->


    <!-- Footer navigation panel for responsive display -->
    <div class="ec-nav-toolbar d-none">
        <div class="container">
            <div class="ec-nav-panel">
                <div class="ec-nav-panel-icons">
                    <a href="#ec-mobile-menu" class="navbar-toggler-btn ec-header-btn ec-side-toggle">
                        <img style="filter: invert(18%) sepia(55%) saturate(5235%) hue-rotate(343deg) brightness(85%) contrast(88%);"
                            src="{{asset('front/images/icons/menu.svg')}}" class="svg_img header_svg" alt="icon" /></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="#ec-side-cart" class="toggle-cart ec-header-btn ec-side-toggle"><img
                            src="{{asset('front/images/icons/cart.svg')}}" class="svg_img header_svg" alt="icon" /><span
                            class="ec-cart-noti ec-header-count cart-count-lable">3</span></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="index.html" class="ec-header-btn"><img src="{{asset('front/images/icons/home.svg')}}"
                            class="svg_img header_svg" alt="icon" /></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="#" class="ec-header-btn"><img src="{{asset('front/images/icons/wishlist.svg')}}"
                            class="svg_img header_svg" alt="icon" /><span class="ec-cart-noti">4</span></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="#" class="ec-header-btn"><img src="{{asset('front/images/icons/account.svg')}}"
                            class="svg_img header_svg" alt="icon" /></a>
                </div>

            </div>
        </div>
    </div>
    <!-- Footer navigation panel for responsive display end -->

    <!-- whatsapp Floating Icon -->
    <a href="https://api.whatsapp.com/send?phone=51955081075&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202."
        class="wafloat" target="_blank">
        <i class="fa fa-whatsapp wa-float"></i>
    </a>

    <!-- FOOTER COOKIES SECTION -->
    <footer class="cookie-footer" id="cookies">
        <div>We use cookies to optimise your visit. By continuing to browse our site you are accepting our cookie
            policy.</div><button class="" onclick="closeCookies()">&times;</button>
    </footer>

    <!-- Vendor JS -->

    <script src="{{asset('front/js/vendor/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('front/js/vendor/jquery.notify.min.js')}}"></script>
    <script src="{{asset('front/js/vendor/jquery.bundle.notify.min.js')}}"></script>

    <script src="{{asset('front/js/vendor/popper.min.js')}}"></script>
    <script src="{{asset('front/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{asset('front/js/vendor/jquery-migrate-3.3.0.min.js')}}"></script>
    <script src="{{asset('front/js/vendor/modernizr-3.11.2.min.js')}}"></script>

    <!--Plugins JS-->
    <script src="{{asset('front/js/plugins/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('front/js/plugins/countdownTimer.min.js')}}"></script>
    <script src="{{asset('front/js/plugins/scrollup.js')}}"></script>
    <script src="{{asset('front/js/plugins/jquery.zoom.min.js')}}"></script>
    <script src="{{asset('front/js/plugins/slick.min.js')}}"></script>
    <script src="{{asset('front/js/plugins/infiniteslidev2.js')}}"></script>
    <script src="{{asset('front/js/vendor/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('front/js/plugins/jquery.sticky-sidebar.js')}}"></script>

    <!-- Main Js -->
    <script src="{{asset('front/js/vendor/index.js')}}"></script>
    <script src="{{asset('front/js/main.js')}}"></script>




    <script>
        $(document).ready(function () {

            $(".qty-product-cover.single-carousel").slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: !0,
                fade: !1,
                dots: !0,
                autoplay: !1,
                infinite: !1,

            });
        });
        // $(document).ready(function () {

        // $(".ec-test-outer").slick({ 
        //     slidesToShow: 0,
        //     slidesToScroll: 0,
        //     arrows: !0,
        //     fade: !1,
        //     dots: !0,
        //     autoplay:!0,
        //     infinite: !0,    

        //     });
        // });	


        setTimeout(() => {
            const box = document.getElementById('cookies');
            box.style.display = 'none';
        }, 10000);

        function closeCookies() {
            document.getElementById("cookies").style.display = 'none';
        }

    </script>

</body>

</html>