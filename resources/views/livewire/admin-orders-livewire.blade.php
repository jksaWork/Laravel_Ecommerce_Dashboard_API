<div>
    <div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title mb-0"> Orders</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            {{-- Breadcrumbs::render('clients') --}}
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-6 col-12">
                    <div class="btn-group">
                        <button data-toggle="modal" data-target="#AddCategory" class="btn btn-round btn-info"
                            type="button"><i class="la la-plus la-sm"></i>
                            {{__('translation.add')}}</button>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Zero configuration table -->
                <section id="configuration">
                    <div class="row">
                        <div class="col-12">
                            <div class="card overflow-hidden">
                                <div class="card-content">
                                    <div class="card-body cleartfix">
                                        <div class="card">
                                            <div class="card-header">
                                                <a class="heading-elements-toggle"><i
                                                        class="la la-ellipsis-v font-medium-3"></i></a>
                                                <div class="heading-elements">
                                                    <ul class="list-inline mb-0">
                                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                                        {{-- <li><a data-action="close"><i class="ft-x"></i></a></li> --}}
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="card-content collapse show">
                                                <div class="card-body card-dashboard">
                                                    @include('includes.dashboard.notifications')
                                                    <table class="table table-striped table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 3px">{{__('translation.No')}}</th>
                                                                <th> sub total</th>
                                                                <th> tax</th>
                                                                <th> total </th>
                                                                <th> first name </th>
                                                                <th> last  name </th>
                                                                <th> mobile  </th>
                                                                <th> email  </th>
                                                                <th> zip code </th>
                                                                <th> status  </th>
                                                                <th> order date  </th>
                                                                <th> opration  </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @if(count($orders) > 0)
                                                            @foreach ($orders as $key => $order)
                                                            <tr>
                                                                <td>{{ $loop->iteration }}</td>
                                                                <td>{{ $order->sub_total }}</td>
                                                                <td>{{ $order->tax }}</td>
                                                                <td>{{  $order->total }}</td>
                                                                <td>{{  $order->first_name }}</td>
                                                                <td>{{  $order->last_name }}</td>
                                                                <td>{{  $order->phone }}</td>
                                                                <td>{{  $order->email }}</td>
                                                                <td>{{  $order->zip_code }}</td>
                                                                <td>{!! $order->getStatusWithSpan() !!}</td>
                                                                <td>{{ $order->created_at->format('Y-M-d') }}</td>
                                                                <td>
                                                                    <div style="min-width: 100px"></div>
                                                                    <a href="{{ route('order.details', $order->id) }}" class="btn btn-outline-primary btn-sm">Order Details</a>
                                                                    <div class="dropdown ">
                                                                        <button class="btn  btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            Status
                                                                        </button>
                                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                            <a class="dropdown-item" href="#" wire:click='UpdateOrderStatus({{ $order->id }}, "deliverd")'>Delvierd</a>
                                                                            <a class="dropdown-item" href="#"  wire:click='UpdateOrderStatus({{ $order->id }}, "canceld")'> cancel</a>
                                                                        </div>
                                                                      </div>
                                                                </td>

                                                            </tr>
                                                            @endforeach
                                                            @else
                                                            <tr class="text-center">
                                                                <td colspan="10">{{__('translation.table.empty')}}</td>
                                                            </tr>
                                                            @endif
                                                        </tbody>
                                                        <tfoot>

                                                            <tr>
                                                                <th style="width: 3px">{{__('translation.No')}}</th>
                                                                <th> sub total</th>
                                                                <th> tax</th>
                                                                <th> total </th>
                                                                <th> first name </th>
                                                                <th> last  name </th>
                                                                <th> mobile  </th>
                                                                <th> email   </th>
                                                                <th> zip code </th>
                                                                <th> status  </th>
                                                                <th> order date  </th>
                                                                <th> opration  </th>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                                {!! $orders->links() !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                </section>
                <!--/ Zero configuration table -->
            </div>
        </div>
    </div>
</div>
