<div class="">
    <h1 class="dash__h1 u-s-m-b-30">Order Details</h1>
    <div class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white u-s-m-b-30">
        <div class="dash__pad-2">
            <div class="dash-l-r">
                <div>
                    <div class="manage-o__text-2 u-c-secondary">Order #{{ $order->id }}</div>
                    <div class="manage-o__text u-c-silver">Placed on {{ $order->created_at->format('Y-M-D h i s') }}
                    </div>
                </div>
                <div>
                    <div class="manage-o__text-2 u-c-silver">Total:

                        <span class="manage-o__text-2 u-c-secondary">${{ $order->total }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white u-s-m-b-30">
        <div class="dash__pad-2">
            <div class="manage-o">
                <div class="manage-o__header u-s-m-b-30">
                    <div class="manage-o__icon"><i class="fas fa-box u-s-m-r-5"></i>

                        <span class="manage-o__text">Package {{ $order->OrderItem->count() }}</span>
                    </div>
                </div>
                @foreach ($order->OrderItem as $item )
                <div class="manage-o__description">
                    <div class="description__container">
                        <div class="description__img-wrap">
                            <img class="u-img-fluid" src="{{ $item->Product->image }}" alt="">
                        </div>
                        <div class="description-title">{{ $item->Product->name }}</div>
                    </div>
                    <div class="description__info-wrap">
                        <div>
                            <span class="manage-o__text-2 u-c-silver">Quantity:
                                <span class="manage-o__text-2 u-c-secondary">{{ $item->quantity }}</span></span>
                        </div>
                        <div>
                            <span class="manage-o__text-2 u-c-silver">Total:
                                <span class="manage-o__text-2 u-c-secondary">${{ $item->price }}</span></span>
                        </div>
                    </div>
                </div>
                <div class="" style="margin-top: 10px"></div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="dash__box dash__box--bg-white dash__box--shadow u-s-m-b-30">
                <div class="dash__pad-3">
                    <h2 class="dash__h2 u-s-m-b-8">Shipping Address</h2>
                    <h2 class="dash__h2 u-s-m-b-8">{{ $order->first_name . ' '. $order->last_name }}</h2>
                    <span class="dash__text-2">{{ $order->line_1 . ' ' . $order->line_2 . ' ' . $order->city }}</span>
                    <span class="dash__text-2">(+0) {{ $order->phone }}</span>
                </div>
            </div>

        </div>
        <div class="col-lg-6">
            <div class="dash__box dash__box--bg-white dash__box--shadow u-h-100">
                <div class="dash__pad-3">
                    <h2 class="dash__h2 u-s-m-b-8">Total Summary</h2>
                    <div class="dash-l-r u-s-m-b-8">
                        <div class="manage-o__text-2 u-c-secondary">Subtotal</div>
                        <div class="manage-o__text-2 u-c-secondary">${{ $order->sub_total }}</div>
                    </div>
                    <div class="dash-l-r u-s-m-b-8">
                        <div class="manage-o__text-2 u-c-secondary">Shipping Fee</div>
                        <div class="manage-o__text-2 u-c-secondary">${{ $order->tax }}    </div>
                    </div>
                    <div class="dash-l-r u-s-m-b-8">
                        <div class="manage-o__text-2 u-c-secondary">Total</div>
                        <div class="manage-o__text-2 u-c-secondary">${{ $order->total }}</div>
                    </div>

                    <span class="dash__text-2">Paid by Cash on Delivery</span>
                </div>
            </div>
        </div>
    </div>
</div>
