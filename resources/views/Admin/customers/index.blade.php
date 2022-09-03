@extends('layouts.master')
@section('content')
<div>
    <div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title mb-0"> Customers</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            {{-- Breadcrumbs::render('clients') --}}
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-6 col-12">
                    <div class="btn-group">
                        <a href='{{ route('customers.create') }}' class="btn btn-round btn-info"
                            type="button"><i class="la la-plus la-sm"></i>
                            {{__('translation.add')}}</a>
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
                                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a>
                                                        </li>
                                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                                        {{-- <li><a data-action="close"><i class="ft-x"></i></a></li>
                                                        --}}
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
                                                                    <th> name </th>
                                                                    <th> mobile </th>
                                                                    <th> email </th>
                                                                    <th> status </th>
                                                                    <th> join date </th>
                                                                    <th> opration </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @if(count($customers) > 0)
                                                                {{-- @dd($customers) --}}
                                                                @foreach ($customers as $key => $customer)
                                                                <tr>
                                                                    <td>{{ $loop->iteration }}</td>
                                                                    <td>{{ $customer->name }}</td>
                                                                    <td>{{ $customer->phone }}</td>
                                                                    <td>{{ $customer->email }}</td>
                                                                    <td>{!! $customer->getStatusWithSpan() !!}</td>
                                                                    <td>{{ $customer->created_at->format('Y-M-d') }}</td>
                                                                    <td>
                                                                        <div style="min-width: 100px"></div>
                                                                        <form
                                                                        action="{{ route('customers.destroy', $customer->id) }}"
                                                                        id='delete_form_{{ $customer->id }}'
                                                                        method="post"
                                                                        style="display: inline-block" >
                                                                    @csrf
                                                                    @method('delete')
                                                                    <a onclick="FireSweetAlert({{ $customer->id }})"
                                                                        href="#"
                                                                        class="btn btn-sm btn-icon
                                                                    btn-danger"><i class="la la-trash"></i></a>
                                                                </form>
                                                                        <a href="{{ route('customers.show', encrypt($customer->id)) }}"
                                                                            class="btn btn-primary btn-sm"> Change Status
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                @endforeach
                                                                @else
                                                                <tr class="text-center">
                                                                    <td colspan="10">{{__('translation.table.empty')}}
                                                                    </td>
                                                                </tr>
                                                                @endif
                                                            </tbody>
                                                            <tfoot>
                                                                <tr>
                                                                    <th style="width: 3px">{{__('translation.No')}}</th>
                                                                    <th> name </th>
                                                                    <th> mobile </th>
                                                                    <th> email </th>
                                                                    <th> status </th>
                                                                    <th> join date </th>
                                                                    <th> opration </th>
                                                                </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                    {{-- {!! $customer->links() !!} --}}
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

@endsection

@push('scripts')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
 function FireSweetAlert(id){
        // e.preventDefault();
        // console.log(e.target);
            Swal.fire({
  title: 'Do you want to Delete the Product ?',
  showDenyButton: true,
//   showCancelButton: true,
  confirmButtonText: 'Delete',
  denyButtonText: `Cancel`,
}).then((result) => {
  /* Read more about isConfirmed, isDenied below */
  if (result.isConfirmed) {
    $(`#delete_form_${id}`).submit();
  } else if (result.isDenied) {
    Swal.fire('Changes are not saved', '', 'info')
  }
})
        }
</script>
@endpush
