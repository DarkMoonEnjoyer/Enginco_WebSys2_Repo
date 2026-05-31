@extends('layouts.app')
@section('content')
@if(session('success'))
{{ session('success') }}
<br>
@endif
<a href="{{ route('products.create') }}" class="btn btn-primary">Create</a><hr>
<table class="table">
  <thead>
    <tr>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Price</th>
        <th scope="col">Qr Code Link</th>
        <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($products as $product)
    <tr>
        <th scope="row"><a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a></th>
        <td>{{ $product->description }}</td>
        <td>{{ $product->price }}</td>
        <td>{{ $product->qr }}</td>
        <td>
            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-secondary">Edit</a><br>
            <form action="{{ route('products.destroy', $product->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr> 
    @endforeach
  </tbody>
</table>
@endsection