@extends('dashboard.master')
@section('title', 'Product Categories')
@section('sidebar')
    @include('dashboard.sidebar')
@endsection
@section('page-title', 'Product Categories')
@section('page', 'ProductCategories')
@section('main')
    @include('dashboard.main')

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header pb-0">
                        <h6>Create Categorie</h6>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="p-3">
                            <form action="{{ route('productcategories.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="category_name" class="form-label">Name Categorie</label>
                                    <input type="text" class="form-control" id="category_name" name="category_name" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Add</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection