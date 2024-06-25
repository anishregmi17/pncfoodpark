@extends('layout')

@section('content')
    <h1>Books</h1>
    <a href="{{ route('books.create') }}" class="btn btn-primary">Create a new book</a>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">{{ $message }}</div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Description</th>
            <th>Image</th>
            <th>Actions</th>
        </tr>
        @foreach ($books as $book)
            <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->description }}</td>
                <td>
                    @if ($book->image)
                        <img src="{{ asset('storage/' . $book->image) }}" alt="Book Image" style="width:50px;">
                    @endif
                </td>
                <td>
                    <a href="{{ route('books.edit', $book->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
