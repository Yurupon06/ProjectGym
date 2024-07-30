@extends('dashboard.master')

@section('title', 'Add User')

@section('sidebar')
    @include('dashboard.sidebar')
@endsection

@section('page-title', 'Add User')
@section('page', 'Add User')

@section('main')
    @include('dashboard.main')

<!-- Tables -->
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>User New</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <div class="card border-1 m-3 pt-3">
                            <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3 ms-3 me-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="ps-2 form-control border border-secondary-subtle @error('name') is-invalid @enderror" placeholder="Name" aria-label="Nama" id="name" name="name" value="{{ old('name') }}">
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3 ms-3 me-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="ps-2 form-control border border-secondary-subtle @error('email') is-invalid @enderror" placeholder="Email" aria-label="Email" id="email" name="email" value="{{ old('email') }}">
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3 ms-3 me-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="ps-2 form-control border border-secondary-subtle @error('password') is-invalid @enderror" placeholder="Password" aria-label="Kata Sandi" id="password" name="password">
                                    @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3 ms-3 me-3">
                                    <label for="role" class="form-label">Role</label>
                                    <select class="form-control border border-secondary-subtle @error('role') is-invalid @enderror" id="role" name="role">
                                        <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                                        <option value="customer" {{ old('role') == 'customer' ? 'selected' : '' }}>Customer</option>
                                        <option value="cashier" {{ old('role') == 'cashier' ? 'selected' : '' }}>Cashier</option>
                                    </select>
                                    @error('role')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="ms-3 me-3 text-end">
                                    <a href="{{ route('users.index') }}" type="button" class="btn bg-gradient-primary ws-15 my-4 mb-2">Cancel</a>
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
