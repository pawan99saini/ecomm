@extends('new-frontend.layout.app')
@section('content')
<section class="sticky-header-next-sec sign-in-section mt-10">

        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 border-right">
                    <div class="col-sm-12 col-md-8 sign-in-outer-wrapper mx-auto">
                        <div class="sign-in-header">
                        @if(Session::has('error'))
<p class="text-danger fs-7 fw-bold">{{ Session::get('error') }}</p>
@endif
                            <h2>Sign In</h2>
                            <p>Please sign in to your Tiffany Account.</p>
                          

                        </div>
      
                        <form action="{{ url('/store/login') }}" method="POST">
                          @csrf
                        <div class="login-form-wrapper">
                            <div class="col-12 login-form p-0">
                                <input class="sign-input" name="email"
                   value="{{ old('email', null) }}" type="email" placeholder="" />
                                <label>Email</label>
                                <span class="focus-border"></span>
                            </div>
                            @if($errors->has('email'))
                                                <div class="text-danger fs-7 fw-bold">
                                                    {{ $errors->first('email') }}</div>
                                            @endif
                            <div class="col-12 login-form p-0">
                                <input class="sign-input" type="password" name="password" placeholder="" />
                                <label>Password</label>
                                <span class="focus-border"></span>

                            </div>
                            @if($errors->has('password'))
                                                <div class="text-danger fs-7 fw-bold">
                                                    {{ $errors->first('password') }}</div>
                                            @endif
                            <div class="col-12 p-0">
                                <div class="group button-group">
                                        <button type="submit" value="sign in">
                                            <span>Sign in</span>
                                        </button>
                                </div>
                            </div>
                            </form>

                            <div class="col-12 p-0 login-forgot-pass">
                                <a class="underline-lite-on-hover position-relative" href="#">Forgot your password? <i
                                        class="arrow"></i></a>
                            </div>
                            <div class="col-12 px-0 text-center row mx-auto mt-4">
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
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="col-sm-12 col-md-8 register-outer-wrapper mx-auto">
                        <div class="col-12 ca-header">
                            <div class="ca-main-heading">
                                <h2>Create an Account</h2>
                            </div>
                            <div class="ca-desc">
                                <p>
                                    Save time during checkout, view your shopping bag and saved
                                    items from any device and access your order history.
                                </p>
                            </div>
                        </div>
                        <div class="col-12 p-0 mt-8">
                            <!-- <div class="ca-button">
                                <button type="submit" name="submit" value="Register" class="ca-btn">Register</button>
                            </div> -->
                            <div class="group button-group">
                                <a href="{{url('new-register')}}">
                                    <button type="submit" value="Register">
                                        <span>Register</span>
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 px-0 text-center row mx-auto mt-4">
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
    </section>
    @endsection
