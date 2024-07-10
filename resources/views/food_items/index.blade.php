@extends('layouts.app')

@section('content')
    <h1>Food Items</h1>
    <a href="{{ route('food-items.create') }}">Create Food Item</a>
    <ul>
        @foreach ($foodItems as $foodItem)
            <li>
                <a href="{{ route('food-items.show', $foodItem->id) }}">{{ $foodItem->name }}</a>
                <a href="{{ route('food-items.edit', $foodItem->id) }}">Edit</a>
                <form action="{{ route('food-items.destroy', $foodItem->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
