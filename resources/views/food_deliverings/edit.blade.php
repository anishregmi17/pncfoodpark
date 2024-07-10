@extends('layouts.app')

@section('content')
    <h1>Edit Food Delivering</h1>
    <form action="{{ route('food-deliverings.update', $foodDelivering->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="food_ordering_id">Food Ordering:</label>
            <select id="food_ordering_id" name="food_ordering_id" required>
                @foreach ($foodOrderings as $foodOrdering)
                    <option value="{{ $foodOrdering->id }}" {{ $foodOrdering->id == $foodDelivering->food_ordering_id ? 'selected' : '' }}>Order #{{ $foodOrdering->id }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="delivery_status">Delivery Status:</label>
            <select id="delivery_status" name="delivery_status" required>
                <option value="pending" {{ $foodDelivering->delivery_status == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="delivered" {{ $foodDelivering->delivery_status == 'delivered' ? 'selected' : '' }}>Delivered</option>
            </select>
        </div>
        <div>
            <label for="delivery_date">Delivery Date:</label>
            <input type="date" id="delivery_date" name="delivery_date" value="{{ $foodDelivering->delivery_date }}" required>
        </div>
        <button type="submit">Update</button>
    </form>
@endsection
