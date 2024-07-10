@extends('layouts.app')

@section('content')
    <h1>Create Food Ordering</h1>
    <form action="{{ route('food-orderings.store') }}" method="POST">
        @csrf
        <label>Customer:</label>
        <select name="customer_id" required>
            @foreach ($customers as $customer)
                <option value="{{ $customer->id }}">{{ $customer->name }}</option>
            @endforeach
        </select>
        <label>Food Item:</label>
        <select name="food_item_id" required>
            @foreach ($foodItems as $foodItem)
                <option value="{{ $foodItem->id }}">{{ $foodItem->name }}</option>
            @endforeach
        </select>
        <label>Quantity:</label>
        <input type="number" name="quantity" required>
        <label>Status:</label>
        <input type="text" name="status" required>
        <button type="submit">Create</button>
    </form>
@endsection
