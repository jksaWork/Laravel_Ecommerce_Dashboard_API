@extends('layouts.master')
@section('title' , 'mohammed altigani');
@section('content')
<div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title mb-0">Products</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        {{-- Breadcrumbs::render('clients') --}}
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-right col-md-6 col-12">
                <div class="btn-group">
                    <a href="{{ route('products.create') }}" class="btn btn-round btn-info" type="button"><i
                            class="la la-plus la-sm"></i>
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
                                        <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">name </label>
                                                    <input type="text" class="form-control" name="name" id=""
                                                        aria-describedby="helpId" placeholder="type a product name ">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">short descrption </label>
                                                    <input type="text" class="form-control" name="short_descrption" id=""
                                                        aria-describedby="helpId" placeholder="type a product name ">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">price </label>
                                                    <input type="text" class="form-control" name="price" id=""
                                                        aria-describedby="helpId" placeholder="type a product name ">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label >stock </label>
                                                    <select name="stock" class="form-control">
                                                        <option value="inStock">in stock</option>
                                                        <option value="outOfStock">out of stock</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Quantitiy </label>
                                                    <input type="text" class="form-control" name="quantitiy" id=""
                                                        aria-describedby="helpId" placeholder="type a product name ">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label > Category </label>
                                                    <select name="category_id" class="form-control" >
                                                        @foreach ($Categories as $Category)
                                                            <option value="{{ $Category->id }}">{{ $Category->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label for="">SKU</label>
                                                <input type="text"
                                                    class="form-control" name="SKU" id="" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label for="">image</label>
                                                <input type="file"
                                                    class="form-control" name="image" id="" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </div>
                                            <div class="row m-2">
                                                <button class="btn btn-primary">save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
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
                <form action="{{ route('categories.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">category name</label>
                        <input type="text" class="form-control" name="name" id="" aria-describedby="helpId"
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
