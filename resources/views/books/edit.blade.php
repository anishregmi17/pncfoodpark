@extends('layout')

@section('content')
    <h1>Edit Book</h1>
    <form action="{{ route('books.update', $book->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" value="{{ $book->title }}" class="form-control">
        </div>
        <div class="form-group">
            <label>Author</label>
            <input type="text" name="author" value="{{ $book->author }}" class="form-control">
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control">{{ $book->description }}</textarea>
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" name="image" class="form-control">
            @if ($book->image)
                <img src="{{ asset('storage/' . $book->image) }}" alt="Book Image" style="width:100px;">
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
