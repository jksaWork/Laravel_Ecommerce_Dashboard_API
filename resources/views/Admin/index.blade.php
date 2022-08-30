@extends('layouts.master')

@push('links')
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/fonts/simple-line-icons/style.css')}}">
@endpush

@section('content')

<div class="content-wrapper">
    <div class="content-header row">
    </div>
    <div class="content-body">
        <!-- eCommerce statistic -->
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-12">
                <div class="card pull-up">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="media-body text-left">
                                    <h3 class="info">{{$customer_count}}</h3>
                                    <h6>customers</h6>
                                </div>
                                <div>
                                    <i class="icon-users info font-large-2 float-right"></i>
                                </div>
                            </div>
                            {{-- <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 80%"
                                    aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-12">
                <div class="card pull-up">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="media-body text-left">
                                    <h3 class="info">{{$order_count}}</h3>
                                    <h6> orders </h6>
                                </div>
                                <div>
                                    <i class="icon-user-follow warning font-large-2 float-right"></i>
                                </div>
                            </div>
                            {{-- <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 65%"
                                    aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-12">
                <div class="card pull-up">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="media-body text-left">
                                    <h3 class="info">${{ $order_income }}</h3>
                                    <h6>Order income </h6>
                                </div>
                                <div>
                                    <i class="icon-speedometer success font-large-2 float-right"></i>
                                </div>
                            </div>
                            {{-- <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 75%"
                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-12">
                <div class="card pull-up">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="media-body text-left">
                                    <h3 class="info">{{ $todays_orders }}</h3>
                                    <h6> Today Orders</h6>
                                </div>
                                <div>
                                    <i class="icon-list font-large-2 float-right"></i>
                                </div>
                            </div>
                            {{-- <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 85%"
                                    aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card pull-up p-2">
                    <canvas id="myChart" width="400" height="300"></canvas>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card pull-up p-2">
                    <canvas id="myChart2" width="400" height="300"></canvas>
                </div>
            </div>
        </div>
    </div>
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
                                                    <td colspan="15">{{__('translation.table.empty')}}</td>
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
                                </div>
                            </div>
                        </div>
                    </div>
    </section>
</div>
@endsection
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Jun', 'Feb', 'Mrc', 'Atil', 'June', 'July'],
            datasets: [{
                label: '# Orders In Month',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    //  Start Chart Tow
    // const  data =
            const labels =['Sunday' , 'Mon' , 'Duy' , 'Satr' , 'Wins' , 'Tur' , 'Fri'];
            const CartData = {
                labels: labels,
                datasets: [{
                label: '{{__('translation.orders')}}',
                backgroundColor: 'rgb(30, 159, 242)',
                borderColor:'rgb(30, 159, 242)' ,
                data: [40, 42 , 45, 20 , 71 , 12, 21],
                }]
            };
                const config = {
                type: 'line',
                data: CartData,
                options: {
                    legend: true,
                    bezierCurve:true,
                    lineTension: 0.3
                }
                };
                const myChart2 = new Chart(
                document.getElementById('myChart2'),
                config
                );

    </script>


@endpush
