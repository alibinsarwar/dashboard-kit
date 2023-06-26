<!DOCTYPE html>
<html lang="en">
<head>
    <title>DashboardKit Bootstrap 5 Admin Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="DashboardKit is made using Bootstrap 5 design framework. Download the free admin template & use it for your project.">
    <meta name="keywords" content="DashboardKit, Dashboard Kit, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Free Bootstrap Admin Template">
    <meta name="author" content="DashboardKit ">
    <link rel="icon" href="{{asset('admin_theme/images/favicon.svg')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('admin_theme/fonts/feather.css')}}">
    <link rel="stylesheet" href="{{asset('admin_theme/fonts/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('admin_theme/fonts/material.css')}}">

    <!-- vendor css -->
    <link rel="stylesheet" href="{{asset('admin_theme/css/style.css')}}" id="main-style-link">
    <link href="//gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/css/dataTables.checkboxes.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.css"/>

    @yield('css')
    <style>
        .table_head{
            display:flex;
            justify-content:space-between;
            padding: 15px 20px !important;
        }
        .dataTables_paginael , .dataTables_filter{
            padding: 20px 20px 0px 0px !important;
            float: right !important;
        }
        .dataTables_info , .dataTables_length{
            padding: 20px 0px 0px 20px !important;
        }
        .dataTables_length >label{
            display: inline-flex !important;
        }
        .dataTables_length >label > select{
            margin: 0px 10px !important;
        }
        .dataTables_filter , .dataTables_length{
            padding-bottom: 10px !important;
        } 
        .dataTables_paginate{
            padding: 20px 20px 0px 0px !important;
            float: right !important;
        }
    </style>
</head>

<body>
    @include('admin.components.navbar')
    @include('admin.components.sidebar')
    <div class="pc-container">
        @yield('content')
    </div>
    <div id="notification"></div>
    <script src="{{asset('admin_theme/js/jquery.min.js')}}"></script>
    <script src="{{asset('admin_theme/js/vendor-all.min.js')}}"></script>
    <script src="{{asset('admin_theme/js/plugins/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin_theme/js/plugins/feather.min.js')}}"></script>
    <script src="{{asset('admin_theme/js/pcoded.min.js')}}"></script>
    {{-- <script src="{{asset('admin_theme/js/plugins/apexcharts.min.js')}}"></script> --}}
    {{-- <script src="{{asset('admin_theme/js/pages/dashboard-sale.js')}}"></script> --}}
    <script src="{{ asset('admin_theme/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('admin_theme/js/sweetalert2.js')}}"></script>
    <script src="{{ asset('admin_theme/js/bootstrap-notify.js')}}"></script>
    <script src="//gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/js/dataTables.checkboxes.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
    {{-- Alert Messages --}}
    @if(session('success'))
    <script>
            toastr.success("{{ session('success') }}");
    </script>
    @elseif(session('error'))
    <script>
        toastr.error("{{ session('error') }}");
    </script>
    @endif
    <script>
        $(document).ready(function(){
            
            $('.dropify').dropify();
            // Datatable Initalized
            var table = $('.datatables').DataTable({
                "sort": false,
                "ordering": false,
                "pagingType": "full_numbers",
                responsive: true,
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search records",
                }
            });
        })
        // General Delete Function
        function deleteAlert(url) {
            console.log("efwref");
            Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    location.href = url;
                }
            });
        }
    </script>
    
    @yield('js')
</body>

</html>