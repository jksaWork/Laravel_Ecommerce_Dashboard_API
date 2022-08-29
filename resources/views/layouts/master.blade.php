<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords"
        content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>{{ $OrganizationProfile->name }} | @yield('title' ,  'Dashboar')
    </title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('AdminPublic/uploads/' . $OrganizationProfile->logo)}}">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
        rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    {{-- sweetalert --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
    {{-- End Sweet Alert --}}
    <!--Livewire-->
    @livewireStyles
    <!--END Livewire-->
    {{-- switch --}}
    <link rel="stylesheet" type="text/css"
        href="{{asset('AdminPublic/app-assets/vendors/css/forms/toggle/bootstrap-switch.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('AdminPublic/app-assets/vendors/css/forms/toggle/switchery.min.css')}}">
    {{-- switch --}}
    {{-- select2 --}}
    <link rel="stylesheet" type="text/css" href="{{asset('AdminPublic/app-assets/vendors/css/forms/selects/select2.min.css')}}">
    {{-- end select2 --}}
    @if (app()->getLocale()== 'ar')
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('AdminPublic/app-assets/css-rtl/vendors.css')}}">
    <link rel="stylesheet" type="text/css"
        href="{{asset('AdminPublic/app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
    <link rel="stNo hint path defined for [sweetalert]. (View: /home/jksa/Desktop/Laravel Project/Laravel-ecommerce/resources/views/layouts/master.blade.php) ylesheet" type="text/css"
        href="{{asset('AdminPublic/app-assets/vendors/css/tables/extensions/responsive.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css"
        href="{{asset('AdminPublic/app-assets/vendors/css/tables/extensions/colReorder.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css"
        href="{{asset('AdminPublic/app-assets/vendors/css/tables/extensions/buttons.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css"
        href="{{asset('AdminPublic/app-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css"
        href="{{asset('AdminPublic/app-assets/vendors/css/tables/extensions/fixedHeader.dataTables.min.css')}}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('AdminPublic/app-assets/css-rtl/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('AdminPublic/app-assets/css-rtl/custom-rtl.css')}}">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css"
        href="{{asset('AdminPublic/app-assets/css-rtl/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('AdminPublic/app-assets/css-rtl/plugins/animate/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('AdminPublic/app-assets/css-rtl/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('AdminPublic/app-assets/css-rtl/pages/login-register.css')}}">
    <!-- END Page Level CSS-->
    {{-- Google fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    {{-- End Google fonts --}}
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('AdminPublic/assets/css/style-rtl.css')}}">
    <!-- END Custom CSS-->
    @else
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('AdminPublic/app-assets/css/vendors.css')}}">
    <link rel="stylesheet" type="text/css"
        href="{{asset('AdminPublic/app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
    <link rel="stylesheet" type="text/css"
        href="{{asset('AdminPublic/app-assets/vendors/css/tables/extensions/responsive.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css"
        href="{{asset('AdminPublic/app-assets/vendors/css/tables/extensions/colReorder.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css"
        href="{{asset('AdminPublic/app-assets/vendors/css/tables/extensions/buttons.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css"
        href="{{asset('AdminPublic/app-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css"
        href="{{asset('AdminPublic/app-assets/vendors/css/tables/extensions/fixedHeader.dataTables.min.css')}}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('AdminPublic/app-assets/css/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('AdminPublic/app-assets/css/custom.css')}}">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('AdminPublic/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('AdminPublic/app-assets/css-rtl/plugins/animate/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('AdminPublic/app-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('AdminPublic/app-assets/css/pages/login-register.css')}}">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('AdminPublic/assets/css/style.css')}}">
    <!-- END Custom CSS-->
    @endif


    <link rel="stylesheet" type="text/css" href="{{asset('AdminPublic/assets/css/general.css')}}">
    @stack('links')
    <style>
        *{
            text-transform: capitalize;
        }
    </style>
</head>

<body style="overflow-x: hidden" class="vertical-layout 2-columns fixed-navbar pace-done vertical-menu menu-expanded"
    data-open="click" data-menu="vertical-menu" data-col="2-columns">

    <!-- ////////////////////////////////////////////////////////////////////////////-->
    @include('includes.dashboard.topnav')
    @include('includes.dashboard.mainmenu')

    <div class="app-content content">
        {{ $slot ?? '' }}
        @yield('content')
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    @include('includes.dashboard.footer')
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <!-- BEGIN VENDOR JS-->
    <script src="{{asset('AdminPublic/app-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{asset('AdminPublic/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js')}}" type="text/javascript">
    </script>
    <script src="{{asset('AdminPublic/app-assets/vendors/js/tables/datatable/datatables.min.js')}}" type="text/javascript">
    </script>
    <script src="{{asset('AdminPublic/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js')}}"
        type="text/javascript">
    </script>
    <script src="{{asset('AdminPublic/app-assets/vendors/js/tables/buttons.colVis.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('AdminPublic/app-assets/vendors/js/tables/datatable/dataTables.colReorder.min.js')}}"
        type="text/javascript">
    </script>
    <script src="{{asset('AdminPublic/app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js')}}" type="text/javascript">
    </script>
    <script src="{{asset('AdminPublic/app-assets/vendors/js/tables/datatable/buttons.bootstrap4.min.js')}}" type="text/javascript">
    </script>
    <script src="{{asset('AdminPublic/app-assets/vendors/js/tables/datatable/dataTables.fixedHeader.min.js')}}"
        type="text/javascript">
    </script>

    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN MODERN JS-->
    <script src="{{asset('AdminPublic/app-assets/js/core/app-menu.js')}}" type="text/javascript"></script>
    <script src="{{asset('AdminPublic/app-assets/js/core/app.js')}}" type="text/javascript"></script>
    <script src="{{asset('AdminPublic/app-assets/vendors/js/forms/select/select2.full.min.js')}}" type="text/javascript">
    </script>
    <!-- END MODERN JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script> --}}
    {{-- SWEETALERT FOR LIVEWIRE --}}
    {{-- @include('sweetalert::alert') --}}
    {{-- END SWEETALERT FOR LIVEWIRE --}}
    <!-- END PAGE LEVEL JS-->
    <!--Livewire-->
    @livewireScripts
    <!--END Livewire-->
    {{-- alpinejs --}}
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    {{-- alpinejs --}}

    @stack('scripts')



    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {
                                        Livewire.on('triggerDelete', model_id => {
                                            console.log('tregered!');
                                            Swal.fire({
                                                title: '{{__('translation.delete.confirmation.message')}}',
                                                text: '{{__('translation.delete.confirmation.text')}}',
                                                icon: "warning",
                                                showCancelButton: true,
                                                confirmButtonColor: '#3085d6',
                                                cancelButtonColor: '#aaa',
                                                confirmButtonText: '{{__('translation.delete')}}'
                                            }).then((result) => {
                                         //if user clicks on delete
                                                if (result.value) {
                                             // calling destroy method to delete
                                                    Livewire.emit('delete', model_id)
                                             // success response
                                                    // Swal.fire({title: 'Contact deleted successfully!', icon: 'success'});
                                                } else {
                                                    Swal.fire({
                                                        title: '{{__('translation.operation.canceled')}}',
                                                        icon: 'success'
                                                    });
                                                }
                                            });
                                        });
                                    })

                                    //to close modal when payment to client-representative done
                                    window.livewire.on('DonePayment', (status, id) => {
                                    console.log("dfdf");
                                    $('#payModal'+id).modal('hide');
                                    });


    </script>
</body>

</html>
