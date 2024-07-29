@extends('dashboard.master')
@section('title', 'Product ')
@section('sidebar')
    @include('dashboard.sidebar')
@endsection
@section('page-title', 'Product ')
@section('page', 'Product')
@section('main')
@include('dashboard.main')
<div class="container-fluid py-4">
    <h3>Product List</h3>
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header pb-0">
                    <a href="{{ route('product.create') }}"><span class="badge badge-sm bg-gradient-primary mb-3 fs-6">Add New Item</span></a>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0" id="datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Product Name</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $key => $product)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td class="align-middle text-center text-sm">
                                        <a href="{{ route('product.edit', $product->id) }}"><span class="badge badge-sm bg-gradient-success">Edit</span></a>
                                        <form action="{{ route('product.destroy', $product->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="badge badge-sm bg-gradient-danger" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
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