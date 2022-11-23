<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('front/css/Checkout.css')); ?>" />

  <!-- Checkout Main Section Start -->

      <section class="sticky-header-next-sec checkout-section-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-11 mx-auto row column-reverse">
                    <div class="col-sm-12 col-md-12 col-lg-7">
                        <form>
                            <div class="checkout-section">
                                <fieldset>
                                    <legend class="checkout-title under-title position-relative">Email address</legend>
                                    <div class="checkout-content">
                                        <div class="checkout-content-label">
                                            <p>Already have an account?<a href="Login.html" target="_blank"> Sign in</a></p>                                            
                                            <p>Don't have an account?<a href="SignUp.html" target="_blank"> Register</a></p>                                            
                                        </div>
                                        <div class="col-10 login-form p-0">
                                            <input class="sign-input" type="email" placeholder="">
                                            <label>Email</label>
                                            <span class="focus-border"></span>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="checkout-section delivery-details">
                                <fieldset>
                                    <legend class="checkout-title under-title position-relative">Delivery Details</legend>
                                    <div class="checkout-content">                                        
                                        <div class="col-10 login-form p-0">
                                            <input id="input" class="sign-input" type="text" placeholder="">
                                            <label>First name<span class="mandatory">*</span></label>
                                            <span class="focus-border"></span>
                                        </div>
                                        <div class="col-10 login-form p-0">
                                            <input class="sign-input" type="text" placeholder="">
                                            <label>Last name<span class="mandatory">*</span></label>
                                            <span class="focus-border"></span>
                                        </div>
                                        <div class="col-10 login-form p-0">
                                            <input class="sign-input" type="text" placeholder="">
                                            <label>Telephone<span class="mandatory">*</span></label>
                                            <span class="focus-border"></span>
                                        </div> 
                                        <div class="col-10 login-form p-0">
                                            <input class="sign-input" type="text" placeholder="">
                                            <label>Company</label>
                                            <span class="focus-border"></span>
                                        </div>  
                                        <div class="col-10 login-form p-0">
                                            <input class="sign-input" type="text" placeholder="">
                                            <label>Line 1<span class="mandatory">*</span></label>
                                            <span class="focus-border"></span>
                                        </div>  
                                        <div class="col-10 login-form p-0">
                                            <input class="sign-input" type="text" placeholder="">
                                            <label>Line 2</label>
                                            <span class="focus-border"></span>
                                        </div>  
                                        <div class="col-10 login-form p-0">
                                            <input class="sign-input" type="text" placeholder="">
                                            <label>Town<span class="mandatory">*</span></label>
                                            <span class="focus-border"></span>
                                        </div>  
                                        <div class="col-10 login-form p-0">
                                            <input class="sign-input" type="text" placeholder="">
                                            <label>Country<span class="mandatory">*</span></label>
                                            <span class="focus-border"></span>
                                        </div>  
                                        <div class="col-5 login-form p-0">
                                            <input class="sign-input" type="text" placeholder="">
                                            <label>Postcode<span class="mandatory">*</span></label>
                                            <span class="focus-border"></span>
                                        </div>                                        
                                    </div>
                                    
                                </fieldset>                                
                            </div>
                            <div class="checkout-section billing-section delivery-details">
                                <fieldset>
                                    
                                    <legend class="checkout-title">Billing address</legend>
                                    <div class="ca-form-group">
                                        <input type="checkbox" id="chkBillingAdd" onclick="ShowHideDiv(this)" checked>
                                        <label class="ca-term-desc" for="chkBillingAdd">Use delivery address as billing address</label>
                                    </div>
                                    
                                    <div id="billingAddress" style="display: none" class="checkout-content">                                       
                                        <div class="checkout-content">                                        
                                            <div class="col-10 login-form p-0">
                                                <input id="input" class="sign-input" type="text" placeholder="">
                                                <label>First name<span class="mandatory">*</span></label>
                                                <span class="focus-border"></span>
                                            </div>
                                            <div class="col-10 login-form p-0">
                                                <input class="sign-input" type="text" placeholder="">
                                                <label>Last name<span class="mandatory">*</span></label>
                                                <span class="focus-border"></span>
                                            </div>
                                            <div class="col-10 login-form p-0">
                                                <input class="sign-input" type="text" placeholder="">
                                                <label>Telephone<span class="mandatory">*</span></label>
                                                <span class="focus-border"></span>
                                            </div> 
                                            <div class="col-10 login-form p-0">
                                                <input class="sign-input" type="text" placeholder="">
                                                <label>Company</label>
                                                <span class="focus-border"></span>
                                            </div>  
                                            <div class="col-10 login-form p-0">
                                                <input class="sign-input" type="text" placeholder="">
                                                <label>Line 1<span class="mandatory">*</span></label>
                                                <span class="focus-border"></span>
                                            </div>  
                                            <div class="col-10 login-form p-0">
                                                <input class="sign-input" type="text" placeholder="">
                                                <label>Line 2</label>
                                                <span class="focus-border"></span>
                                            </div>  
                                            <div class="col-10 login-form p-0">
                                                <input class="sign-input" type="text" placeholder="">
                                                <label>Town<span class="mandatory">*</span></label>
                                                <span class="focus-border"></span>
                                            </div>  
                                            <div class="col-10 login-form p-0">
                                                <input class="sign-input" type="text" placeholder="">
                                                <label>Country<span class="mandatory">*</span></label>
                                                <span class="focus-border"></span>
                                            </div>  
                                            <div class="col-5 login-form p-0">
                                                <input class="sign-input" type="text" placeholder="">
                                                <label>Postcode<span class="mandatory">*</span></label>
                                                <span class="focus-border"></span>
                                            </div>                                        
                                        </div>
                                    </div>

                                    <div class="gift-wrap-order col-10">
                                        <p>If you are buying this as a gift and would like to include a message, please write it here:</p>
                                        <form>
                                            <textarea class="Gifting-instruction" cols="6" rows="8"></textarea>
                                        </form>
                                    </div>
                                    <div class="checkout-footer">
                                        <div class="mt-3">
                                            <a href="#">
                                                <button class="btn place-order-btn" type="button" id="button-addon2">Place Your Order</button>
                                            </a>
                                        </div>
                                        <div class="checkout-footer-desc">
                                            <p>By placing an order you agree to our Terms & Conditions, Privacy policy and Returns policy.</p>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            
                        </form>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-5">
                        <div class="checkout-sidebar-wrapper">
                            <div class="checkout-sidebar-header d-flex justify-content-between">
                                <h2 class="checkout-total">1 Item</h2>
                                <a class="checkout-edit-product" href="Cart.html" target="_blank">Edit Basket</a>
                            </div>
                            <div class="checkout-sidebar-items">
                                <div class="checkout-item">
                                    <div class="checkout-item-image">
                                        <img src="https://assets.cassandragoad.com/images/product_small/67666-scrabble-letter-9yg-a.jpg" />
                                    </div>
                                    <div class="checkout-item-title">Scrabbled Letter Gold Initial Pendant</div>
                                    <div class="checkout-item-details d-flex justify-content-between">
                                        <div>£579.17</div>
                                        <div>Qty: 1</div>
                                    </div>
                                </div>
                                <div class="checkout-item">
                                    <div class="checkout-item-image">
                                        <img src="https://assets.cassandragoad.com/images/product_small/67666-scrabble-letter-9yg-a.jpg" />
                                    </div>
                                    <div class="checkout-item-title">Scrabbled Letter Gold Initial Pendant</div>
                                    <div class="checkout-item-details d-flex justify-content-between">
                                        <div>£579.17</div>
                                        <div>Qty: 1</div>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout-sidebar-totals">
                                <div class="d-flex justify-content-between">
                                    <span>Subtotal</span>
                                    <span>£579.17</span>
                                </div>                               
                                <div class="d-flex justify-content-between">
                                    <span>Discount</span>
                                    <span>£9.01</span>
                                </div>                               
                                <div class="d-flex justify-content-between">
                                    <span>GST</span>
                                    <span>£579.17</span>
                                </div>                               
                                <div class="d-flex justify-content-between">
                                    <span>Total including delivery</span>
                                    <span>£644.17</span>
                                </div>                               
                            </div>
                        </div>                      
                    </div>
                </div>                
            </div>
        </div>
      </section>

    <!-- Checkout Main Section End -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('new-frontend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\ecomm\resources\views/new-frontend/home/checkout.blade.php ENDPATH**/ ?>