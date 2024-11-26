@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Shop</h1>

    <!-- Add Product Button -->
    <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Add Product</a>

    <!-- Products Table -->
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->description }}</td>
                <td>
                    @if($product->image)
                    <img src="{{ asset('storage/' . $product->image) }}" width="50">
                    @else
                    No Image
                    @endif
                </td>
                <td>
                    <!-- Edit Button -->
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit</a>

                    <!-- Delete Button -->
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
