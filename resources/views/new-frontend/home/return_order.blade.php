@extends('new-frontend.layout.app')
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
                        <div class="tab-pane fade show active" id="v-pills-messages">
                            <div class="heading-box text-left">
                                <h5>Return Order</h5>
                            </div>
                            <div class="shopping__cart__table shopping__cart__table__orders">
                                <div class="alert alert-danger" role="alert">
                                    {{ count(get_order()) }} Item Returned.
                                </div>


                                <table class="table cart-table">
                                    <thead>
                                        <tr class="table-head">
                                            <th scope="col">image</th>
                                            <th scope="col">Order Id</th>
                                            <th scope="col">Product Details</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach (get_order() as $userOrder)
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
                                                    <td>
                                                        <p class="danger-button btn btn-sm">Returned</p>
                                                    </td>
                                                    <td>
                                                        <p class="theme-color fs-6">${{ $userOrder->total_amount ?? '' }}
                                                        </p>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
