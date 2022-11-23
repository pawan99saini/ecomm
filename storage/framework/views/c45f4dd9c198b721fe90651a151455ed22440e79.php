<ul class="checkout__total__products">
    <?php  $counter = 1; ?>
    <?php $__currentLoopData = $product_arr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li><?php echo e($counter); ?>. <?php echo e($val['name'] ?? ''); ?> <span>₹ <?php echo e($val['price'] ?? ''); ?></span></li>
    <?php  $counter++; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php /**PATH C:\wamp64\www\ecomm\resources\views/new-frontend/home/components/checkout_order.blade.php ENDPATH**/ ?>