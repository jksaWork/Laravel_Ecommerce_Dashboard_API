<div class="">
    <div class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white u-s-m-b-30">
        <div class="dash__pad-2">
            <h1 class="dash__h1 u-s-m-b-14">My Orders</h1>
            <span class="dash__text u-s-m-b-30">Here you can see all products that have been delivered.</span>
            <div class="m-order__list">
                @forelse ($orders as $item)
                <div class="m-order__get">
                    <div class="manage-o__header u-s-m-b-30">
                        <div class="dash-l-r">
                            <div>
                                <div class="manage-o__text-2 u-c-secondary">Order #{{ $item->id }}</div>
                                <div class="manage-o__text u-c-silver">Placed on {{ $item->created_at }}</div>
                                @if($item->canceled_at)
                                <div class="manage-o__text u-c-silver">canceld on {{ $item->canceled_at }}</div>
                                @elseif ($item->deliverd_at)
                                <div class="manage-o__text u-c-silver">deliver on {{ $item->deliverd_at }}</div>

                                @endif
                            </div>
                            <div>
                                <div class="dash__link dash__link--brand">
                                    @if($item->status == 'ordered')
                                    <span class="manage-o__badge badge--delivered " wire:click='CancelOrder({{ $item->id }})'> cancel  </span>
                                    @endif
                                    <a href="{{ route('customer.details', $item->id) }}">MANAGE</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="manage-o__description">
                        <div class="description__container">
                            <div class="description__img-wrap">

                                <img class="u-img-fluid" src="{{ $item->OrderItem['0']->Product->image }}" alt=""></div>
                            <div class="description-title">{{ $item->OrderItem['0']->Product->name }}</div>
                        </div>
                        <div class="description__info-wrap">
                            <div>
                                <span class="manage-o__badge {{ $item->OrderBadgeClass() }}">{{ $item->status }}</span></div>
                            <div>
                                <span class="manage-o__text-2 u-c-silver"> subtotal:
                                    <span class="manage-o__text-2 u-c-secondary">{{ $item->sub_total }}</span></span></div>
                            <div>
                                <span class="manage-o__text-2 u-c-silver">Total:
                                    <span class="manage-o__text-2 u-c-secondary">{{ $item->total }}</span></span></div>
                        </div>
                    </div>
                </div>
                @empty
                <H1 class="text-center">You Hanv't Order</H1>
                @endforelse
            </div>
        </div>
    </div>
</div>
