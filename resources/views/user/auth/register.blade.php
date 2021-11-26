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
                                                <h4 class="mb-0">Register</h4>
                                            </div>
                                        </div>
                                        
                                        <p class="px-2">Welcome back, please register to your account.</p>

                                        <div class="card-content">
                                            <div class="card-body pt-1">
                                                <form action="{{ route('user.post.register') }}" method="post">
                                                    
                                                    {{ csrf_field() }}

                                                    <div class="form-group">
                                                        <label for="full_name" class="form-label">Full Name</label>
                                                        <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Full Name" value="{{ old('full_name') }}" aria-describedby="full_name" />

                                                        <!-- Start Error Part -->
                                                        <span class="errorMessage">{{ $errors->first('full_name') }}</span>
                                                        <!-- End Error Part -->
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="email" class="form-label">Email</label>
                                                        <input type="text" class="form-control" id="email" name="email" placeholder="E-mail" value="{{ old('email') }}" aria-describedby="email" />

                                                        <!-- Start Error Part -->
                                                        <span class="errorMessage">{{ $errors->first('email') }}</span>
                                                        <!-- End Error Part -->
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="password" class="form-label">Password</label>
                                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="{{ old('password') }}" aria-describedby="password" />

                                                        <!-- Start Error Part -->
                                                        <span class="errorMessage">{{ $errors->first('password') }}</span>
                                                        <!-- End Error Part -->
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="company_name" class="form-label">Company Name</label>
                                                        <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Company Name" value="{{ old('company_name') }}" aria-describedby="company_name" />

                                                        <!-- Start Error Part -->
                                                        <span class="errorMessage">{{ $errors->first('company_name') }}</span>
                                                        <!-- End Error Part -->
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="company_address" class="form-label">Company Address</label>
                                                        <input type="text" class="form-control" id="company_address" name="company_address" placeholder="Company Address" value="{{ old('company_address') }}" aria-describedby="company_address" />

                                                        <!-- Start Error Part -->
                                                        <span class="errorMessage">{{ $errors->first('company_address') }}</span>
                                                        <!-- End Error Part -->
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="gst_number" class="form-label">GST Number</label>
                                                        <input type="text" class="form-control" id="gst_number" name="gst_number" placeholder="GST Number" value="{{ old('gst_number') }}" aria-describedby="gst_number" />

                                                        <!-- Start Error Part -->
                                                        <span class="errorMessage">{{ $errors->first('gst_number') }}</span>
                                                        <!-- End Error Part -->
                                                    </div>

                                                    <button type="submit" class="btn btn-danger float-left btn-inline">Register</button>
                                                    <a href="{{ route('user.view.login') }}" class="btn btn-success float-right btn-inline">Login</a>
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