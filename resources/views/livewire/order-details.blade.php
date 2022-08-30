<div>
    <div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title mb-0"> Order Items </h3>
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
                                                    <table class="table table-striped table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 3px">{{__('translation.No')}}</th>
                                                                <th> name </th>
                                                                <th> quantity</th>
                                                                <th> price </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @if(count($order->OrderItem) > 0)
                                                            @foreach ($order->OrderItem as $key => $item)
                                                            <tr>
                                                                <td>{{ $loop->iteration }}</td>
                                                                <td>{{ $item->Product->name }}</td>
                                                                <td>{{ $item->quantity }}</td>
                                                                <td>{{ $item->price }}</td>
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
                                                                <th> name </th>
                                                                <th> quantity</th>
                                                                <th> price </th>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                                {{-- {!! $orders->links() !!} --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>









                            </section>

                            {{-- order Transaction --}}
                            <div class="content-header row">
                                <div class="content-header-left col-md-6 col-12 mb-2">
                                    <h3 class="content-header-title mb-0"> Order Transaction </h3>
                                    <div class="row breadcrumbs-top">
                                        <div class="breadcrumb-wrapper col-12">
                                            {{-- Breadcrumbs::render('clients') --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                                    <table class="table table-striped table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th> type </th>
                                                                <th> Status</th>
                                                                <th> price </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>{{ $order->Transaction->mode }}</td>
                                                                <td>{{ $order->Transaction->status }}</td>
                                                                <td>{{ $order->tax  }}</td>
                                                            </tr>
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th> type </th>
                                                                <th> Status</th>
                                                                <th> price </th>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                                {{-- {!! $orders->links() !!} --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <!--/ Zero configuration table -->
                            </div>
            </div>
                            <div class="content-header row">
                                <div class="content-header-left col-md-6 col-12 mb-2">
                                    <h3 class="content-header-title mb-0"> Order Shipping && Billing  </h3>
                                    <div class="row breadcrumbs-top">
                                        <div class="breadcrumb-wrapper col-12">
                                            {{-- Breadcrumbs::render('clients') --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                                    <table class="table table-striped table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th> first name  </th>
                                                                <th> last name</th>
                                                                <th> mobile </th>
                                                                <th> email </th>
                                                                <th> city  </th>
                                                                <th> line 1  </th>
                                                                <th> line 2  </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>{{ $order->first_name}}</td>
                                                                <td>{{ $order->last_name }}</td>
                                                                <td>{{ $order->phone  }}</td>
                                                                <td>{{ $order->email  }}</td>
                                                                <td>{{ $order->city  }}</td>
                                                                <td>{{ $order->line_1  }}</td>
                                                                <td>{{ $order->line_2  }}</td>
                                                            </tr>
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th> first name  </th>
                                                                <th> last name</th>
                                                                <th> mobile </th>
                                                                <th> email </th>
                                                                <th> city  </th>
                                                                <th> line 1  </th>
                                                                <th> line 2  </th>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                                {{-- {!! $orders->links() !!} --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <!--/ Zero configuration table -->

                        </div>
        </div>
    </div>
</div>
