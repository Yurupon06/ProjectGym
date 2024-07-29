@extends('dashboard.master')
<<<<<<< HEAD

@section('title', 'Edit Product Category')

@section('sidebar')
    @include('dashboard.sidebar')
@endsection

@section('page-title', 'Edit Product Category')
@section('page', 'EditProductCategory')

@section('main')
    @include('dashboard.main')

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header pb-0">
                        <h6>Edit Product Category</h6>
                    </div>
                    <div class="card-body px-0 pb-2">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('productcategories.update', $category->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group mx-2">
                                <label for="category_name">Category Name</label>
                                <input type="text" class="form-control" id="category_name" name="category_name" value="{{ old('category_name', $category->category_name) }}" required>
                            </div>
                            <button type="submit" class="btn btn-primary ms-2 mt-4">Update Category</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
=======
@section('title', 'productcat Edit')
@section('sidebar')
    @include('dashboard.sidebar')
@endsection
@section('page-title', 'productcat Edit')
@section('page', 'productcat Edit')
@section('main')
    @include('dashboard.main')

<!-- Tables -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Edit product category</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <div class="card border-1 m-3 pt-3">
                  <form action="{{ route('productcategories.update', $productcat->id)}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                      <div class="mb-3 ms-3 me-3">
                        <label for="category_name" class="form-label">category_name</label>
                        <input type="text" class="ps-2 form-control border border-secondary-subtle @error('category_name') is-invalid @enderror" placeholder="category_name" aria-label="category_name" id="category_name" name="category_name" value="{{ old('category_name', $productcat->category_name) }}">
                        @error('category_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                      <div class="mb-3 ms-3 me-3">
                        <label for="type" class="form-label">type</label>
                        <input type="text" class="ps-2 form-control border border-secondary-subtle @error('type') is-invalid @enderror" placeholder="type" aria-label="type" id="type" name="type" value="{{ old('type', $productcat->type) }}">
                        @error('type')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="mb-3 ms-3 me-3">
                        <label for="cycle" class="form-label">cycle</label>
                        <input type="number" class="ps-2 form-control border border-secondary-subtle @error('cycle') is-invalid @enderror" placeholder="cycle" aria-label="cycle" id="cycle" name="cycle" value="{{ old('cycle', $productcat->cycle) }}">
                        @error('cycle')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="ms-3 me-3 text-end">
                          <a href="{{ route('productcategories.index')}}" type="button" class="btn bg-gradient-primary ws-15 my-4 mb-2">Cancel</a>
                          <button type="submit" class="btn bg-gradient-success ws-15 my-4 mb-2">Save</button>
                      </div>
                  </form>
                </div>
              </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  


@endsection
>>>>>>> c16c813f9f4ba1933478f17a4f95e270e2f1d852
