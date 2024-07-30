@extends('dashboard.master')
@section('title', 'Product Edit')
@section('sidebar')
    @include('dashboard.sidebar')
@endsection
@section('page-title', 'Product Edit')
@section('page', 'Product Edit')
@section('main')
    @include('dashboard.main')

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6 class="mb-0">Edit Product</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="card border-1 m-3 pt-3">
                            <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="mb-3 ms-3 me-3">
                                    <label for="product_category_id" class="form-label">Product Category ID</label>
                                    <input type="number" id="product_category_id" class="form-control border border-secondary-subtle @error('product_category_id') is-invalid @enderror" name="product_category_id" value="{{ old('product_category_id', $product->product_category_id) }}" placeholder="Edit Product Category ID">
                                    @error('product_category_id')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>


                                <div class="mb-3 ms-3 me-3">
                                    <label for="product_name" class="form-label">Product Name</label>
                                    <input type="text" id="product_name" class="form-control border border-secondary-subtle @error('product_name') is-invalid @enderror" name="product_name" value="{{ old('product_name', $product->product_name) }}" placeholder="Edit Product Name">
                                    @error('product_name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3 ms-3 me-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea id="description" class="form-control border border-secondary-subtle @error('description') is-invalid @enderror" name="description" rows="4" placeholder="Edit Description">{{ old('description', $product->description) }}</textarea>
                                    @error('description')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3 ms-3 me-3">
                                    <label for="price" class="form-label">Price</label>
                                    <input type="number" id="price" class="form-control border border-secondary-subtle @error('price') is-invalid @enderror" name="price" value="{{ old('price', $product->price) }}" placeholder="Edit Price" min="0" step="0.01">
                                    @error('price')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="ms-3 me-3 text-end">
                                    <a href="{{ route('product.index') }}" type="button" class="btn bg-gradient-primary ws-15 my-4 mb-2">Cancel</a>
                                    <button type="submit" class="btn bg-gradient-success ws-15 my-4 mb-2">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
