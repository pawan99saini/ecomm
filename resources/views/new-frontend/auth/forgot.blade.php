@extends('new-frontend.layout.app')
@section('content')
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
                            <a href="{{ url('/')}}">Home</a>
                            <span>Account</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <section class="forgot-password spad-70">
        <div class="container">
            <div class="row account-box">
                <div class="col-md-5">
                    <div class="wrapper-title">
                        <div class="box-title">
                          <h6>Customer Login</h6>
                        </div>
                      </div>
                     <form>
                        <h6>We will send you an email to reset your password.</h6>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" />
                        </div>
                        <div class="text-center ">
                            <a class="btn product__btn signin_btn w-100" href="#">Submit</a>
                            <span class="or_text">or</span><br>
                            <a class="cancel_text" href="javascript:void(0)">Cancel</a>
                        </div>

                    </form>
                </div>
                <div class="col-md-2">
                    <div class="custom-or-abs">
                      <span class="or_text">
                        or
                      </span>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="wrapper-title">
                        <div class="box-title">
                          <h6>Register with Vinaika</h6>
                        </div>
                      </div>
                     <h4 class="mb-20">Register with us for a faster checkout,
                        to track the status of your order and more.</h4>

                        <button onClick="parent.location='new-register'" type="submit" class="btn product__btn signin_btn">Create an account</button>

                </div>
            </div>
        </div>
    </section>
@endsection
