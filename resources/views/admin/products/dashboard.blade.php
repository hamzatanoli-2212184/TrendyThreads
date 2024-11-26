<!-- resources/views/admin/dashboard.blade.php -->

@extends('layouts.admin')

@section('content')
    <h1>Welcome to the Admin Dashboard</h1>
    <p>Manage your products and other settings from here.</p>
    <a href="{{ route('admin.products.index') }}" class="btn btn-primary">Go to Products</a>
@endsection
