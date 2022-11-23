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
                    <div class="tab-content account-tabs dashboard" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                            aria-labelledby="v-pills-home-tab">
                            <div class="page-title title title1 title-effect">
                                <h2>My Dashboard</h2>
                            </div>
                            <div class="profile-edit-form">
                                <div class="welcome-msg">
                                    <h6 class="font-light">Hello, <span>{{ auth()->user()->name ?? '' }} !</span></h6>
                                    <p class="font-light">From your My Account Dashboard you have the ability to
                                        view a snapshot of your recent account activity and update your account
                                        information. Select a link below to view or edit information.</p>
                                </div>
                                <div class="order-box-contain my-4">
                                    <div class="row g-4">
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="order-box">
                                                <div class="order-box-image">
                                                    <img onerror="handleError(this);"src="img/box.png"
                                                        class="img-fluid blur-up lazyloaded" alt="" />
                                                </div>
                                                <div class="order-box-contain">
                                                    <img onerror="handleError(this);"src="img/box1.png"
                                                        class="img-fluid blur-up lazyloaded" alt="" />
                                                    <div>
                                                        <h5 class="font-light">total order</h5>
                                                        <h3>{{ count(auth()->user()->userOrders) }}</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-sm-6">
                                            <div class="order-box">
                                                <div class="order-box-image">
                                                    <img onerror="handleError(this);"src="img/sent.png"
                                                        class="img-fluid blur-up lazyloaded" alt="" />
                                                </div>
                                                <div class="order-box-contain">
                                                    <img onerror="handleError(this);"src="img/sent1.png"
                                                        class="img-fluid blur-up lazyloaded" alt="" />
                                                    <div>
                                                        <h5 class="font-light">completed orders</h5>
                                                        <h3>{{ count(get_order(3)) }}</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-sm-6">
                                            <div class="order-box">
                                                <div class="order-box-image">
                                                    <img onerror="handleError(this);"src="img/wishlist.png"
                                                        class="img-fluid blur-up lazyloaded" alt="" />
                                                </div>
                                                <div class="order-box-contain">
                                                    <img onerror="handleError(this);"src="img/wishlist1.png"
                                                        class="img-fluid blur-up lazyloaded" alt="" />
                                                    <div>
                                                        <h5 class="font-light">wishlist</h5>
                                                        <h3 id="wishlistCount"></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-head">
                                    <h3>Account Information</h3>
                                </div>
                                <form class="userDetailForm">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label>Name</label>
                                            <input type="name" class="form-control" placeholder="Name" name="name"
                                                value="{{ auth()->user()->name ?? '' }}" />
                                        </div>
                                        <div class="form-group col-6">
                                            <label>Your Email Address </label>
                                            <input type="email" class="form-control" placeholder="Enter email"
                                                name="email" value="{{ auth()->user()->email ?? '' }}" />
                                        </div>
                                        <div class="form-group col-6">
                                            <label>Your Phone</label>
                                            <input type="text" class="form-control" placeholder="Your Phone"
                                                name="mobile" value="{{ auth()->user()->mobile ?? '' }}" />
                                        </div>
                                        <div class="form-group col-6">
                                            <label>PostCode</label>
                                            <input type="text" class="form-control" placeholder="Postcode"
                                                name="postcode" value="{{ auth()->user()->postcode ?? '' }}" />
                                        </div>
                                        <div class="form-group col-6">
                                            <label>Address1</label>
                                            <input type="" class="form-control" placeholder="Address 1"
                                                name="address" value="{{ auth()->user()->address ?? '' }}" />
                                        </div>
                                        <div class="form-group col-6">
                                            <label>Address2</label>
                                            <input type="" class="form-control" placeholder="Address 2" />
                                        </div>
                                        <div class="form-group col-6">
                                            <label>Your Password</label>
                                            <input type="password" class="form-control" placeholder="Enter Password"
                                                name="password" />
                                            <span class="error"></span>
                                        </div>
                                        <div class="form-group col-6">
                                            <label>Confirm Password</label>
                                            <input type="password" class="form-control" placeholder="Enter Password"
                                                name="confirm_password" />
                                            <span class="error"></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <button type="submit" class="btn product__btn signin_btn">Update</button>
                                        </div>
                                    </div>
                                </form>
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
            let wishlist_array = JSON.parse(localStorage.getItem("wishlist")) ?? []
            $('#wishlistCount').html(wishlist_array.length)

            $('.userDetailForm').on('submit', function(e) {
                e.preventDefault();
                var flag = false
                var passwordSelector = $("input[name='password']")
                var confirmPasswordSelector = $("input[name='confirm_password']")
                var password = passwordSelector.val()
                var confirmPassword = confirmPasswordSelector.val()

                passwordSelector.siblings('.error').text('')
                confirmPasswordSelector.siblings('.error').text('')

                if (password.trim() == '' && confirmPassword.trim() == '') {
                    flag = true
                } else if (password.trim() !== '' && confirmPassword.trim() == '') {
                    confirmPasswordSelector.siblings('.error').text('This Field is Required')
                } else if (password.trim() == '' && confirmPassword.trim() !== '') {
                    passwordSelector.siblings('.error').text('This Field is Required')
                } else if (password.trim() !== '' && confirmPassword.trim() !== '') {
                    if (password.trim() == confirmPassword.trim()) {
                        flag = true
                    } else {
                        confirmPasswordSelector.siblings('.error').text(
                            'Password and confirm password do not match.')
                    }
                }
                if (flag) {
                    var formdata = new FormData($(this)[0])
                    $.ajax({
                        url: "{{ route('updateUser') }}",
                        type: "POST",
                        data: formdata,
                        contentType: false,
                        processData: false,
                        success: function(response) {

                        }
                    })
                }

            })
        })
    </script>
@endpush
