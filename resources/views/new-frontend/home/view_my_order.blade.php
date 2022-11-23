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
                    <div class="tab-pane fade show active" id="v-pills-profile">
                        <div class="heading-box text-left">
                            <h5>Order Details</h5>
                        </div>
                        @foreach($orders as $order)
                            <div class="table-responsive border" style="margin-top: 20px;">
                                <table class="table cart-table view-cart-table">
                                    <tbody>
                                        <tr>
                                            <td>image</td>
                                            <td>
                                                <a href="javascript:void(0)">
                                                    <img onerror="handleError(this);"src="{{ asset('file') . '/' . $order->images }}" class="blur-up lazyloaded" alt="" />
                                                </a>
                                            </td>
                                        </tr>
                                        {{-- <tr>
                                            <td>Order Id</td>
                                            <td>
                                                <p class="mt-0 m-0">#125021</p>
                                            </td>
                                        </tr> --}}
                                        <tr>
                                            <td>Product Details</td>
                                            <td>
                                                <p class="fs-6 m-0">{{$order->name ?? ''}}</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Quantity</td>
                                            <td>
                                                <p class="fs-6 m-0">{{$order->qty ?? ''}}</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Price</td>
                                            <td>
                                                <p class="theme-color fs-6">${{$order->mrp_price ?? ''}}</p>
                                            </td>
                                        </tr>




                                    </tbody>
                                </table>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
