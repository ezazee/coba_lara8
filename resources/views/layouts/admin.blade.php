<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <title> @yield('title') Nyaku - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Dashboard Admin" name="description" />
    <meta content="NusantaraKu" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('/backend/images/nuku.ico') }}">
    @include('includes.admin.head-css')
</head>

@section('body')
   <!-- <body data-sidebar="dark"> -->
        <body  data-topbar="light">
        <!-- <div id="preloader"> 
            <div id="status"> 
                <div class="spinner-chase"> 
                    <div class="chase-dot"></div> 
                    <div class="chase-dot"></div> 
                    <div class="chase-dot"></div> 
                    <div class="chase-dot"></div> 
                    <div class="chase-dot"></div> 
                    <div class="chase-dot"></div> 
                </div> 
            </div> 
        </div> -->
@show
    <!-- Begin page -->
    <div id="layout-wrapper">
        @include('includes.admin.topbar')
        @include('includes.admin.sidebar')
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            @include('includes.admin.footer')
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    @include('includes.admin.right-sidebar')
    <!-- /Right-bar -->

    <!-- JAVASCRIPT -->
    @include('includes.admin.vendor-script')
</body>

</html>
