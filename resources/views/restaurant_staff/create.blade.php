@extends('layouts.app')

@section('content')
    <h1>Create Staff Member</h1>
    <form action="{{ route('restaurant-staff.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" required>
        </div>
        <div>
            <label for="position">Position:</label>
            <input type="text" id="position" name="position" required>
        </div>
        <button type="submit">Create</button>
    </form>
@endsection
