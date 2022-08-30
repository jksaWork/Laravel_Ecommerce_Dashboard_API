<div>
    {{-- @dd($contact) --}}
    <div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title mb-0"> Contact US Message</h3>
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
                                                                <th> name  </th>
                                                                <th> email  </th>
                                                                <th> subject</th>
                                                                <th> message  </th>
                                                                <th> opration  </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @if(count($contact) > 0)
                                                            @foreach ($contact as $key => $item)
                                                            <tr>
                                                                <td>{{ $loop->iteration }}</td>
                                                                <td>{{ $item->name }}</td>
                                                                <td>{{ $item->email }}</td>
                                                                <td>{{  $item->subject }}</td>
                                                                <td>{{  $item->message }}</td>
                                                                <td>
                                                                    <a href="#" class="btn btn-outline-danger btn-sm" wire:click='Delete({{ $item->id }})'>
                                                                        Delete
                                                                    </a>
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
                                                                <th> name  </th>
                                                                <th> email  </th>
                                                                <th> subject</th>
                                                                <th> message  </th>
                                                                <th> opration  </th>
                                                            </tr></tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
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
