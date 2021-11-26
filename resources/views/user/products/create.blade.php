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
                                <h4 class="card-title">Create Product</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <form action="{{ route('user.post.product') }}" method="post" class="form form-vertical" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical">Product Image</label>
                                                        <input type="file" class="form-control" name="image" value="{{ old('image') }}" >

                                                        <p class="errorMessage">{{ $errors->first('image') }}</p>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical">Product Name</label>
                                                        <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Product Name">

                                                        <p class="errorMessage">{{ $errors->first('name') }}</p>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical">Product Unit</label>
                                                        <select name="unit" class="form-control">
                                                            @foreach(getUnit() as $unit)
                                                            <option value="{{ $unit->unit }}" {{ old('unit') == $unit->unit ? 'selected' : '' }}>{{ $unit->unit }}</option>
                                                            @endforeach
                                                        </select>

                                                        <p class="errorMessage">{{ $errors->first('unit') }}</p>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical">Product Price</label>
                                                        <input type="text" class="form-control" name="price" value="{{ old('price') }}" placeholder="Product Price">

                                                        <p class="errorMessage">{{ $errors->first('price') }}</p>
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