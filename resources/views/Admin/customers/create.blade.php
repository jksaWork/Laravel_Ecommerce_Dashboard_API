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
                        <button href='{{ route('customers.create') }}' class="btn btn-round btn-info" type="button"><i
                                class="la la-plus la-sm"></i>
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
                                                    <form action="{{ route('customers.store') }}" method="post">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="">User name</label>
                                                                    <input type="text" class="form-control" name="name"
                                                                        id="" aria-describedby="helpId" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="">User Email</label>
                                                                    <input type="text" class="form-control" name="email"
                                                                        id="" aria-describedby="helpId" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="">User Phone</label>
                                                                    <input type="text" class="form-control" name="phone"
                                                                        id="" aria-describedby="helpId" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="">User Password</label>
                                                                    <input type="text" class="form-control" name="password"
                                                                        id="" aria-describedby="helpId" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                  <label for=""> Gender</label>
                                                                  <select class="form-control" name="gender" id="">
                                                                    <option value='male'> Male </option>
                                                                    <option value='female'> FeMale</option>
                                                                  </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                  <label for="">Status</label>
                                                                  <select class="form-control" name="status" id="">
                                                                    <option value='male'> Active </option>
                                                                    <option value='female'> Not Active</option>
                                                                  </select>
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-primary"> Save</button>
                                                        </div>
                                                    </form>
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
