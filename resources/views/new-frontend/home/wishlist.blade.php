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
                            <a href="{{ route('home_route') }}">Home</a>
                            <span>Wishlist</span>
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
                        <div class="tab-pane fade show active" id="v-pills-wishlist">
                            <div class="heading-box text-left">
                                <h5>My Wishlist</h5>
                            </div>
                            <div class="row" id="wishlist_data">

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
            getwhishlist();
        })

        $(document).on('click', '.toggle-whishlist', function(e) {
            getwhishlist();
        });

        function getwhishlist() {
            let route = "{{ route('get_wishlist') }}"
            let wishlist_array = JSON.parse(localStorage.getItem("wishlist")) ?? []
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: route,
                type: 'POST',
                data: {
                    products: wishlist_array,
                },
                dataType: 'json', // added data type
                success: function(res) {
                    // res = JSON.parse(res);
                    $('#wishlist_data').html(res.html)
                    console.log({
                        res
                    });
                },
                error: function(e) {
                    console.log(e);
                }
            });
        }
    </script>
@endpush
