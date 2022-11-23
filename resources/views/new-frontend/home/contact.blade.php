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
                        <h4>Contact Us</h4>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Home</a>
                            <span>Contact Us</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    <!-- Map Begin -->
    <div class="map">
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d227748.99973450298!2d75.65047228361074!3d26.88514167956319!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396c4adf4c57e281%3A0xce1c63a0cf22e09!2sJaipur%2C%20Rajasthan!5e0!3m2!1sen!2sin!4v1653297837891!5m2!1sen!2sin" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- Map End -->

    <!-- Contact Section Begin -->
    <section class="contact spad-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="contact__text">
                        <div class="section-title">
                            <span>Information</span>
                            <h2>Contact Us</h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                        </div>
                        <ul>
                            <li>
                                <h4>Jaipur</h4>
                                <p>G/13, Sitapura Industrial Area, India Gate,<br> Jaipur, Rajasthan 302029<br>(+91) 9876543210</p>
                            </li>
                            <!-- <li>
                                <h4>Jaipur</h4>
                                <p>109 Avenue Léon, 63 Clermont-Ferrand <br />+91 9876543210</p>
                            </li> -->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="contact__form">
                        <form action="#" class="contactForm">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Name" class="form-control" name="name">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Email" class="form-control" name="email">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Phone" class="form-control" name="phone">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Subject" class="form-control" name="subject">
                                </div>
                                <div class="col-lg-12">
                                    <textarea placeholder="Message" class="form-control" name="message"></textarea>
                                    <button type="submit" class="site-btn btn-product btn--animated">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
@endsection
@push('script')
<script>
    $(document).ready(function(){
        $('.contactForm').on('submit', function(e){
            e.preventDefault();
            var formdata = new FormData($(this)[0])
            $.ajax({
                url: "{{route('addContact')}}",
                type: "POST",
                data: formdata,
                contentType: false,
                processData: false, 
                success: function(response){

                }
            })
        })
    })
</script>
@endpush
