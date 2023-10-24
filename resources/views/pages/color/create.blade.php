@extends('layouts.main')

@section('content')
    <div class="container">
        <h2>Create a Color</h2>
        <form method="POST" action="{{ route('color.store') }}">
            @csrf
            <div class="form-group">
                <label for="name">Color Name:</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter color name">
            </div>
            <div class="form-group">
                <label for="hex_code">Hex Code:</label>
                <input type="text" name="hex_code" class="form-control" id="hex_code" placeholder="Enter hex code (e.g., #FF5733)">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

