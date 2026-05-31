@extends('layouts.app')
@section('content')
<form action="{{ route('students.update', $student->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="input-group mb-3">
        <label class="input-group-text">Image</label>
        <input type="file" class="form-control" name="image">
    </div>
    <div class="input-group mb-3">
        <label for="studentId" class="input-group-text">Student ID</label>
        <input type="text" class="form-control disabled" name="studentId" value="{{ $student->studentId }}" disabled>
    </div>
    <div class="input-group mb-3">
        <label for="name" class="input-group-text">Name</label>
        <input type="text" class="form-control" name="name" value="{{ $student->name }}">
    </div>
    <div class="input-group mb-3">
        <label for="course" class="input-group-text">Course</label>
        <input type="text" class="form-control" name="course" value="{{ $student->course }}">
    </div>
    <div class="input-group mb-3">
        <label for="major" class="input-group-text">Major</label>
        <input type="text" class="form-control" name="major" value="{{ $student->major }}">
    </div>
    <div class="input-group mb-3">
        <label for="yearLevel" class="input-group-text">Year Level</label>
        <input type="number" class="form-control" name="yearLevel" value="{{ $student->yearLevel }}">
    </div>
    <div class="input-group mb-3">
        <button type="submit" class="btn btn-primary">Update Student Data</button>
    </div>
</form>

@endsection