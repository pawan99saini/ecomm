<?php $__env->startSection('content'); ?>
    <section class="section section-hero p-0">
        <div class="swiper-container hero-slider">
            <div class="swiper-wrapper">
                <?php if(@isset($banners) && !empty($banners)): ?>
                    <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="swiper-slide">
                            <div class="heroImgWrapper">
                                <img src="<?php echo e(asset('file')); ?>/<?php echo e($val->image); ?>" alt="">
                            </div>
                            <div class="hero-content animTop">
                                <div class="container">
                                    <div class="row justify-content-end">
                                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                                            <?php if(!empty($val->description)): ?>
                                                <h2><?php echo e($val->description); ?></h2>
                                            <?php endif; ?>
                                            <?php if(!empty($val->url)): ?>
                                                <a href="<?php echo e($val->url); ?>" class="shopnow">Shop Now &nbsp;</a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <section class="section section-featured cslide animTop">
        <div class="container-fluid">
            <h2 class="sectionTitle">Shop by Category</h2>
            <div class="row justify-content-center animTop">
                <div class="col-12 text-center">
                    <div class="swiper-container cproducts-slider">
                        <div class="swiper-wrapper">
                            <?php if(!empty($home_cat)): ?>
                                <?php $__currentLoopData = $home_cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="swiper-slide">
                                        <a href="javascript:void(0);" class="fpBox">
                                            <div class="imgBox">
                                                <img src="<?php echo e(asset('file')); ?>/<?php echo e($val->image); ?>" alt="">
                                            </div>
                                            <h3><?php echo e($val->name); ?></h3>
                                        </a>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </div>
                        <!-- <div class="swiper-pagination"></div> -->
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-featured fslide animTop pt-0">
        <div class="container-fluid">
            <h2 class="sectionTitle">Featured Collection</h2>
            <div class="row justify-content-center animTop">
                <div class="col-12 text-center">
                    <div class="swiper-container fproducts-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <?php if(!empty($lproducts)): ?>
                                    <?php $__currentLoopData = $lproducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <a href="javascript:void(0);" class="fpBox">
                                            <div class="imgBox">
                                                <?php if(!empty($val->productProductImages[0])): ?>
                                                    <img src="<?php echo e(asset('file')); ?>/<?php echo e($val->productProductImages[0]->file_name); ?>"
                                                        alt="">
                                                <?php endif; ?>
                                            </div>
                                            <h3><?php echo e($val->name); ?></h3>

                                        </a>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </div>
                        <!-- <div class="swiper-pagination"></div> -->
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-occasion animTop">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-lg-4">
                <img src="<?php echo e(asset('html/images/pro6.jpg')); ?>" class="w-100" alt="">
            </div>
            <div class="col-12 col-lg-4 text-center text-white">
                <h2>Party of Prints</h2>
                <h6>Festive ensembles that feature an abundance of prints, patterns, and colour for the season’s vibrant
                    celebrations</h6>
                <a href="#/" class="shopnow">Shop Occasionwear &nbsp;</a>
            </div>
            <div class="col-12 col-lg-4">
                <img src="<?php echo e(asset('html/images/pro8.jpg')); ?>" class="w-100" alt="">
            </div>
        </div>
    </section>

    <section class="section section-featured dslide animTop">
        <div class="container-fluid">
            <h2 class="sectionTitle">Deals of the Day</h2>
            <div class="row justify-content-center animTop">
                <div class="col-12 text-center">
                    <div class="swiper-container dproducts-slider">
                        <div class="swiper-wrapper">
                            <?php if(!empty($home_cat)): ?>
                                <?php $__currentLoopData = $home_cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="swiper-slide">
                                            <a href="javascript:void(0);" class="fpBox">
                                                <div class="imgBox">
                                                    <img src="<?php echo e(asset('file')); ?>/<?php echo e($val->image); ?>" alt="">
                                                </div>
                                                <h3><?php echo e($val->name); ?></h3>
                                            </a>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                        </div>
                        <!-- <div class="swiper-pagination"></div> -->
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-crafts">
        <div class="container position-relative animTop">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="sectionTitle">Dustkar CRAFTS</h2>
                </div>
                <div class="col-12 mt-4">
                    <div class="row">
                        <?php if($block): ?>
                            <?php $__currentLoopData = $block; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-12 col-md-4">
                                <img src="<?php echo e(asset('file')); ?>/<?php echo e($val->image); ?>" class="w-100" alt="">
                                <h3><?php echo e($val->title); ?></h3>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="section section-newsletter">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-md-auto">
                    <h4>Sign Up for Email</h4>
                </div>
                <div class="col-12 col-md-5">
                    <form action="">
                        <div class="row g-0 bg-white p-1">
                            <div class="col"><input type="text" class="form-control w-100"
                                    style="border:0 !important;" placeholder="Enter your email"></div>
                            <div class="col-auto"><button class="btn btn-outlined btn-primary">Subscribe</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest Blog Section End -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('new-frontend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/daylist/public_html/resources/views/new-frontend/home/index.blade.php ENDPATH**/ ?>