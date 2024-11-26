@extends('layouts.admin') <!-- Assuming you have an admin layout -->

@section('content')
    <div class="container">
        <h1 class="my-4">Edit Product</h1>
        
        <!-- Show Validation Errors -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Edit Product Form -->
        <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Product Name</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ $product->name }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" class="form-control" required>{{ $product->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" id="price" name="price" class="form-control" value="{{ $product->price }}" required>
            </div>
            <div class="form-group">
                <label for="image">Product Image</label>
                @if($product->image)
                    <div>
                        <img src="{{ asset('storage/' . $product->image) }}" alt="Current Product Image" style="width: 150px; height: auto;">
                    </div>
                    <br>
                @endif
                <input type="file" id="image" name="image" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary mt-3">Update Product</button>
        </form>
    </div>
@endsection
