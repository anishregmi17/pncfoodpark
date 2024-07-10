@extends('layouts.app')

@section('content')
    <h1>Edit Food Item</h1>
    <form action="{{ route('food-items.update', $foodItem->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ $foodItem->name }}" required>
        </div>
        <div>
            <label for="description">Description:</label>
            <input type="text" id="description" name="description" value="{{ $foodItem->description }}" required>
        </div>
        <div>
            <label for="price">Price:</label>
            <input type="number" id="price" name="price" step="0.01" value="{{ $foodItem->price }}" required>
        </div>
        <div>
            <label for="availability">Availability:</label>
            <select id="availability" name="availability" required>
                <option value="1" {{ $foodItem->availability ? 'selected' : '' }}>Available</option>
                <option value="0" {{ !$foodItem->availability ? 'selected' : '' }}>Not Available</option>
            </select>
        </div>
        <button type="submit">Update</button>
    </form>
@endsection
