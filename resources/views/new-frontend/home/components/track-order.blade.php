<div class="row">
    <div class="col-12 hh-grayBox pt45 pb20">
        <div class="row justify-content-between">
            <div class="order-tracking @if($userOrder->status >=0) completed @endif">
                <span class="is-complete"></span>
                <p>
                    Confirmed<br />
                    {{-- <span>Mon, May 23</span> --}}
                </p>
            </div>
            <div class="order-tracking @if($userOrder->status >=1) completed @endif">
                <span class="is-complete"></span>
                <p>
                    Processed<br />
                </p>
            </div>
            <div class="order-tracking @if($userOrder->status >=2) completed @endif">
                <span class="is-complete"></span>
                <p>
                    Shipped<br />
                </p>
            </div>
            <div class="order-tracking @if($userOrder->status >=3) completed @endif">
                <span class="is-complete"></span>
                <p>
                    Completed<br />
                </p>
            </div>
            <div class="order-tracking @if($userOrder->status >=4) completed @endif">
                <span class="is-complete"></span>
                <p>
                    Refunded<br />
                </p>
            </div>
        </div>
    </div>
</div>