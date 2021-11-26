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
    <link rel="apple-touch-icon" href="{{ url('public/favicon.ico') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('public/images/favicon.png') }}">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/vendors.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/components.css') }}">
    <!-- <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/dark-layout.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/semi-dark-layout.css"> -->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/authentication.css') }}">
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
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page" data-open="hover" data-menu="horizontal-menu" data-col="1-column">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="row flexbox-container">
                    <div class="col-xl-8 col-11 d-flex justify-content-center">
                        <div class="card bg-authentication rounded-0 mb-0">
                            <div class="row m-0">
                                <div class="col-lg-6 d-lg-block d-none text-center align-self-center px-1 py-0">
                                    <img src="{{ url('public/images/login.png') }}" alt="Seedle">
                                </div>
                                <div class="col-lg-6 col-12 p-0">
                                    <div class="card rounded-0 mb-0 px-2">
                                        <div class="card-header pb-1">
                                            <div class="card-title">
                                                <h4 class="mb-0">Login</h4>
                                            </div>
                                        </div>
                                        
                                        <p class="px-2">Welcome back, please login to your account.</p>

                                        <div class="card-content">
                                            <div class="card-body pt-1">
                                                <form action="{{ route('admin.post.login') }}" method="post">
                                                    
                                                    {{ csrf_field() }}

                                                    <fieldset class="form-label-group form-group position-relative has-icon-left">
                                                        <input type="text" class="form-control" id="email" placeholder="Email" name="email">
                                                        <div class="form-control-position">
                                                            <i class="feather icon-mail"></i>
                                                        </div>
                                                        <label for="email">Email</label>
                                                        
                                                        @if(Session::has('invalidEmail'))
                                                        <p class="errorMessage">{{ Session::get('invalidEmail') }}</p>
                                                        @endif
                                                        <p class="errorMessage">{{ $errors->first('email') }}</p>

                                                    </fieldset>

                                                    <fieldset class="form-label-group position-relative has-icon-left">
                                                        <input type="password" class="form-control" id="user-password" placeholder="Password" name="password">
                                                        <div class="form-control-position">
                                                            <i class="feather icon-lock"></i>
                                                        </div>
                                                        <label for="user-password">Password</label>
                                                        
                                                        @if(Session::has('invalidPassword'))
                                                        <p class="errorMessage">{{ Session::get('invalidPassword') }}</p>
                                                        @endif
                                                        <p class="errorMessage">{{ $errors->first('password') }}</p>

                                                    </fieldset>
                                                    <div class="form-group d-flex justify-content-between align-items-center">
                                                        <div class="text-left">
                                                            <fieldset class="checkbox" name="remember_me">
                                                                <div class="vs-checkbox-con vs-checkbox-danger">
                                                                    <input type="checkbox" name="remember_me">
                                                                    <span class="vs-checkbox">
                                                                        <span class="vs-checkbox--check">
                                                                            <i class="vs-icon feather icon-check"></i>
                                                                        </span>
                                                                    </span>
                                                                    <span class="">Remember me</span>
                                                                </div>
                                                            </fieldset>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-danger float-left btn-inline adminLogin">Login</button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="login-footer">
                                            <div class="divider">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{ url('public/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ url('public/js/app-menu.js') }}"></script>
    <script src="{{ url('public/js/app.js') }}"></script>
    <script src="{{ url('public/js/components.js') }}"></script>
    <!-- END: Theme JS-->

</body>
<!-- END: Body-->

</html>