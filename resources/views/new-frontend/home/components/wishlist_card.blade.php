@forelse ($products as $product)
    <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="product__item">
            <div class="product__item__pic set-bg">
               <a href="/product/{{$product->slug}}">
                        @foreach ($product->productProductImages as $key => $productImage)
                            @if ($key == 0)
                                <img onerror="handleError(this);" src="{{ asset('file') . '/' . $productImage->file_name }}" />
                            @endif
                        @endforeach
                </a>
                <span class="label">New</span>
                <ul class="product__hover">
                    <li class="toggle-whishlist" data-product-id="{{ $product->id }}">
                        <img onerror="handleError(this);"src="{{ asset('html/img/icon/heartfill.png') }}" alt="" /><span>Wishlist</span>
                    </li>
                    <li>
                        <a class="add-cart" href="#"><img onerror="handleError(this);"src="{{ asset('html/img/icon/cart.png') }}"
                                alt="" />
                            <span>Cart</span></a>
                    </li>
                </ul>
                <ul class="product__hover__details">
                    <li>
                        <a href="#"><span>View Details</span></a>
                    </li>
                </ul>
            </div>

            <div class="product__item__text">
                <a href="javascript:void(0)">
                    <h6>{{ $product->name }}</h6>
                </a>
                @php
                    $primary = 0;
                @endphp
                @foreach ($product->productProductVariations as $productVariation)
                    @if ($productVariation->primary_variation == 1 &&
                        $productVariation->status == 1 &&
                        $productVariation->size_status == 1 &&
                        $primary == 0)
                        <?php $primary = 1; ?>
                        <h5>₹ {{ $productVariation->single_sales_price }}</h5>
                    @endif
                @endforeach
                {{-- <h5>₹ 0.00</h5> --}}

                <div class="product__color__select">
                    <label for="pc-1">
                        <a title="M" href="javascript:void(0)">XS</a>
                    </label>
                    <label class="active black" for="pc-2">
                        <a title="M" href="javascript:void(0)">M</a>
                    </label>
                    <label class="grey" for="pc-3">
                        <a title="M" href="javascript:void(0)">L</a>
                    </label>
                </div>
            </div>
        </div>
    </div>
@empty

    <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
        <h2>No Product found in wishlist</h2>
    </div>

@endforelse
