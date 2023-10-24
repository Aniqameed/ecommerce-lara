@extends('layouts.main')

@section('content')
<div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">category Create Form</h5>
        <div class="card">
          <div class="card-body">
            <form method="POST" action="{{route('categories.store')}}">
            @csrf
{{-- 
            <div class="form-group">
                <label for="category_id">Category ID</label>
                <input type="text" name="category_id" id="category_id" class="form-control" value="{{ old('category_id') }}" required>
            </div> --}}
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Description</label>
                <textarea class="form-control" name="description"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
