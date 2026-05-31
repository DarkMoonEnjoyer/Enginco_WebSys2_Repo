@extends('layouts.app')
@section('content')
<a href="{{ route('students.index') }}" class="btn btn-primary">Go Back</a>
<h1>Name: {{ $student->name }}</h1>
{{ $qr }}
@endsection