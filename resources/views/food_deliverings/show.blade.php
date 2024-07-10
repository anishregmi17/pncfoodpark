@extends('layouts.app')

@section('content')
    <h1>Food Delivering Details</h1>
    <p>Food Ordering: Order #{{ $foodDelivering->food_ordering_id }}</p>
    <p>Delivery Status: {{ $foodDelivering->delivery_status }}</p>
    <p>Delivery Date: {{ $foodDelivering->delivery_date }}</p>
    <a href="{{ route('food-deliverings.index') }}">Back to Food Deliverings</a>
@endsection
