@extends('admin.layouts.app')

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
                                    <h4 class="card-title">Users</h4>
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
                                                        <th> Full Name </th>
                                                        <th> Email </th>
                                                        <th> Company Name </th>
                                                        <th> Company Address </th>
                                                        <th> GST Number </th>
                                                        <th> Action </th>
                                                    </tr>
                                                </thead>
                                                
                                                <tbody>
                                                    @foreach($users as $key => $user)
                                                    <tr>
                                                        <td> {{ ++$key }} </td>
                                                        
                                                        <td>{{ $user->full_name }}</td>
                                                        
                                                        <td> {{ $user->email }} </td>
                                                        <td> {{ $user->company_name }} </td>
                                                        <td> {{ $user->company_address }} </td>
                                                        <td> {{ $user->gst_number }} </td>
                                                        
                                                        <td>
                                                            <a href="{{ route('admin.archive.user', $user->id) }}" class="btn btn-danger btn-sm waves-effect waves-light">Archive</a>
                                                        </td>
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