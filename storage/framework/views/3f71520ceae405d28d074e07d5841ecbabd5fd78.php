<form id="checkout-form" action="<?php echo e(route('razorpay.payment.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <input type="hidden" name="booking_id" value="" id="booking_id">
    <script src="https://checkout.razorpay.com/v1/checkout.js" data-key="<?php echo e(env('RAZORPAY_KEY')); ?>"
        data-amount="<?php echo e((float) $value * 100); ?>" data-buttontext="Place Order" data-name="<?php echo e($_SERVER['SERVER_NAME']); ?>"
        data-description="Vanaika" data-image="https://www.yiiframework.com/image/design/logo/yii3_sign.png"
        data-prefill.name="name" data-prefill.email="email" data-theme.color="#7367F0"></script>
</form>
<?php /**PATH C:\wamp64\www\ecomm\resources\views/new-frontend/home/components/razor.blade.php ENDPATH**/ ?>