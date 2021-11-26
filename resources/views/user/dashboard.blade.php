@extends('user.layouts.app')

@section('body')

<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- Dashboard Analytics Start -->
            <section id="dashboard-analytics">
                <div class="row">

                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-header d-flex flex-column align-items-start pb-0">
                                <div class="avatar bg-rgba-danger p-50 m-0" style="padding:25px !important;">
                                    <div class="avatar-content">
                                        <i class="fa fa-user text-danger font-large-2"></i>
                                    </div>
                                </div>
                                <h2 class="text-bold-700 mt-1">{{ $vendorCount }}</h2>
                                <p class="mb-0" style="font-size:20px">Vendors</p>
                            </div>
                            <div class="card-content">
                                <div id="line-area-chart-3"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-header d-flex flex-column align-items-start pb-0">
                                <div class="avatar bg-rgba-success p-50 m-0" style="padding:25px !important;">
                                    <div class="avatar-content">
                                        <i class="fa fa-user text-success font-large-2"></i>
                                    </div>
                                </div>
                                <h2 class="text-bold-700 mt-1">{{ $productCount }}</h2>
                                <p class="mb-0" style="font-size:20px">Products</p>
                            </div>
                            <div class="card-content">
                                <div id="line-area-chart-2"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-header d-flex flex-column align-items-start pb-0">
                                <div class="avatar bg-rgba-warning p-50 m-0" style="padding:25px !important;">
                                    <div class="avatar-content">
                                        <i class="fa fa-user text-warning font-large-2"></i>
                                    </div>
                                </div>
                                <h2 class="text-bold-700 mt-1">{{ $invoiceCount }}</h2>
                                <p class="mb-0" style="font-size:20px">Invoice Created</p>
                            </div>
                            <div class="card-content">
                                <div id="line-area-chart-4"></div>
                            </div>
                        </div>
                    </div>


                </div>
            </section>

        </div>
    </div>
</div>
<!-- END: Content-->

@endsection