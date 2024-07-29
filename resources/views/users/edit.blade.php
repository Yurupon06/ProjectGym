@extends('dashboard.master')

@section('title', 'Edit Pengguna')

@section('sidebar')
    @include('dashboard.sidebar')
@endsection

@section('page-title', 'Edit Pengguna')
@section('page', 'Edit Pengguna')

@section('main')
    @include('dashboard.main')

<!-- Tables -->
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Edit Pengguna</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <div class="card border-1 m-3 pt-3">
                            <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="mb-3 ms-3 me-3">
                                    <label for="name" class="form-label">Nama</label>
                                    <input type="text" class="ps-2 form-control border border-secondary-subtle @error('name') is-invalid @enderror" placeholder="Nama" aria-label="Nama" id="name" name="name" value="{{ old('name', $user->name) }}">
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3 ms-3 me-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="ps-2 form-control border border-secondary-subtle @error('email') is-invalid @enderror" placeholder="Email" aria-label="Email" id="email" name="email" value="{{ old('email', $user->email) }}">
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3 ms-3 me-3">
                                    <label for="password" class="form-label">Kata Sandi</label>
                                    <input type="password" class="ps-2 form-control border border-secondary-subtle @error('password') is-invalid @enderror" placeholder="Kata Sandi" aria-label="Kata Sandi" id="password" name="password">
                                    @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3 ms-3 me-3">
                                    <label for="role" class="form-label">Peran</label>
                                    <select class="form-control border border-secondary-subtle @error('role') is-invalid @enderror" id="role" name="role">
                                        <option value="admin" {{ old('role', $user->role) == 'admin' ? 'selected' : '' }}>Admin</option>
                                        <option value="customer" {{ old('role', $user->role) == 'customer' ? 'selected' : '' }}>Customer</option>
                                        <option value="cashier" {{ old('role', $user->role) == 'cashier' ? 'selected' : '' }}>Cashier</option>
                                    </select>
                                    @error('role')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="ms-3 me-3 text-end">
                                    <a href="{{ route('users.index') }}" type="button" class="btn bg-gradient-primary ws-15 my-4 mb-2">Batal</a>
                                    <button type="submit" class="btn bg-gradient-success ws-15 my-4 mb-2">Simpan</button>
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
