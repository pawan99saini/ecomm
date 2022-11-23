<?php $__currentLoopData = $product_arr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td class="product__cart__item">
            <div class="product__cart__item__pic">
                <img onerror="handleError(this);"src="<?php echo e(asset('file/'.$val['image'])); ?>"
                            alt="" />
            </div>
            <div class="product__cart__item__text">
                <h6><?php echo e($val['name']); ?></h6>
                <h5>₹<?php echo e($val['price']); ?></h5>
            </div>
        </td>
        <td class="quantity__item">
            <div class="quantity">
                <div class="pro-qty-2">
                    <input type="text" value="<?php echo e($val['qty'] ?? 1); ?>" readonly="readonly">
                </div>
            </div>
        </td>
        <td class="cart__price">₹ <?php echo e(number_format(($val['price'] * $val['qty']),2)); ?></td>
        <td class="cart__close remove_fron_cart_btn" product_id="<?php echo e($val['product_id']); ?>"><i class="fa fa-close"></i></td>
    </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\wamp64\www\ecomm\resources\views/new-frontend/home/components/main_cart_items.blade.php ENDPATH**/ ?>