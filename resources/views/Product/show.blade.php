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
            <div class="card border-0 shadow-sm rounded card-custom">
                <div class="card-header bg-secondary">
                    <h3 class="card-title">Biodata Penulis Buku</h3>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <strong>Nama Penulis: </strong>
                            <span>{!! $penulis->nama_penulis !!}</span>
                        </li>
                        <li class="list-group-item">
                            <strong>Tanggal Lahir: </strong>
                            <span>{!! $penulis->tanggal_lahir !!}</span>
                        </li>
                        <li class="list-group-item">
                            <strong>Email: </strong>
                            <span>{!! $penulis->email !!}</span>
                        </li>
                        <li class="list-group-item">
                            <strong>Alamat: </strong>
                            <span>{!! $penulis->alamat !!}</span>
                        </li>
                    </ul>
                </div>
                <div class="card-footer text-center">
                    <a href="{{ route('penuliss.index') }}" class="btn btn-outline-dark">Kembali</a>
                    <a href="{{ route('penuliss.edit', $penulis->id_penulis) }}" class="btn btn-outline-success">Edit</a>
                    <form action="{{ route('penuliss.destroy', $penulis->id_penulis) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Apakah Anda Yakin ?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

