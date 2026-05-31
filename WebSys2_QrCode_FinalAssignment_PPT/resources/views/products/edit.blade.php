@extends('layouts.app')
@section('content')
<form action="{{ route('products.update', $product->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" value="{{ $product->name }}">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="text" class="form-control" name="description" value="{{ $product->description }}">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="number" class="form-control" name="price" value="{{ $product->price }}">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Update Product</button>
    </div>
</form>

@endsection