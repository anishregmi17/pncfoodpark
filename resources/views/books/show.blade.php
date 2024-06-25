@extends('layout')

@section('content')
    <h1>{{ $book->title }}</h1>
    <p><strong>Author:</strong> {{ $book->author }}</p>
    <p><strong>Description:</strong> {{ $book->description }}</p>
    @if ($book->image)
        <img src="{{ asset('storage/' . $book->image) }}" alt="Book Image" style="width:200px;">
    @endif
    <br><br>
    <a href="{{ route('books.index') }}" class="btn btn-secondary">Back to List</a>
@endsection
