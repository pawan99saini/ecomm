@foreach($product_arr as $val)
    <tr>
        <td class="product__cart__item">
            <div class="product__cart__item__pic">
                <img onerror="handleError(this);"src="{{ asset('file/'.$val['image']) }}"
                            alt="" />
            </div>
            <div class="product__cart__item__text">
                <h6>{{ $val['name'] }}</h6>
                <h5>₹{{ $val['price'] }}</h5>
            </div>
        </td>
        <td class="quantity__item">
            <div class="quantity">
                <div class="pro-qty-2">
                    <input type="text" value="{{ $val['qty'] ?? 1 }}" readonly="readonly">
                </div>
            </div>
        </td>
        <td class="cart__price">₹ {{ number_format(($val['price'] * $val['qty']),2) }}</td>
        <td class="cart__close remove_fron_cart_btn" product_id="{{ $val['product_id'] }}"><i class="fa fa-close"></i></td>
    </tr>
@endforeach
