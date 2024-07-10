@extends('layouts.app')

@section('content')
    <h1>Edit Staff Member</h1>
    <form action="{{ route('restaurant-staff.update', $staffMember->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ $staffMember->name }}" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ $staffMember->email }}" required>
        </div>
        <div>
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" value="{{ $staffMember->phone }}" required>
        </div>
        <div>
            <label for="position">Position:</label>
            <input type="text" id="position" name="position" value="{{ $staffMember->position }}" required>
        </div>
        <button type="submit">Update</button>
    </form>
@endsection
