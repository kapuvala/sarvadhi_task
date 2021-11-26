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
                                <h4 class="card-title">Create Vendor</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <form action="{{ route('user.post.vendor') }}" method="post" class="form form-vertical">
                                        @csrf
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical">Full Name</label>
                                                        <input type="text" class="form-control" name="full_name" value="{{ old('full_name') }}" placeholder="Full Name">

                                                        <p class="errorMessage">{{ $errors->first('full_name') }}</p>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical">Company Name</label>
                                                        <input type="text" class="form-control" name="company_name" value="{{ old('company_name') }}" placeholder="Company Name">

                                                        <p class="errorMessage">{{ $errors->first('company_name') }}</p>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical">Company Address</label>
                                                        <input type="text" class="form-control" name="company_address" value="{{ old('company_address') }}" placeholder="Company Address">

                                                        <p class="errorMessage">{{ $errors->first('company_address') }}</p>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical">GST Number</label>
                                                        <input type="text" class="form-control" name="gst_number" value="{{ old('gst_number') }}" placeholder="GST Number">

                                                        <p class="errorMessage">{{ $errors->first('gst_number') }}</p>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical">Currency</label>
                                                        <select name="currency" class="form-control">
                                                            @foreach(getCurrency() as $currency)
                                                            <option value="{{ $currency->currency }}" {{ old('currency') == $currency->currency ? 'selected' : '' }}>{{ $currency->currency }}</option>
                                                            @endforeach
                                                        </select>

                                                        <p class="errorMessage">{{ $errors->first('currency') }}</p>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-success mr-1 mb-1">Submit</button>
                                                    <button type="reset" class="btn btn-outline-warning mr-1 mb-1">Reset</button>
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