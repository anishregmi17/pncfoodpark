@extends('layouts.app')

@section('content')
    <h1>Staff Details</h1>
    <p><strong>ID:</strong> {{ $restaurantStaff->id }}</p>
    <p><strong>Name:</strong> {{ $restaurantStaff->name }}</p>
    <p><strong>Role:</strong> {{ $restaurantStaff->role }}</p>
    <p><strong>Contact:</strong> {{ $restaurantStaff->contact }}</p>
    <a href="{{ route('restaurant-staff.edit', $restaurantStaff->id) }}">Edit</a>
    <form action="{{ route('restaurant-staff.destroy', $restaurantStaff->id) }}" method="POST" style="display:inline">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
    <a href="{{ route('restaurant-staff.index') }}">Back to List</a>
@endsection
