@extends('layouts.app')
@section('content')
<form action="{{ route('products.store') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="text" class="form-control" name="description">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="number" class="form-control" name="price">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Create Product</button>
    </div>
</form>

@endsection