<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('front/css/Cart.css')); ?>" />

    <section class="sticky-header-next-sec basket-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8">
                    <div class="basket-product-wrapper">
                        <h2 class="bkt-title under-title position-relative">Your Basket</h2>
                        <div class="basket-row basket-row-header d-flex">
                            <div class="basket-row-product">Product</div>
                            <div class="basket-row-price">Price</div>
                            <div class="basket-row-qty">Quantity</div>
                        </div>
                        <div class="basket-row d-flex">
                            <div class="basket-row-image">
                                <img src="https://assets.cassandragoad.com/images/product_small/105210-02-08-082-375-49-15-00.jpg" />
                            </div>
                            <div class="basket-row-product basket-details">
                                <a href="#">Talya Smoky Quartz Gold Earring Drops and Astrea Hoops</a>
                            </div>
                            <div class="basket-row-price">£1,041.67</div>
                            <div class="basket-row-qty d-flex justify-content-end"> <form id='myform' method='POST' class='quantity' action='#'>
                                <input type='button' value='-' class='qtyminus minus' field='quantity' placeholder="-"/>
                                <input type='text' name='quantity' value='0' class='qty' />
                                <input type='button' value='+' class='qtyplus plus' field='quantity' placeholder="+"/>
                              </form></div>
                        </div>
                    </div>
                    <div class="product-callouts-wrapper d-flex">
                        <div class="delivery">
                            <div class="product-callout-title under-title position-relative">Delivery</div>
                            <div class="product-callout-body">Order by 1pm Monday to Friday for next day delivery.  Please note that orders placed on Friday, Saturday and Sunday will be sent the next working day</div>
                            <a href="#" class="product-callout-link underline-lite-on-hover position-relative">Find out more</a>
                        </div>
                        <div class="returns">
                            <div class="product-callout-title under-title position-relative">Returns</div>
                            <div class="product-callout-body">You may return saleable items within 7 days of purchase accompanied with a returns notification</div>
                            <a href="#" class="product-callout-link underline-lite-on-hover position-relative">Find out more</a>
                        </div>
                        <div class="security">
                            <div class="product-callout-title under-title position-relative">Security</div>
                            <div class="product-callout-body">Our online payment processing is completely secure and endorsed with Symantec SSL certificates</div>                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="basket-product-summary-wrapper">
                        <div class="basket-product-summary-header">
                            <h2>Summary</h2>
                            <div class="apply-coupon-header">
                                <span>Apply Your Coupon Here</span>
                            </div>
                            <div class="input-group apply-coupon-form">                                
                                <input type="text" class="form-control" placeholder="Coupon Code" aria-label="Recipient's username" aria-describedby="button-addon2">
                                <div class="input-group-append">
                                  <button class="btn apply-coupon-btn" type="button" id="button-addon2">Apply</button>
                                </div>
                              </div>
                        </div>
                        <div class="basket-product-summary-price">
                            <div class="d-flex justify-content-between">
                                <span class="summary-price-label">Total including delivery</span>
                                <span class="summary-price">£1,041.67</span>
                            </div>
                            <div class="mt-3">
                                <a href="Checkout.html">
                                    <button class="btn goto-checkout-btn" type="button" id="button-addon2">Checkout</button>
                                </a>
                            </div>
                        </div>
                        <div class="basket-product-secure-payment">
                            <span class="basket-product-secure-payment-label">We accept</span>
                            <div class="payment-getway-icons mt-2">
                                <span class="visa"><img src="<?php echo e(asset('front/images/payment-icons/visa.png')); ?>" /></span>
                                <span class="master"><img src="<?php echo e(asset('front/images/payment-icons/master-card.png')); ?>" /></span>
                                <span class="paypal"><img src="<?php echo e(asset('front/images/payment-icons/pay-pal.png')); ?>" /></span>
                            </div>
                        </div>
                    </div>
                    <div class="secure-statement">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="86" viewBox="0 0 68 86" fill="#42843e" stroke="#42843e">
                                <path d="M66.492 15.262C66.489 15.211 66.484 15.161 66.477 15.111C66.469 15.062 66.46 15.014 66.448 14.967C66.436 14.92 66.422 14.873 66.405 14.828C66.388 14.782 66.37 14.737 66.348 14.693C66.327 14.65 66.305 14.609 66.28 14.569C66.255 14.527 66.228 14.487 66.199 14.448C66.17 14.41 66.14 14.373 66.108 14.338C66.076 14.303 66.043 14.269 66.008 14.237C65.972 14.204 65.935 14.173 65.895 14.144C65.857 14.116 65.819 14.089 65.778 14.065C65.736 14.039 65.693 14.016 65.649 13.995C65.605 13.974 65.561 13.955 65.515 13.938C65.469 13.921 65.423 13.907 65.375 13.895C65.326 13.882 65.276 13.872 65.225 13.864C65.199 13.86 65.175 13.851 65.149 13.849C53.233 12.657 43.914 10.234 34.288 1.85395C33.663 1.30995 32.714 1.37595 32.172 1.99995C32.137 2.03995 32.111 2.08495 32.081 2.12795C22.401 10.48 14.317 12.703 2.851 13.848C2.084 13.925 1.5 14.57 1.5 15.341V50.472C1.5 50.605 1.518 50.737 1.553 50.865C7.636 73.299 32.169 83.957 33.21 84.4C33.398 84.48 33.598 84.52 33.797 84.52C33.994 84.52 34.193 84.481 34.378 84.403C35.432 83.961 60.246 73.304 66.329 50.866C66.35 50.787 66.366 50.707 66.374 50.625L66.492 49.464C66.497 49.414 66.5 49.363 66.5 49.312V15.342C66.5 15.313 66.494 15.288 66.492 15.262ZM63.402 50.195C58.152 69.294 37.55 79.63 33.8 81.371C30.083 79.625 9.78 69.312 4.499 50.268V16.69C15.368 15.487 23.798 12.996 33.352 4.97595C42.82 12.829 52.344 15.45 63.499 16.685V49.234L63.402 50.195Z" fill="#42843e" stroke="#42843e" stroke-width="0px"/>
                                <path d="M48 33.8404H46.56C45.768 27.1974 40.061 22.0254 33.151 22.0254C26.241 22.0254 20.534 27.1974 19.743 33.8404H18.001C17.173 33.8404 16.501 34.5114 16.501 35.3404V57.3404C16.501 58.1694 17.173 58.8404 18.001 58.8404H48.001C48.829 58.8404 49.501 58.1694 49.501 57.3404V35.3404C49.5 34.5114 48.828 33.8404 48 33.8404ZM33.15 25.0254C38.402 25.0254 42.754 28.8574 43.527 33.8404H22.773C23.547 28.8574 27.898 25.0254 33.15 25.0254ZM46.5 36.8404V55.8404H19.5V36.8404H46.5Z" fill="#42843e" stroke="#42843e" stroke-width="0px"/>
                                </svg>
                        </span>
                        <p>Our online payment processing is completely secure and endorsed with Symantec SSL certificates.
                        </p>
                    </div>
                </div>
            </div>
           
        </div>
      </section>

    <!-- Cart Main Section End -->

<?php $__env->stopSection(); ?>


<?php echo $__env->make('new-frontend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\ecomm\resources\views/new-frontend/home/shopping_cart.blade.php ENDPATH**/ ?>