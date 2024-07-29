@extends('dashboard.master')
@section('title', 'Product ')
@section('sidebar')
    @include('dashboard.sidebar')
@endsection
@section('page-title', 'Product ')
@section('page', 'Product')
@section('main')
@include('dashboard.main')

<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-12"> 
            <div class="card shadow-lg border-0 rounded">
                <div class="card-header" style="background-color: #ffffff;"> 
                    <h3 class="mb-0 text-center text-secondary">Add Product</h3> 
                </div>
                <div class="card-body">
                    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-4">
                            <label for="product_category_id" class="form-label">Product Category ID</label>
                            <input type="text" id="product_category_id" class="form-control @error('product_category_id') is-invalid @enderror" name="product_category_id" value="{{ old('product_category_id') }}" placeholder="Enter Product Category ID">
                            @error('product_category_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="product_name" class="form-label">Product Name</label>
                            <input type="text" id="product_name" class="form-control @error('product_name') is-invalid @enderror" name="product_name" value="{{ old('product_name') }}" placeholder="Enter Product Name">
                            @error('product_name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="description" class="form-label">Description</label>
                            <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description" rows="4" placeholder="Enter Description">{{ old('description') }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" id="price" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" placeholder="Enter Price" min="0" step="0.01">
                            @error('price')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-success">Submit</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection