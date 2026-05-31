@extends('layouts.app')
@section('content')
<a href="{{ route('products.index') }}" class="btn btn-primary">Go Back</a>
<h1>Name: {{ $product->name }}</h1>
{{ $qr }}
@endsection