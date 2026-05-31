@extends('books.design')
@section('content')
<h1>Edit Book</h1>
<div class="row">
    <form action="{{ route('books.update', $book->id) }}" method="POST">
        <div class="col-auto">
                @csrf
                @method('PUT')
                <label for="title" class="col-form-label">Title:</label>
                <input type="text" id="title" name="title" value="{{ $book->title }}" class="form-control" required>
        </div>
        <div class="col-auto">
            <label for="author" class="col-form-label">Author:</label>
            <input type="text" id="author" name="author" value="{{ $book->author }}" class="form-control" required>
        </div>
        <div class="col-auto">
            <label for="published_date" class="col-form-label">Published Date:</label>
            <input type="date" id="published_date" name="published_date" class="form-control" value="{{ $book->published_date }}" required>
        </div><br>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>

@endsection