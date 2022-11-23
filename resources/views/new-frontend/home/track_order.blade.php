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
                        <h4>Track Order</h4>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Home</a>
                            <span>Track Order</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <section class="track-page spad-70">
        <div class="container">
            <div class="row track-OrderBox">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="number" class="form-control" placeholder="Enter Your AWB No." />
                    </div>
                    <a class="btn product__btn signin_btn w-100" href="#">Track Order</a>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('script')

@endpush
