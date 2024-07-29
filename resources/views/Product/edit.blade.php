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
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center mb-4">Edit Product</h2>
                    <form action="{{ route('products.update', $product->id_product) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Product Category ID</label>
                            <input type="text" class="form-control @error('product_category_id') is-invalid @enderror" name="product_category_id" value="{{ old('product_category_id', $product->product_category_id) }}" placeholder="Edit Id product">
                        
                            @error('product_category_id')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Product Name</label>
                            <input type="text" class="form-control @error('product_name') is-invalid @enderror" name="product_name" value="{{ old('product_name', $product->product_name) }}" placeholder="Edit Add Product">
                        
                            @error('product_name')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="5" placeholder="Edit description product">{{ old('description', $product->description) }}</textarea>
                        
                            @error('description')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-outline-success me-3">Edit</button>
                            <button type="reset" class="btn btn-outline-danger">Reset</button>
                        </div>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>
