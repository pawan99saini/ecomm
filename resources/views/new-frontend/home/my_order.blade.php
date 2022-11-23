@extends('new-frontend.layout.app')
@push('custom-style')
    <style>
        .order-tracking {
            width: 20% !important;
        }
    </style>
@endpush
@section('content')
    @php
        if(!auth()->check()){
            header('Location: '.route('frontview.login'));
            exit;
        }
    @endphp
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Account</h4>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Home</a>
                            <span>Account</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    <section class="my-account spad-70">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    @include('new-frontend.home.components.account_sidebar')
                </div>
                <div class="col-9">
                    <div class="tab-content account-tabs" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-profile">
                            <div class="heading-box text-left">
                                <h5>My Orders</h5>
                            </div>
                            <div class="table-responsive">
                                <table class="table cart-table">
                                    <thead>
                                        <tr class="table-head">
                                            <th scope="col">image</th>
                                            <th scope="col">Order Id</th>
                                            <th scope="col">Product Details</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($userOrders as $userOrder)
                                            @if (isset($userOrder->orders))
                                                <tr>
                                                    <td>
                                                        <a href="product-left-sidebar.html">
                                                            <img onerror="handleError(this);"
                                                                src="{{ $userOrder->orders->first() ? asset('file') . '/' . $userOrder->orders->first()->images : '' }}"
                                                                class="blur-up lazyloaded" alt="" />
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <p class="mt-0">{{ $userOrder->order_id ?? '' }}</p>
                                                    </td>
                                                    <td>
                                                        <table>
                                                            @isset($userOrder->orders)
                                                                @foreach ($userOrder->orders as $order)
                                                                    <tr>
                                                                        <td>{{ $order->name ?? '' }}</td>
                                                                    </tr>
                                                                @endforeach
                                                            @endisset
                                                        </table>

                                                    </td>
                                                    <td id="order-status">
                                                        @if ($userOrder->status == 0)
                                                            <p class="success-button btn btn-sm">Confirmed</p>
                                                        @elseif($userOrder->status == 1)
                                                            <p class="success-button btn btn-sm">Processed</p>
                                                        @elseif($userOrder->status == 2)
                                                            <p class="success-button btn btn-sm">Shipped</p>
                                                        @elseif($userOrder->status == 3)
                                                            <p class="success-button btn btn-sm">Completed</p>
                                                        @elseif($userOrder->status == 4)
                                                            <p class="success-button btn btn-sm">Refunded</p>
                                                        @endif

                                                        {{-- <p class="danger-button btn btn-sm">Pending</p> --}}
                                                    </td>
                                                    <td>
                                                        <p class="theme-color fs-6">${{ $userOrder->total_amount ?? '' }}
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <a class="view track_toggle" data-id="{{ $userOrder->id ?? '' }}"
                                                            href="javascript:void(0)">Track</a>
                                                        <a class="view return_order" data-id="{{ $userOrder->id ?? '' }}"
                                                            href="javascript:void(0)">Return</a>
                                                        <a class="view"
                                                            href="{{ route('view-my-order', $userOrder->order_id) }}">
                                                            View
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>

                            <div class="track_orders" style="display: none;">

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('script')
    <script>
        $(document).ready(function() {
            $(".track_toggle").click(function() {
                var id = $(this).attr('data-id')
                $.ajax({
                    url: "{{ route('trackOrder') }}",
                    type: "POST",
                    data: {
                        '_token': "{{ csrf_token() }}",
                        'id': id
                    },
                    success: function(response) {
                        $(".track_orders").html(response);
                        $(".track_orders").show();
                    }
                })

            });


            $(".return_order").click(function(e) {
                var element = $(this);
                var id = $(this).attr('data-id')
                $.ajax({
                    url: "{{ route('returnOrder') }}",
                    type: "POST",
                    dataType: "json",
                    data: {
                        '_token': "{{ csrf_token() }}",
                        'id': id
                    },
                    success: function(response) {
                        if (response.status) {
                            location.reload();
                        }
                        // $(".track_orders").html(response);
                        // $(".track_orders").show();
                    }
                })

            });
        });
    </script>
@endpush
