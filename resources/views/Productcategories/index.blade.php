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
                        <a href="{{ route('productcategories.create') }}">
                            <span class="badge badge-sm bg-gradient-primary mb-3 fs-6">Add New Item</span>
                        </a>
                        <h6>Product Categories</h6>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0" id="datatable">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Category Name</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    {{ $loop->iteration }}
                                                </div>
                                            </td>
                                            <td>
                                                {{ $category->category_name }}
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <a href="{{ route('productcategories.edit', $category->id) }}">
                                                    <span class="badge badge-sm bg-gradient-success">Edit</span>
                                                </a>
                                                <form action="{{ route('productcategories.destroy', $category->id) }}" method="POST" style="display:inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="badge badge-sm bg-gradient-danger" onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>
                                                </form>
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
@endsection
