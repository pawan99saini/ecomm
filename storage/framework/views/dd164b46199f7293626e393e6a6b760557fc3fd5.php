<?php
$appVersion = "1.2.2";
$pagename = strtolower(basename($_SERVER['PHP_SELF']));
$setting = App\Models\Setting::find(1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=0">
    <title>Dustkar</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />

    <meta name="theme-color" content="#9bebff">
    <meta name="msapplication-navbutton-color" content="#9bebff">
    <meta name="apple-mobile-web-app-status-bar-style" content="#9bebff">
    <link rel="shortcut icon" type="image/png" href="<?php echo e(asset('file/')); ?>/<?php echo e($setting['favicon']); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500&display=swap" rel="stylesheet">
    <link href="<?php echo e(asset('html/css/app.css')); ?>?v=<?php echo $appVersion ?>" rel="stylesheet">
    <?php echo $__env->yieldPushContent('custom-style'); ?>
</head>
<body class="page-load <?php echo ($pagename=='index.php' || $pagename=='')?'home-page':'inner-page'; ?>">
<div class="container"><div class="containerwidth"></div></div>
<!-- <div class="offerBar animLeft">
    COMPLIMENTARY SHIPPING AND RETURNS on orderS above  &#8377;5000
</div> -->
<div class="wrapper clearfix">
    <header class="header-main">
        <div class="container">
            <div class="row g-0 gx-xl-3 justify-content-lg-between">
                <div class="col col-lg-auto order-1 d-flex align-items-center">
                    <a href="./" class="brand">
                        <img src="<?php echo e(asset('file/')); ?>/<?php echo e($setting['logo']); ?>" alt="">
                    </a>
                </div>
                <div class="col-auto order-3 order-xl-2 pl-3 pl-xl-0 d-flex align-items-center">
                    
                    <span href="javascript:void(0)" class="hm d-xl-none">
                        <div class="hamburger">
                            <span></span>
                            <span></span>
                        </div>
                    </span>

                    <nav class="main-nav">
                        <ul class="nav justify-content-end">
                            <li><a href="./products.php">New Arrivals</a></li>
                            <li class="hasMenu">
                                <a href="javascript:void(0)">Dustkar Women</a>
                                <span class="m-open"></span>
                                <div class="mega-menu p-0">
                                    <div class="container">
                                        <div class="menuWrapper fr">
                                            <div class="row justify-content-between">
                                                <div class="col-12 col-xl-6 pt-xl-4">
                                                    <div class="menu-list">
                                                        <ul>
                                                            <li><a href="#/">Dresses</a></li>
                                                            <li><a href="#/">Tops</a></li>
                                                            <li><a href="#/">Capes</a></li>
                                                            <li><a href="#/">Jumpsuits</a></li>
                                                            <li><a href="#/">Skirts</a></li>
                                                            <li><a href="#/">Pants / Lowers</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-12 d-none d-xl-block col-xl-auto">
                                                    <img src="<?php echo e(asset('html/images/dd-women.jpg')); ?>" class="menuImg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                
                            </li>
                            <li class="hasMenu">
                                <a href="javascript:void(0)">Dustkar Man</a>
                                <span class="m-open"></span>
                                <div class="mega-menu p-0">
                                    <div class="container">
                                        <div class="menuWrapper fr">
                                            <div class="row justify-content-between">
                                                <div class="col-12 col-xl-6 pt-xl-4">
                                                    <div class="menu-list">
                                                        <ul>
                                                            <li><a href="#/">Dresses</a></li>
                                                            <li><a href="#/">Tops</a></li>
                                                            <li><a href="#/">Capes</a></li>
                                                            <li><a href="#/">Jumpsuits</a></li>
                                                            <li><a href="#/">Skirts</a></li>
                                                            <li><a href="#/">Pants / Lowers</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-12 d-none d-xl-block col-xl-auto">
                                                    <img src="<?php echo e(asset('html/images/dd-men.jpg')); ?>" class="menuImg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                
                            </li>
                            <li><a href="">Accessories</a></li>
                            <li><a href="">Sale</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-auto order-2 order-xl-3 d-flex">
                    <ul class="shopping-icons">
                        <li class="active d-flex align-items-center">
                            <a href="javascript:void(0);"><span class="icon-user"></span></a>
                            <div class="accountMenu">
                                <ul>
                                    <li>Hi Sandeep</li>
                                    <li><a href="./order-history.php">Order History</a></li>
                                    <li><a href="./my-addresses.php">Address Book</a></li>
                                    <li><a href="./edit-profile.php">Edit Profile</a></li>
                                    <li><a href="./change-password.php">Change Password</a></li>
                                    <li><a href="#">Logout</a></li>
                                </ul>
                            </div>
                        </li>
                        <!-- <li class="d-flex align-items-center"><a href="login.php"><span class="icon-user"></span></a></li> -->
                        <li class="d-flex align-items-center"><a href="javascript:void(0);" class="searchLink"><span class="icon-loupe"></span></a></li>
                        <li class="d-flex align-items-center">
                            <a href="cart.php">
                                <span class="icon-shopping-bag"></span>
                                <span class="cart-count">1</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="searchBar">
            <div class="container">
                <form action="">
                    <div class="row align-items-end">
                        <div class="col"><input type="text" class="form-control" placeholder="Enter Search Term"></div>
                        <div class="col-auto"><button class="btn btn-secondary">Search</button></div>
                    </div>
                </form>
            </div>
        </div>
    </header>
    
   <main class="main clearfix">
        <div class="content">
            <?php echo $__env->yieldContent('content'); ?>
        </div>

        <!-- Footer Section Begin -->

        </main>
 
 <footer class="footer-main">
   <div class="container">
       <div class="row">
           <div class="col-12 col-sm-6 col-lg-3">
               <h5>CUSTOMER SERVICE</h5>
               <ul class="bottomLinks">
                   <li><a href="">Contact Us</a></li>
                   <li><a href="">Order Status</a></li>
                   <li><a href="">Shipping</a></li>
                   <li><a href="">Return Policy & Exchanges</a></li>
               </ul>
           </div>
           <div class="col-12 col-sm-6 col-lg-3">
               <h5>ABOUT</h5>
               <ul class="bottomLinks">
                   <li><a href="">Contact Us</a></li>
                   <li><a href="">About Us</a></li>
                   <li><a href="">FAQ</a></li>
                   <li><a href="">Blog</a></li>
               </ul>
           </div>
           
           <div class="col-12 col-sm-6 col-lg-3">
               <h5>MY ACCOUNT</h5>                
               <ul class="bottomLinks">
                   <li><a href="">My Account</a></li>
                   <li><a href="">Orders</a></li>
                   <li><a href="">Exchange & Return Policy</a></li>
                   <li><a href="">Privacy Policy</a></li>
               </ul>
           </div>
           
           <div class="col-12 col-sm-6 col-lg-3">
               <h5>INFORMATION</h5>                
               <ul class="bottomLinks">
                   <li><a href="">Privacy Policy</a></li>
                   <li><a href="">Terms & Conditions</a></li>  
                   <li><a href="">Shipping</a></li>  
                   <li><a href="">Return Policy & Exchanges</a></li>                  
               </ul>
           </div>

       </div>
       
   </div>
 </footer>
 <div class="lastRow">
     <div class="container">
       <div class="row justify-content-between">
           <div class="col-12 col-sm-auto">
               &copy; Dustkar, All rights reserved. Powered by:<b>Dzone India</b>
           </div>
           <div class="col-12 col-sm-auto">
               <ul class="socialLinks">
                   <li><a href=""><img src="<?php echo e(asset('html/images/facebook.png')); ?>" alt=""></a></li>
                   <li><a href=""><img src="<?php echo e(asset('html/images/twitter.png')); ?>" alt=""></a></li>
                   <li><a href=""><img src="<?php echo e(asset('html/images/instagram.png')); ?>" alt=""></a></li>
                   <li><a href=""><img src="<?php echo e(asset('html/images/youtube.png')); ?>" alt=""></a></li>
                   <li><a href=""><img src="<?php echo e(asset('html/images/linkedin.png')); ?>" alt=""></a></li>
               </ul>
           </div>
       </div>
     </div>
 </div>
</div>
<div class="waIcon">
   <a href=""><img src="<?php echo e(asset('html/images/whatsapp.png')); ?>" alt=""></a>
</div>
<script src="<?php echo e(asset('html/js/app.js')); ?>"></script>
<script>
   document.addEventListener("DOMContentLoaded", function () {
       Fancybox.bind('[data-fancybox="gallery"]', {
 Image: {
   zoom: false,
 },

 fullscreen: {
   autoStart: true,
 },
});
   });
</script>
<!-- Js Plugins -->
    <script src="<?php echo e(asset('html/js/jquery-3.3.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('html/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('html/lib/wow/wow.min.js')); ?>"></script>
    <script src="<?php echo e(asset('html/js/jquery.nice-select.min.js')); ?>"></script>
    <script src="<?php echo e(asset('html/js/jquery.nicescroll.min.js')); ?>"></script>
    <script src="<?php echo e(asset('html/js/jquery.magnific-popup.min.js')); ?>"></script>
    <script src="<?php echo e(asset('html/js/jquery.countdown.min.js')); ?>"></script>
    <script src="<?php echo e(asset('html/js/jquery.slicknav.js')); ?>"></script>
    <script src="<?php echo e(asset('html/js/mixitup.min.js')); ?>"></script>
    <script src="<?php echo e(asset('html/js/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('html/js/main.js')); ?>"></script>
    <script src="<?php echo e(asset('html/lib/perfect-scrollbar/perfect-scrollbar.min.js')); ?>"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(".cookie-bar-section #js_understand").on("click", function() {
            $(".cookie-bar-section").toggleClass("hide");
        });

        const unique = (list) => {
            return [...new Set(list)];
        }

        const inArray = (needle, haystack) => {
            var length = haystack.length;
            for (var i = 0; i < length; i++) {
                if (haystack[i] == needle) return true;
            }
            return false;
        }
    </script>

    <script>
        $('.search-icon').click(function() {
            $('.search-wrapper').toggleClass('open');
            $('body').toggleClass('search-wrapper-open');
        });
        $('.search-cancel').click(function() {
            $('.search-wrapper').removeClass('open');
            $('body').removeClass('search-wrapper-open');
        });
    </script>
    <script>
        // Initiate the wowjs
        new WOW().init();
    </script>
    <script>
        $(".js-pscroll").each(function() {
            $(this).css("position", "relative");
            $(this).css("overflow", "hidden");
            var ps = new PerfectScrollbar(this, {
                wheelSpeed: 1,
                scrollingThreshold: 1000,
                wheelPropagation: false,
            });

            $(window).on("resize", function() {
                ps.update();
            });
        });
    </script>
    <script>
        var default_avatar =
            'https://d3rmug8w64gkex.cloudfront.net/media/catalog/product/cache/20e68cdecc310a480bda7999995ffa78/d/e/demo.jpg';

        function handleError(image) {
            image.src = default_avatar;
        }

        $(document).ready(function() {
            if (localStorage.getItem('IsModalShown').toString() != 'true') {
                $("#myModalsubscribe").modal('show');
                localStorage.setItem('IsModalShown', true);
            }

            $('[data-toggle="tooltip"]').tooltip();

            mark_fav();
        });

        $(document).on('click', '.toggle-whishlist', function(e) {

            let current_li = $(this);

            let src = current_li.find('img').attr('src');

            let heart = "<?php echo e(asset('html/img/icon/heart.png')); ?>";
            let heartfill = "<?php echo e(asset('html/img/icon/heartfill.png')); ?>";

            current_li.find('img').attr('src', src.includes('heartfill') ? heart : heartfill)

            let wishlist_array = JSON.parse(localStorage.getItem("wishlist")) ?? []

            let product_id = current_li.attr('data-product-id');
            if (inArray(product_id, wishlist_array)) {
                wishlist_array = wishlist_array.filter(item => item != product_id);
            } else {
                wishlist_array.push(parseInt(product_id));
            }

            wishlist_array = unique(wishlist_array)

            localStorage.setItem('wishlist', JSON.stringify(wishlist_array))

            console.log({
                wishlist_array
            });

        });

        function mark_fav() {

            let wishlist_array = JSON.parse(localStorage.getItem("wishlist")) ?? [];

            $(document).find('.toggle-whishlist').each(function() {

                let element = $(this);

                let heart = "<?php echo e(asset('html/img/icon/heart.png')); ?>";
                let heartfill = "<?php echo e(asset('html/img/icon/heartfill.png')); ?>";

                let product_id = element.attr('data-product-id');

                if (inArray(product_id, wishlist_array)) {
                    element.find('img').attr('src', heartfill);
                } else {
                    element.find('img').attr('src', heart);
                }



            });

        }

        function add_to_cart_items(product_id, qty_type, type, qty, view_type) {
            //  alert(product_id);
            var routeName = "<?php echo e(route('add_to_cart')); ?>";
            var token = "<?php echo e(csrf_token()); ?>";
            var size_id = $('.active_size').attr('size_id');
            var color_id = $('.active_color').attr('id');
            $.ajax({
                type: 'POST',
                url: routeName,
                data: {
                    product_id: product_id,
                    _token: token,
                    qty: qty,
                    size_id: size_id,
                    color_id: color_id,
                    type: type,
                    qty_type: qty_type
                },
                dataType: "text",
                success: function(resultData) {
                    resultData = JSON.parse(resultData);
                    console.log(resultData.status);

                    if (resultData.status == 'success') {
                        $('.shopping__cart__table').html(resultData.html);
                        $('.count').html(resultData.item_count);
                        //  $('.sub_total_price').html("$" + resultData.total_price);
                        $('.total_cart').html(resultData.total_price);
                        if(type == 'remove'){
                            title = 'Item Removed Successfully...';
                        }else{
                            title = 'Item Added Successfully...';
                        }
                        Swal.fire({
                            icon:'success',
                            title: title,
                            confirmButtonText: 'OK',
                        }).then((result) => {
                            console.log(view_type);
                            /* Read more about isConfirmed, isDenied below */
                            if (result.isConfirmed && view_type == 'main') {
                                window.location.reload()
                            }
                        })
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Failed',
                            text: 'Something went wrong try again later....'
                        })
                    }

                },
                error: function(error) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Failed',
                        text: 'Something went wrong',
                    })
                }
            });
        }
    </script>

    <script>
        $(document).ready(function() {
            $('#loginform').submit(function(e) {
                e.preventDefault();
                // start_loader();
                var isValid = true;
                if ($('#InputEmail1').val().trim() == '') {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Notice',
                        text: 'Username is Required',
                        footer: '<a href="">Why do I have this issue?</a>'
                    })
                    isValid = false;
                }
                if ($('#InputPassword1').val().trim() == '') {
                    isValid = false;
                    Swal.fire({
                        icon: 'warning',
                        title: 'Notice',
                        text: 'Password is Required',
                        footer: '<a href="">Why do I have this issue?</a>'
                    })
                }
                if (isValid) {
                    var formData = new FormData($("#loginform")[0]);
                    let _token = '<?php echo e(csrf_token()); ?>';
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': _token
                        }
                    });
                    $.ajax({
                        url: "<?php echo e(url('/checklogin')); ?>",
                        type: "POST",
                        data: formData,
                        dataType: "JSON",
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function(data) {
                            // console.log(data)
                            // stop_loader();
                            if (data.status == 'success') {
                                Swal.fire({
                                    title: 'Success',
                                    icon: 'success',
                                    text: 'Successfully Login',
                                    showDenyButton: false,
                                    showCancelButton: false,
                                    confirmButtonText: 'ok',

                                }).then((result) => {
                                    /* Read more about isConfirmed, isDenied below */
                                    if (result.isConfirmed) {
                                        window.location = data.redirect;
                                    }
                                })
                            } else if (data.status == 'fail') {
                                $('input[name=username]').css('border', '2px solid red');
                                $('input[name=password]').css('border', '2px solid red');
                                swal.fire({
                                    title: "Notice",
                                    text: data.msg,
                                    type: "warning",
                                    showCancelButton: false,
                                    confirmButtonColor: "#DD6B55",
                                    confirmButtonText: "Ok",
                                    cancelButtonText: false,
                                    closeOnConfirm: false,
                                    closeOnCancel: false,
                                    dangerMode: true,
                                });
                            } else {
                                Swal.fire({
                                    title: 'Error!',
                                    text: 'Something went wrong',
                                    icon: 'error',
                                    confirmButtonText: 'Cool'
                                })

                            }


                        },
                        error: function() {
                            // window.location.reload();
                        }

                    });
                    return false;
                }
                // your code here
            });
        })
    </script>
    <?php echo $__env->yieldPushContent('script'); ?>
</body>
</html><?php /**PATH /home/daylist/public_html/resources/views/new-frontend/layout/app.blade.php ENDPATH**/ ?>