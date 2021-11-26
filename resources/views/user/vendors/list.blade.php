@extends('user.layouts.app')

@section('body')

<!-- BEGIN: Content-->
   <div class="app-content content">
        
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>

        <div class="content-wrapper">
            <div class="content-body">
                <!-- Zero configuration table -->
                <section id="basic-datatable">
                    <div class="row">


                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Vendors</h4>
                                    <a href="{{ route('user.create.vendor') }}" class="btn btn-danger waves-effect waves-light">+ Create Vendors</a>
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
				                        @if(session()->has('false'))
				                            <div class="alert alert-danger">
				                                {{session()->get('false')}}
				                            </div>
				                        @endif
				                        @if(session()->has('true'))
				                            <div class="alert alert-success">
				                                {{session()->get('true')}}
				                            </div>
				                        @endif
                                        <div class="table-responsive">
                                            <table class="table zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th> No </th>
                                                        <th> Fullname </th>
                                                        <th> Company Name </th>
                                                        <th> Company Address </th>
                                                        <th> GST Number </th>
                                                        <th> Currency </th>
                                                        <!-- <th> Action </th> -->
                                                    </tr>
                                                </thead>
                                                
                                                <tbody>
                                                    @foreach($vendors as $key => $vendor)
                                                    <tr>
                                                        <td> {{ ++$key }} </td>
                                                        
                                                        <td> {{ $vendor->full_name }} </td>
                                                        <td> {{ $vendor->company_name }} </td>
                                                        <td> {{ $vendor->company_address }} </td>
                                                        <td> {{ $vendor->gst_number }} </td>
                                                        <td> {{ $vendor->currency }} </td>
                                                        
                                                        <!-- <td>
                                                            <a href="" class="btn btn-success btn-sm waves-effect waves-light">Edit</a>

                                                            <a href="" class="btn btn-danger btn-sm waves-effect waves-light">Delete</a>
                                                        </td> -->
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
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
    <!-- END: Content-->

@endsection