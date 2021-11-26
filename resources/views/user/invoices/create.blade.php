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
            <!-- Basic Vertical form layout section start -->
            <section id="basic-vertical-layouts">
                <div class="row match-height">
                    <div class="col-md-8 offset-lg-2 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Create Invoice</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <form action="{{ route('user.post.invoice') }}" method="post" class="form form-vertical" enctype="multipart/form-data" id="InvoiceForm">
                                        @csrf
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical">Select Vendor</label>
                                                        <select name="vendor_id" class="form-control" required>
                                                            @foreach(getVendor() as $vendor)
                                                            <option value="{{ $vendor->id }}" {{ old('vendor_id') == $vendor->id ? 'selected' : '' }}>{{ $vendor->full_name }}</option>
                                                            @endforeach
                                                        </select>

                                                        <p class="errorMessage">{{ $errors->first('vendor_id') }}</p>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <a href="javascript:;" class="btn btn-success btn-sm mb-2 addProductQty">Add Product</a>

                                                    <input type="hidden" name="products" class="products" value="">
                                                    <div class="row">
                                                        <div class="col-5">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control name" name="name[]" value="{{ old('name') }}" placeholder="Product Name" required>

                                                                <p class="errorMessage">{{ $errors->first('name') }}</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control qty" name="qty[]" value="{{ old('qty') }}" placeholder="Product Quantity" required>

                                                                <p class="errorMessage">{{ $errors->first('qty') }}</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-2">
                                                            <a href="javascript:;" class="btn btn-danger removeProductQty"><i class="fa fa-close"></i></a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical">Invoice Number</label>
                                                        <input type="text" class="form-control" name="invoice_number" value="{{ old('invoice_number') }}" placeholder="Invoice Number" required>

                                                        <p class="errorMessage">{{ $errors->first('invoice_number') }}</p>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical">Description</label>
                                                        <textarea class="form-control" name="desc" required>{{ old('desc') }}</textarea>

                                                        <p class="errorMessage">{{ $errors->first('desc') }}</p>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <button type="button" class="btn btn-success mr-1 mb-1 submitInvoiceForm">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- // Basic Vertical form layout section end -->
        </div>
    </div>
</div>

@endsection

@push('js')
    <script type="text/javascript">
        
        $(document).ready(function(){
            var count = 1;
            $('.addProductQty').on('click', function(){
                var _html = "\
                    <div class='row'>\
                        <div class='col-5'>\
                            <div class='form-group'>\
                                <input type='text' class='form-control name' name='name[]' value='' placeholder='Product Name' required>\
                            </div>\
                        </div>\
                        <div class='col-5'>\
                            <div class='form-group'>\
                                <input type='text' class='form-control qty' name='qty[]' value='' placeholder='Product Quantity' required>\
                            </div>\
                        </div>\
                        <div class='col-2'>\
                            <a href='javascript:;' class='btn btn-danger removeProductQty'><i class='fa fa-close'></i></a>\
                        </div>\
                    </div>\
                ";
                if(count < 5){
                    $('.addProductQty').after(_html);
                    count++;
                }
            }); 

            $(document).on('click', '.removeProductQty', function(){
                if(count > 1){
                    $(this).parent().parent().remove();
                    count--;
                }
            });

            $('.submitInvoiceForm').on('click', function(){
                
                var productName = [];
                $('.name').each(function(){
                    productName.push($(this).val());
                });

                var productQty = [];
                $('.qty').each(function(){
                    productQty.push($(this).val());
                });

                var length = productName.length;
                var products = [];
                for(var i=0; i < length; i++){
                    products.push({'name' : productName[i], 'qty' : productQty[i]});
                }

                $('.products').val(JSON.stringify(products));

                $('#InvoiceForm').submit();
            });      
        });

    </script>
@endpush