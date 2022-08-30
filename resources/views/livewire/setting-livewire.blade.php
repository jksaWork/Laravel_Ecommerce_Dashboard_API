<div>
    {{-- @dd($contact) --}}
    <div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title mb-0">Setting </h3>
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
                                                    <form action="">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                  <label for="">name </label>
                                                                  <input type="text"
                                                                  wire:model='name'
                                                                    class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                                                    @error('name')
                                                                  <small id="helpId" class="form-text text-muted">{{ $message }}</small>

                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                  <label for="">email </label>
                                                                  <input type="text"
                                                                  wire:model='email'
                                                                    class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                                                    @error('name')
                                                                    <small id="helpId" class="form-text text-muted">{{ $message }}</small>
                                                                      @enderror
                                                                </div>
                                                            </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                      <label for="">phone 1</label>
                                                                      <input type="text"
                                                                      wire:model='phone_1'
                                                                        class="form-control" name="" id="" aria-describedby="helpId" placeholder="">

                                                                       @error('phone_1')
                                                                       <small id="helpId" class="form-text text-muted">{{ $message }}</small>
                                                                         @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                      <label for="">phone 2 </label>
                                                                      <input type="text"
                                                                      value="{{ setting()->get('name') ?? ' ' }}"
                                                                      wire:model='phone_2'
                                                                        class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                                                      @error('phone_2')
                                                                       <small id="helpId" class="form-text text-muted">{{ $message }}</small>
                                                                         @enderror
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                      <label for="">location </label>
                                                                      <input type="text"
                                                                      value="{{ setting()->get('name') ?? ' ' }}"
                                                                      wire:model='location'
                                                                        class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                                                      @error('location')
                                                                       <small id="helpId" class="form-text text-muted">{{ $message }}</small>
                                                                         @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button class="btn btn-primary" type="button" wire:click='SaveSetting'> Save Setting</button>
                                                    </form>
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
