<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Sarvadhi Task">
    <meta name="keywords" content="Sarvadhi Task">
    <meta name="author" content="Sarvadhi Task">
    <title>Sarvadhi Task</title>
    <link rel="apple-touch-icon" href="{{ url('public/images/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('public/images/favicon.png') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/datatables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/apexcharts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/tether-theme-arrows.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/tether.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/shepherd-theme-default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/pickadate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/form-validation.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/components.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/dashboard-analytics.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/card-analytics.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/tour.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/style.css') }}">
    <!-- END: Custom CSS-->

    <style type="text/css">
        .errorMessage{
            color: red;
            font-size: 10px;
            font-weight: 600;
            letter-spacing: 0.5px;
        }
    </style>
    
    @stack('css')

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

	@include('user.layouts.header')
	
	@include('user.layouts.sidebar')

	@yield('body')
    
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    
    @include('user.layouts.footer')

    <!-- BEGIN: Vendor JS-->
    <script src="{{ url('public/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ url('public/js/datatables.min.js') }}"></script>
    <script src="{{ url('public/js/datatables.buttons.min.js') }}"></script>
    <script src="{{ url('public/js/buttons.html5.min.js') }}"></script>
    <script src="{{ url('public/js/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ url('public/js/datatables.bootstrap4.min.js') }}"></script>
    <script src="{{ url('public/js/apexcharts.min.js') }}"></script>
    <script src="{{ url('public/js/tether.min.js') }}"></script>
    <script src="{{ url('public/js/shepherd.min.js') }}"></script>
    
    <script src="{{ url('public/js/select2.full.min.js') }}"></script>
    <script src="{{ url('public/js/jqBootstrapValidation.js') }}"></script> 
    <script src="{{ url('public/js/picker.js') }}"></script>
    <script src="{{ url('public/js/picker.date.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ url('public/js/app-menu.js') }}"></script>
    <script src="{{ url('public/js/app.js') }}"></script>
    <script src="{{ url('public/js/components.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- <script src="{{ url('public/js/dashboard-analytics.js') }}"></script> -->
    <script src="{{ url('public/js/dashboard-ecommerce.js') }}"></script>
    <script src="{{ url('public/js/datatable.js') }}"></script>
    <script src="{{ url('public/js/account-setting.js') }}"></script>
    <!-- END: Page JS-->

    @stack('js')

</body>
<!-- END: Body-->

</html>


