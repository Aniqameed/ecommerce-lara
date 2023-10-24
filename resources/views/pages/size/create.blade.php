@extends('layouts.main')
@section('content')
<div class="container">
    <h1>Create Size</h1>

<!-- resources/views/your-view-folder/create.blade.php -->

<form method="post" action="{{ route('product.store') }}">
    @csrf

    <!-- Other form fields -->

    <div class="form-group">
        <label for="size">Size:</label>
        <select name="size" id="size" class="form-control">
            <option value="small">Small</option>
            <option value="medium">Medium</option>
            <option value="large">Large</option>
        </select>
    </div>

    <!-- Submit button and closing form tag -->
    <button type="submit" class="btn btn-primary">Create</button>
</form>
</div>
@endsection
