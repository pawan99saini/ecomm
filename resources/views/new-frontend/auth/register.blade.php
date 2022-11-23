@extends('new-frontend.layout.app')
@section('content')
<section class="sticky-header-next-sec create-account-section mt-10">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-7 mx-auto">
                    <div class="create-account-outer-wrapper">
                        <div class="create-account-inner-wrapper">
                            <div class="col-sm-12 col-md-8 ca-header mx-auto">
                                <div class="ca-main-heading">
                                    <h2>Create an Account</h2>
                                </div>
                                <div class="ca-desc">
                                    <p>With a Tiffany.com account, you can save time during checkout, access your
                                        shopping bag from any device and view your order history.</p>
                                </div>
                                <div class="ca-have-account">
                                    <span>Have a Tiffany account?</span><a
                                        class="underline-lite-on-hover position-relative" href="Login.html">Sign In <i
                                            class="arrow"></i></a>
                                </div>
                            </div>
                            <form action="{{route('frontview.register')}}" method="post">
                            @csrf
                            <div class="ca-form-wrapper">
                                <div class="col-sm-12 col-md-8 ca-form mx-auto p-0">
                                    <input class="ca-input" name="name" type="text" value="{{ old('name') }}" placeholder="">
                                    <label>Full Name</label>
                                    <span class="focus-border"></span>
                                    @if($errors->has('name'))
                                                <div class="text-danger fs-7 fw-bold">
                                                    {{ $errors->first('name') }}</div>
                                            @endif
                                </div>
                                
                                <div class="col-sm-12 col-md-8 ca-form mx-auto p-0">
                                    <input class="ca-input" name="mobile" value="{{ old('mobile') }}" type="text" placeholder="">
                                    <label>Mobile</label>
                                    <span class="focus-border"></span>
                                    @if($errors->has('mobile'))
                                                <div class="text-danger fs-7 fw-bold">
                                                    {{ $errors->first('mobile') }}</div>
                                            @endif
                                </div>
                                
                                <div class="col-sm-12 col-md-8 ca-form mx-auto p-0">
                                    <input class="ca-input" name="email" type="email" value="{{ old('email') }}" placeholder="">
                                    <label>Email</label>
                                    <span class="focus-border"></span>
                                    @if($errors->has('email'))
                                                <div class="text-danger fs-7 fw-bold">
                                                    {{ $errors->first('email') }}</div>
                                            @endif
                                </div>
                                
                                <div class="col-sm-12 col-md-8 ca-form mx-auto p-0">
                                    <input class="ca-input" type="text" placeholder="">
                                    <label>referral Code</label>
                                    <span class="focus-border"></span>
                                </div>
                                <div class="col-sm-12 col-md-8 ca-form mx-auto p-0">
                                    <input class="ca-input" name="password" type="password" value="{{ old('password') }}" placeholder="">
                                    <label>Password</label>
                                    <span class="focus-border"></span>
                                    @if($errors->has('password'))
                                                <div class="text-danger fs-7 fw-bold">
                                                    {{ $errors->first('password') }}</div>
                                            @endif
                                </div>
                                
                                <div class="col-sm-12 col-md-8 ca-form mx-auto p-0">
                                    <input class="ca-input" name="cpassword" type="password" value="{{ old('cpassword') }}" placeholder="">
                                    <label>Confirm Password</label>
                                    <span class="focus-border"></span>
                                    @if($errors->has('cpassword'))
                                                <div class="text-danger fs-7 fw-bold">
                                                    {{ $errors->first('cpassword') }}</div>
                                            @endif
                                </div>
                                
                                <div class="col-sm-12 col-md-8 mx-auto ca-term-and-condition">
                                    <div>
                                        <div class="ca-form-group">
                                            <input type="checkbox" id="t&c">
                                            <label class="ca-term-desc" for="t&c">I want to receive exclusive news and
                                                offers *</label>
                                        </div>
                                        <div class="ca-button ca-form-group mt-2">
                                            <label class="ca-term-desc" for="terms"></label>
                                            <input type="checkbox" name="terms" class="ca-btn">Accept
                                                Terms and Conditions
                                                @if($errors->has('terms'))
                                                <div class="text-danger fs-7 fw-bold">
                                                    {{ $errors->first('terms') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-8 mx-auto p-0">
                                    <div class="group button-group">
                                        <button type="submit" class="">
                                            <span>Sign in</span>
                                        </button>
                                    </div>
                                </div>
</form>
                                <div class="col-sm-12 col-md-8 mx-auto p-0">
                                    <div class="line-seperator-container mb-4">
                                        <div></div>
                                        <div class="fw-3">or continue with</div>
                                        <div></div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-8 px-0 text-center row mx-auto mt-4">
                                    <div class="col-6 px-0">
                                        <a href="https://www.faridagupta.com/login/google"
                                            class="btn btn-primary google-login-btn mr-1"><img
                                                src="https://cdns.faridagupta.com/nrs/img/extraImages/google_logo1600.png"
                                                width="30px" style="margin-right: 15px;">
                                            Google
                                        </a>
                                    </div>
                                    <div class="col-6 px-0">
                                        <a href="https://www.faridagupta.com/login/facebook"
                                            class="btn btn-primary facebook-login-btn ml-1"><img
                                                src="https://cdns.faridagupta.com/nrs/img/extraImages/fb-art.png"
                                                width="28px" style="margin-right: 20px;">
                                            Facebook
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

