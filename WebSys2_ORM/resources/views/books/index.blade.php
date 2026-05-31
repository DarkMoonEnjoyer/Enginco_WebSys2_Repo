@extends('books.design')
@section('content')
    <h1>All Books</h1>
    <a class="btn btn-primary" href="{{ route('books.create') }}">Add New Book</a>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Title</th>
            <th scope="col">Author</th>
            <th scope="col">Published Date</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
            <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->published_date }}</td>
                <td>
                    <a href="{{ route('books.edit', $book->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('books.destroy', $book->id) }}" method="post" style="display"inline">
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