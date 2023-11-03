@extends('layouts.main') {{-- You can change the layout as needed --}}

@section('content')
    <div class="container">
        <h1>{{ $product->name }}</h1>
        <p>Price: ${{ $product->price }}</p>
        <p>Description: {{ $product->description }}</p>

        <a href="{{ route('product.index') }}">Back to Products</a> {{-- Add a link to go back to the product list --}}
        <a href="{{ route('product.show', $product->id) }}">Show Details</a>

    </div>
@endsection

