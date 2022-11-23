<?php $__env->startSection('content'); ?>
<section class="sticky-header-next-sec create-account-section mt-10">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-7 mx-auto">
                    <div class="create-account-outer-wrapper">
                        <div class="create-account-inner-wrapper">
                            <div class="col-sm-12 col-md-8 ca-header mx-auto">
                                <div class="ca-main-heading">
                                    <h2>Create an Account</h2>
                                </div>
                                <div class="ca-desc">
                                    <p>With a Tiffany.com account, you can save time during checkout, access your
                                        shopping bag from any device and view your order history.</p>
                                </div>
                                <div class="ca-have-account">
                                    <span>Have a Tiffany account?</span><a
                                        class="underline-lite-on-hover position-relative" href="Login.html">Sign In <i
                                            class="arrow"></i></a>
                                </div>
                            </div>
                            <form action="<?php echo e(route('frontview.register')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="ca-form-wrapper">
                                <div class="col-sm-12 col-md-8 ca-form mx-auto p-0">
                                    <input class="ca-input" name="name" type="text" value="<?php echo e(old('name')); ?>" placeholder="">
                                    <label>Full Name</label>
                                    <span class="focus-border"></span>
                                    <?php if($errors->has('name')): ?>
                                                <div class="text-danger fs-7 fw-bold">
                                                    <?php echo e($errors->first('name')); ?></div>
                                            <?php endif; ?>
                                </div>
                                
                                <div class="col-sm-12 col-md-8 ca-form mx-auto p-0">
                                    <input class="ca-input" name="mobile" value="<?php echo e(old('mobile')); ?>" type="text" placeholder="">
                                    <label>Mobile</label>
                                    <span class="focus-border"></span>
                                    <?php if($errors->has('mobile')): ?>
                                                <div class="text-danger fs-7 fw-bold">
                                                    <?php echo e($errors->first('mobile')); ?></div>
                                            <?php endif; ?>
                                </div>
                                
                                <div class="col-sm-12 col-md-8 ca-form mx-auto p-0">
                                    <input class="ca-input" name="email" type="email" value="<?php echo e(old('email')); ?>" placeholder="">
                                    <label>Email</label>
                                    <span class="focus-border"></span>
                                    <?php if($errors->has('email')): ?>
                                                <div class="text-danger fs-7 fw-bold">
                                                    <?php echo e($errors->first('email')); ?></div>
                                            <?php endif; ?>
                                </div>
                                
                                <div class="col-sm-12 col-md-8 ca-form mx-auto p-0">
                                    <input class="ca-input" type="text" placeholder="">
                                    <label>referral Code</label>
                                    <span class="focus-border"></span>
                                </div>
                                <div class="col-sm-12 col-md-8 ca-form mx-auto p-0">
                                    <input class="ca-input" name="password" type="password" value="<?php echo e(old('password')); ?>" placeholder="">
                                    <label>Password</label>
                                    <span class="focus-border"></span>
                                    <?php if($errors->has('password')): ?>
                                                <div class="text-danger fs-7 fw-bold">
                                                    <?php echo e($errors->first('password')); ?></div>
                                            <?php endif; ?>
                                </div>
                                
                                <div class="col-sm-12 col-md-8 ca-form mx-auto p-0">
                                    <input class="ca-input" name="cpassword" type="password" value="<?php echo e(old('cpassword')); ?>" placeholder="">
                                    <label>Confirm Password</label>
                                    <span class="focus-border"></span>
                                    <?php if($errors->has('cpassword')): ?>
                                                <div class="text-danger fs-7 fw-bold">
                                                    <?php echo e($errors->first('cpassword')); ?></div>
                                            <?php endif; ?>
                                </div>
                                
                                <div class="col-sm-12 col-md-8 mx-auto ca-term-and-condition">
                                    <div>
                                        <div class="ca-form-group">
                                            <input type="checkbox" id="t&c">
                                            <label class="ca-term-desc" for="t&c">I want to receive exclusive news and
                                                offers *</label>
                                        </div>
                                        <div class="ca-button ca-form-group mt-2">
                                            <label class="ca-term-desc" for="terms"></label>
                                            <input type="checkbox" name="terms" class="ca-btn">Accept
                                                Terms and Conditions
                                                <?php if($errors->has('terms')): ?>
                                                <div class="text-danger fs-7 fw-bold">
                                                    <?php echo e($errors->first('terms')); ?></div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-8 mx-auto p-0">
                                    <div class="group button-group">
                                        <button type="submit" class="">
                                            <span>Sign in</span>
                                        </button>
                                    </div>
                                </div>
</form>
                                <div class="col-sm-12 col-md-8 mx-auto p-0">
                                    <div class="line-seperator-container mb-4">
                                        <div></div>
                                        <div class="fw-3">or continue with</div>
                                        <div></div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-8 px-0 text-center row mx-auto mt-4">
                                    <div class="col-6 px-0">
                                        <a href="https://www.faridagupta.com/login/google"
                                            class="btn btn-primary google-login-btn mr-1"><img
                                                src="https://cdns.faridagupta.com/nrs/img/extraImages/google_logo1600.png"
                                                width="30px" style="margin-right: 15px;">
                                            Google
                                        </a>
                                    </div>
                                    <div class="col-6 px-0">
                                        <a href="https://www.faridagupta.com/login/facebook"
                                            class="btn btn-primary facebook-login-btn ml-1"><img
                                                src="https://cdns.faridagupta.com/nrs/img/extraImages/fb-art.png"
                                                width="28px" style="margin-right: 20px;">
                                            Facebook
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('new-frontend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\ecomm\resources\views/new-frontend/auth/register.blade.php ENDPATH**/ ?>