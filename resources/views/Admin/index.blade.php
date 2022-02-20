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
                                    {{-- <h3 class="info">{{$clients_total}}</h3> --}}
                                    <h6>{{__('translation.clients')}}</h6>
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
                                    {{-- <h3 class="info">{{$representatives_total}}</h3> --}}
                                    <h6>{{__('translation.representatives')}}</h6>
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
                                    {{-- <h3 class="info">{{$pending_orders}}</h3> --}}
                                    <h6>{{__('translation.pending.orders')}}</h6>
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
                                    {{-- <h3 class="info">{{$todays_orders}}</h3> --}}
                                    <h6>{{__('translation.todays.orders')}}</h6>
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

        {{-- @livewire('dashboard-orders-list') --}}

    </div>
</div>
@endsection
