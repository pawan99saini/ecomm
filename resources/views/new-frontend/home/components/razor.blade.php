<form id="checkout-form" action="{{ route('razorpay.payment.store') }}" method="POST">
    @csrf
    <input type="hidden" name="booking_id" value="" id="booking_id">
    <script src="https://checkout.razorpay.com/v1/checkout.js" data-key="{{ env('RAZORPAY_KEY') }}"
        data-amount="{{ (float) $value * 100 }}" data-buttontext="Place Order" data-name="{{ $_SERVER['SERVER_NAME'] }}"
        data-description="Vanaika" data-image="https://www.yiiframework.com/image/design/logo/yii3_sign.png"
        data-prefill.name="name" data-prefill.email="email" data-theme.color="#7367F0"></script>
</form>
