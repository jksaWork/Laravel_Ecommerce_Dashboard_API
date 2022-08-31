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
                                <span>
                                    <svg style="width:50px;height:50px;color:#1e9ff2" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M12 3C14.21 3 16 4.79 16 7S14.21 11 12 11 8 9.21 8 7 9.79 3 12 3M16 13.54C16 14.6 15.72 17.07 13.81 19.83L13 15L13.94 13.12C13.32 13.05 12.67 13 12 13S10.68 13.05 10.06 13.12L11 15L10.19 19.83C8.28 17.07 8 14.6 8 13.54C5.61 14.24 4 15.5 4 17V21H20V17C20 15.5 18.4 14.24 16 13.54Z" />
                                    </svg>
                                </span>
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
                                    <span>
                                        <svg style="width:50px;height:50px;color:#28d094" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M9 20C9 21.1 8.1 22 7 22S5 21.1 5 20 5.9 18 7 18 9 18.9 9 20M17 18C15.9 18 15 18.9 15 20S15.9 22 17 22 19 21.1 19 20 18.1 18 17 18M7.2 14.8V14.7L8.1 13H15.5C16.2 13 16.9 12.6 17.2 12L21.1 5L19.4 4L15.5 11H8.5L4.3 2H1V4H3L6.6 11.6L5.2 14C5.1 14.3 5 14.6 5 15C5 16.1 5.9 17 7 17H19V15H7.4C7.3 15 7.2 14.9 7.2 14.8M12 9.3L11.4 8.8C9.4 6.9 8 5.7 8 4.2C8 3 9 2 10.2 2C10.9 2 11.6 2.3 12 2.8C12.4 2.3 13.1 2 13.8 2C15 2 16 2.9 16 4.2C16 5.7 14.6 6.9 12.6 8.8L12 9.3Z" />
                                        </svg>
                                    </span>
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
                                    <svg style="width:50px;height:50px;color:#ff4961;" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M5,6H23V18H5V6M14,9A3,3 0 0,1 17,12A3,3 0 0,1 14,15A3,3 0 0,1 11,12A3,3 0 0,1 14,9M9,8A2,2 0 0,1 7,10V14A2,2 0 0,1 9,16H19A2,2 0 0,1 21,14V10A2,2 0 0,1 19,8H9M1,10H3V20H19V22H1V10Z" />
                                    </svg>
                                    {{-- <i class="icon-speedometer success font-large-2 float-right"></i> --}}
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
                                    <svg style="width:50px;height:50px;color:#28d094" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9M12,3A1,1 0 0,1 13,4A1,1 0 0,1 12,5A1,1 0 0,1 11,4A1,1 0 0,1 12,3M19,3H14.82C14.4,1.84 13.3,1 12,1C10.7,1 9.6,1.84 9.18,3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5A2,2 0 0,0 19,3Z" />
                                    </svg>
                                    {{-- <i class="icon-list font-large-2 float-right"></i> --}}
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
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 3px">{{__('translation.No')}}</th>
                                                        <th> sub total</th>
                                                        <th> tax</th>
                                                        <th> total </th>
                                                        <th> first name </th>
                                                        <th> last name </th>
                                                        <th> mobile </th>
                                                        <th> email </th>
                                                        <th> zip code </th>
                                                        <th> status </th>
                                                        <th> order date </th>
                                                        <th> opration </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if(count($orders) > 0)
                                                    @foreach ($orders as $key => $order)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $order->sub_total }}</td>
                                                        <td>{{ $order->tax }}</td>
                                                        <td>{{ $order->total }}</td>
                                                        <td>{{ $order->first_name }}</td>
                                                        <td>{{ $order->last_name }}</td>
                                                        <td>{{ $order->phone }}</td>
                                                        <td>{{ $order->email }}</td>
                                                        <td>{{ $order->zip_code }}</td>
                                                        <td>{!! $order->getStatusWithSpan() !!}</td>
                                                        <td>{{ $order->created_at->format('Y-M-d') }}</td>
                                                        <td>
                                                            <div style="min-width: 100px"></div>
                                                            <a href="{{ route('order.details', $order->id) }}"
                                                                class="btn btn-outline-primary btn-sm">Order Details</a>

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
                                                        <th> last name </th>
                                                        <th> mobile </th>
                                                        <th> email </th>
                                                        <th> zip code </th>
                                                        <th> status </th>
                                                        <th> order date </th>
                                                        <th> opration </th>


                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
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
