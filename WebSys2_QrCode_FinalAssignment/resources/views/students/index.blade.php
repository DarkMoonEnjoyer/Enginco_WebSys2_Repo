@extends('layouts.app')
@section('content')
@if(session('success'))
{{ session('success') }}
<br>
@endif
<a href="{{ route('students.create') }}" class="btn btn-primary">Create</a><hr>
<form action="{{ route('students.index') }}" method="GET">
    <div class="input-group">
        <input class="form-control col-1" type="text" name="search" value="{{ request('search') }}">
        <button type="submit" class="btn btn-primary col-1">Search</button>
    </div>
    
</form>
<table class="table">
  <thead>
    <tr>
        <th scope="col">Student Id</th>
        <th scope="col">Student Image</th>
        <th scope="col">Name</th>
        <th scope="col">Course</th>
        <th scope="col">Year Level</th>
        <th scope="col">Link</th>
        <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($students as $student)
    <tr>
        <th scope="row"><a href="{{ route('students.show', $student->id) }}">{{ $student->studentId }}</a></th>
        <td><img src="{{ asset('images/'. $student->image) }}" alt="{{ $student->image }}" height="100px"> </td>
        <td>{{ $student->name }}</td>
        <td>{{ $student->course }}</td>
        <td>{{ $student->yearLevel }}</td>
        <td>{{ $student->qr }}</td>
        <td>
            <a href="{{ route('students.edit', $student->id) }}" class="btn btn-secondary">Edit</a><br>
            <form action="{{ route('students.destroy', $student->id) }}" method="post">
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