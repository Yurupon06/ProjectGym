@extends('dashboard.master')
@section('title', 'dashboard')
@section('sidebar')
    @include('dashboard.sidebar')
@endsection
@section('page-title', 'Dashboard')
@section('page', 'Dashboard')
@section('main')
    @include('dashboard.main')
    @include('dashboard.dashboard')
@endsection