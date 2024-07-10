@extends('layouts.app')

@section('content')
    <h1>Food Item Details</h1>
    <p>Name: {{ $foodItem->name }}</p>
    <p>Description: {{ $foodItem->description }}</p>
    <p>Price: ${{ $foodItem->price }}</p>
    <p>Availability: {{ $foodItem->availability ? 'Available' : 'Not Available' }}</p>
    <a href="{{ route('food-items.index') }}">Back to Food Items</a>
@endsection
