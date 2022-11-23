<table>
    <tbody>
        @foreach ($product_arr as $val)
            <tr>
                <td class="product__cart__item">
                    <div class="product__cart__item__pic">
                        <img onerror="handleError(this);"src="{{ asset('file/'.$val['image']) }}"
                            alt="" />
                    </div>
                    <div class="product__cart__item__text">
                        <h6>{{$val['name']}}</h6>
                        <h5>₹{{ $val['price'] }}</h5>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

