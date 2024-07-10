@extends('layouts.app')

@section('content')
    <h1>Edit Food Ordering</h1>
    <form action="{{ route('food-orderings.update', $foodOrdering->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Customer:</label>
        <select name="customer_id" required>
            @foreach ($customers as $customer)
                <option value="{{ $customer->id }}" {{ $customer->id == $foodOrdering->customer_id ? 'selected' : '' }}>
                    {{ $customer->name }}</option>
            @endforeach
        </select>
        <label>Food Item:</label>
        <select name="food_item_id" required>
            @foreach ($foodItems as $foodItem)
                <option value="{{ $foodItem->id }}" {{ $foodItem->id == $foodOrdering->food_item_id ? 'selected' : '' }}>
                    {{ $foodItem->name }}</option>
            @endforeach
        </select>
        <label>Quantity:</label>
        <input type="number" name="quantity" value="{{ $foodOrdering->quantity }}" required>
        <label>Status:</label>
        <input type="text" name="status" value="{{ $foodOrdering->status }}" required>
        <button type="submit">Update</button>
    </form>
@endsection
