@extends('layouts.app')

@section('content')
    <h1>Create Food Delivering</h1>
    <form action="{{ route('food-deliverings.store') }}" method="POST">
        @csrf
        <div>
            <label for="food_ordering_id">Food Ordering:</label>
            <select id="food_ordering_id" name="food_ordering_id" required>
                @foreach ($foodOrderings as $foodOrdering)
                    <option value="{{ $foodOrdering->id }}">Order #{{ $foodOrdering->id }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="delivery_status">Delivery Status:</label>
            <select id="delivery_status" name="delivery_status" required>
                <option value="pending">Pending</option>
                <option value="delivered">Delivered</option>
            </select>
        </div>
        <div>
            <label for="delivery_date">Delivery Date:</label>
            <input type="date" id="delivery_date" name="delivery_date" required>
        </div>
        <button type="submit">Create</button>
    </form>
@endsection
