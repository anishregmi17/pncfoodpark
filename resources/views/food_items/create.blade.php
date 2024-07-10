@extends('layouts.app')

@section('content')
    <h1>Create Food Item</h1>
    <form action="{{ route('food-items.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="description">Description:</label>
            <input type="text" id="description" name="description" required>
        </div>
        <div>
            <label for="price">Price:</label>
            <input type="number" id="price" name="price" step="0.01" required>
        </div>
        <div>
            <label for="availability">Availability:</label>
            <select id="availability" name="availability" required>
                <option value="1">Available</option>
                <option value="0">Not Available</option>
            </select>
        </div>
        <button type="submit">Create</button>
    </form>
@endsection
