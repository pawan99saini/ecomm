<ul class="checkout__total__products">
    @php  $counter = 1; @endphp
    @foreach ($product_arr as $val)
    <li>{{$counter}}. {{$val['name'] ?? ''}} <span>₹ {{$val['price'] ?? ''}}</span></li>
    @php  $counter++; @endphp
    @endforeach
</ul>
