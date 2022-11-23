<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    @php
        $route = Route::current()->uri;
    @endphp
    <div class="profile-tabs">
        <img onerror="handleError(this);"src="https://images.unsplash.com/photo-1479936343636-73cdc5aae0c3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80"
            alt="profile-img" />
        <h2>{{auth()->user()->name ?? '' }}</h2>
        {{-- <small>UX Designer</small> --}}
    </div>
    @if(auth()->check())<a class="nav-link @if($route == 'my-account') active @endif" id="v-pills-home-tab" href="{{ route('my_account') }}" role="tab">My Dashboard</a>@endif
    @if(auth()->check())<a class="nav-link @if($route == 'my-order') active @endif" id="v-pills-profile-tab" href="{{ route('my_order') }}">My Order</a>@endif
    <!--  <a class="nav-link" id="v-pills-messages-tab" href="cancel-order.html">Cancel Order</a> -->
    @if(auth()->check())<a class="nav-link @if($route == 'return-order') active @endif" id="v-pills-settings-tab" href="{{ route('return_order') }}">Return Order</a>@endif
    <a class="nav-link @if($route == 'wishlist') active @endif" id="v-pills-wishlist-tab" href="{{ route('wishlist') }}">My Wishlist</a>
    @if(auth()->check())<a class="nav-link" id="v-pills-logout-tab" href="{{ route('home_route') }}">Log Out</a>@endif
</div>

