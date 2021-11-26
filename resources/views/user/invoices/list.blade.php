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
                                    <h4 class="card-title">Invoices</h4>
                                    <a href="{{ route('user.create.invoice') }}" class="btn btn-danger btn-sm waves-effect waves-light">+ Create Invoice</a>
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
                                                        <th> Vendor Name </th>
                                                        <th> Product/Quantity </th>
                                                        <th> Invoice Number </th>
                                                        <th> Description </th>
                                                        <th> Action </th>
                                                    </tr>
                                                </thead>
                                                
                                                <tbody>
                                                    @foreach($invoices as $key => $invoice)
                                                    <tr>
                                                        <td> {{ ++$key }} </td>
                                                        
                                                        <td>{{ $invoice->getVendor->full_name }}</td>
                                                        
                                                        <td>
                                                            @foreach($invoice->getProductQty as $getProductQty)
                                                                <ul>
                                                                    <li>Product Name : {{ $getProductQty->product_name }}</li>
                                                                    <li>Product Quantity : {{ $getProductQty->qty }}</li>
                                                                </ul>
                                                            @endforeach    
                                                        </td>

                                                        <td> {{ $invoice->invoice_number }} </td>
                                                        <td> {{ Str::limit($invoice->desc, 15, '...') }} </td>
                                                        
                                                        <td>
                                                            <a href="{{ route('user.edit.invoice', $invoice->id) }}" class="btn btn-success btn-sm waves-effect waves-light">Edit</a>

                                                            <a href="{{ route('user.save.invoice', $invoice->id) }}" class="btn btn-warning btn-sm waves-effect waves-light">Save Invoice</a>
                                                            
                                                            <a href="{{ route('user.download.invoice', $invoice->id) }}" class="btn btn-info btn-sm waves-effect waves-light">Download Invoice</a>

                                                            <a href="{{ route('user.send.invoice', $invoice->id) }}" class="btn btn-primary btn-sm waves-effect waves-light">Send Invoice</a>

                                                            <!-- <a href="" class="btn btn-danger btn-sm waves-effect waves-light">Delete</a> -->
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