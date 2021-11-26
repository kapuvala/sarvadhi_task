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
                                    <h4 class="card-title">Products</h4>
                                    <a href="{{ route('user.create.product') }}" class="btn btn-danger waves-effect waves-light">+ Create Product</a>
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
                                                        <th> Image </th>
                                                        <th> Name </th>
                                                        <th> Unit </th>
                                                        <th> Price </th>
                                                        <!-- <th> Action </th> -->
                                                    </tr>
                                                </thead>
                                                
                                                <tbody>
                                                    @foreach($products as $key => $product)
                                                    <tr>
                                                        <td> {{ ++$key }} </td>
                                                        
                                                        <td width="20%">
                                                            <img src="{{ url('public/images/product/'.$product->image) }}" alt="{{ $product->image }}" width="50%">
                                                        </td>
                                                        
                                                        <td> {{ $product->name }} </td>
                                                        <td> {{ $product->unit }} </td>
                                                        <td> {{ $product->price }} </td>
                                                        
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