@extends('layouts.master')
@section('title' , 'mohammed altigani');
@section('content')
<div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title mb-0">categories</h3>
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
                                                            <th> Coupons name </th>
                                                            <th>type</th>
                                                            <th> cart value </th>
                                                            <th> value </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @if(count($Coupons) > 0)
                                                        @foreach ($Coupons as $key => $Coupons)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $Coupons->coupon }}</td>
                                                            <td>{{ $Coupons->type }}</td>
                                                            <td>{{  $Coupons->cart_value }}</td>
                                                            <td>{{  $Coupons->value }}</td>
                                                            <td>
                                                                <button data-toggle="modal" data-target="#updateModal"
                                                                    data-backdrop="static" data-keyboard="false" class="btn btn-sm btn-icon
                                                                    btn-primary"><i class="la la-edit"></i></button>
                                                                <form
                                                                    action="{{ route('categories.destroy', $Coupons->id) }}"
                                                                    id='delete_form_{{ $Coupons->id }}'
                                                                    method="post"
                                                                    style="display: inline-block" >
                                                                    @csrf
                                                                    @method('delete')
                                                                    <a onclick="FireSweetAlert({{ $Coupons->id }})"
                                                                        href="#"
                                                                        class="btn btn-sm btn-icon
                                                                    btn-danger"><i class="la la-trash"></i></a>
                                                                </form>
                                                                {{-- <a  class="btn btn-sm btn-icon btn-light" href="{{ route('categories.show' , encrypt($Coupons->id) ) }}">
                                                                    change status
                                                                </a> --}}
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
                                                            <th> Coupons name </th>
                                                            <th>type</th>
                                                            <th> cart value </th>
                                                            <th> value </th>
                                                        </tr>
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
</div>
</div>
</div>
</div>
</div>
</div>

{{-- ############################# add Category Modal ############################# --}}




<div class="modal fade" id="AddCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('Coupons.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Copons name</label>
                        <input type="text" class="form-control" name="coupon" id="" aria-describedby="helpId"
                            placeholder=" enter category name">
                    </div>
                        <div class="form-group">
                            <label for="my-select">Type</label>
                            <select id="my-select" class="form-control" name="type">
                                <option value="fixed">Fixed</option>
                                <option value="precent"> precent</option>
                            </select>
                        </div>
                    <div class="form-group">
                        <label for="">Cart value</label>
                        <input type="text" class="form-control" name="cart_value" id="" aria-describedby="helpId"
                            placeholder=" enter category name">
                    </div>
                    <div class="form-group">
                        <label for="">Value </label>
                        <input type="text" class="form-control" name="value" id="" aria-describedby="helpId"
                            placeholder=" enter category name">
                    </div>
                    <button class="btn btn-sm">
                        save
                    </button>

            </div>
            {{-- <div class="modal-footer">
                <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> --}}
            </form>
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
  title: 'Do you want to Delete the Category ?',
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
