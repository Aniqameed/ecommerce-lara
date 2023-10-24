@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Subcategory</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('sub-category.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="name">Subcategory Name</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" class="form-control" rows="4"></textarea>
                        </div>

                        {{-- <div class="form-group">
                            <label for="category_id">Category ID</label>
                            <select name="category_id" id="category_id" class="form-control">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div> --}}

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Create Subcategory</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
