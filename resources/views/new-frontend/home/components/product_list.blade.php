@foreach ($products as $product)
    <?php
    
    $primary = 0;
    if (count($product->productProductVariations) <= 0) {
        continue;
    }
    ?>
    <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="product__item">
            <div class="product__item__pic set-bg">
                <a href="/product/{{ $product->slug }}">
                    @foreach ($product->productProductImages as $key => $productImage)
                        @if ($key == 0)
                            <img onerror="handleError(this);"src="{{ asset('file') . '/' . $productImage->file_name }}" />
                        @endif
                    @endforeach
                </a>
                {{-- <span class="label">New</span> --}}
                <ul class="product__hover">
                    <li class="toggle-whishlist" data-product-id="{{ $product->id }}">
                        {{-- <a href="#"> --}}
                        <img onerror="handleError(this);" src="{{ asset('html/img/icon/heart.png') }}"
                            alt="" /><span>Wishlist</span>
                        {{-- </a> --}}
                    </li>
                    <li class="add-cart add_to_cart_btn" product_id="{{ $product->id }}">
                        <img onerror="handleError(this);" src="{{ asset('html/img/icon/cart.png') }}" alt="" />
                        <span>Cart</span>
                    </li>
                </ul>
                <ul class="product__hover__details">
                    <li>
                        <a href="/product/{{ $product->slug }}"><span>View Details</span></a>
                    </li>
                </ul>
            </div>

            <div class="product__item__text">
                <a title="{{ $product['name'] }}" href="/product/{{ $product->slug }}">
                    <h6>{{ substr($product['name'], 0, 35) }}...</h6>
                </a>

                @foreach ($product->productProductVariations as $productVariation)
                    @if ($productVariation->primary_variation == 1 &&
                        $productVariation->status == 1 &&
                        $productVariation->size_status == 1 &&
                        $primary == 0)
                        <?php $primary = 1; ?>
                        <h5 style="margin: ">₹ {{ $productVariation->single_sales_price }}
                        </h5>
                    @endif
                @endforeach

                <div class="product__color__select">
                    @foreach ($product->productProductVariations as $key => $productVariation)
                        @if ($key < 5)
                            <label for="pc-1">
                                <a title="{{ $productVariation->size->name }}"
                                    href="javascript:void(0)">{{ $productVariation->size->name }}</a>
                            </label>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endforeach
