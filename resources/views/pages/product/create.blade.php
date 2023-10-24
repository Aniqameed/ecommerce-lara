@extends('layouts.main')

@section('content')
<div class="container">
    <h2>Create a New Product</h2>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
        @csrf

        {{-- <div class="form-group">
            <label for="product_id">Product ID</label>
            <input type="text" name="product_id" id="product_id" class="form-control" value="{{ old('product_id') }}" required>
        </div> --}}

        <div class="form-group">
            <label for="name">Product Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control">{{ old('description') }}</textarea>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" name="price" id="price" class="form-control" value="{{ old('price') }}" required>
        </div>

        {{-- <div class="form-group">
            <label for="stock_quantity">Stock Quantity</label>
            <input type="number" name="stock_quantity" id="stock_quantity" class="form-control" value="{{ old('stock_quantity') }}" required>
        </div> --}}

        {{-- <div class="form-group">
            <label for="category_id">Category</label>
            <select name="category_id" id="category_id" class="form-control" required>
                <option value="" disabled selected>Select a category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div> --}}

        {{-- <div class="form-group">
            <label for="image">Product Image</label>
            <input type="file" name="image" id="image" class="form-control-file" accept="image/*">
        </div> --}}

        <button type="submit" class="btn btn-primary">Create Product</button>
    </form>
</div>
@endsection
