<div>
    <div class="">
        <div class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white u-s-m-b-30">
            <div class="dash__pad-2">
                <h1 class="dash__h1 u-s-m-b-14">Manage My Account</h1>
                <span class="dash__text u-s-m-b-30">From your My Account Dashboard you have the ability to view a snapshot of your recent account activity and update your account information. Select a link below to view or edit information.</span>
                <div class="row">
                    <div class="col-lg-6 u-s-m-b-30">
                        <div class="dash__box dash__box--bg-grey dash__box--shadow-2 u-h-100">
                            <div class="dash__pad-3">
                                <h2 class="dash__h2 u-s-m-b-8">PERSONAL PROFILE</h2>
                                <div class="dash__link dash__link--secondary u-s-m-b-8">
                                    <a href="dash-edit-profile.html">Edit</a></div>
                                <span class="dash__text">{{ auth()->user()->name }}</span>
                                <span class="dash__text">{{  auth()->user()->email }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 u-s-m-b-30">
                        <div class="dash__box dash__box--bg-grey dash__box--shadow-2 u-h-100">
                            <div class="dash__pad-3">
                                <h2 class="dash__h2 u-s-m-b-8">BILLING ADDRESS</h2>
                                <span class="dash__text-2 u-s-m-b-8">Default Billing Address</span>
                                <span class="dash__text">{{ $orders[0]->line_1 ?? ' -' }}
                                     {{ $orders[0]->line_2  ?? '-'}}
                                     {{ $orders[0]->city ?? '-'}}
                                    </span>
                                <span class="dash__text">{{ $orders[0]->phone ?? ' -' }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dash__box dash__box--shadow dash__box--bg-white dash__box--radius" style="margin-bottom:100px">
            <h2 class="dash__h2 u-s-p-xy-20">RECENT ORDERS</h2>
            <div class="dash__table-wrap gl-scroll">
                <table class="dash__table">
                    <thead>
                        <tr>
                            <th>Order #</th>
                            <th>Placed On</th>
                            <th>Items</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($orders as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->created_at->format('Y-M-D') }}</td>
                            <td>
                                <div class="dash__table-img-wrap">
                                    <img class="u-img-fluid" src="{{ $item->OrderItem['0']->Product->image }}" alt=""></div>
                            </td>
                            <td>
                                <div class="dash__table-total">
                                    <span>${{ $item->total }}</span>
                                    <div class="dash__link dash__link--brand">
                                        <a href="{{ route('order.details', $item->id) }}">MANAGE</a></div>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan='10'>
                                No Order Right Now
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
