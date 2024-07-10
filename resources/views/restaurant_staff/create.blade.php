@extends('layouts.app')

@section('content')
    <h1>Create Restaurant Staff</h1>
    <form action="{{ route('restaurant-staff.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required>
            @error('name')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="role">Role:</label>
            <input type="text" id="role" name="role" value="{{ old('role') }}" required>
            @error('role')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="contact">Contact:</label>
            <input type="text" id="contact" name="contact" value="{{ old('contact') }}" required>
            @error('contact')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <button type="submit">Create</button>
    </form>
    <a href="{{ route('restaurant-staff.index') }}">Back to List</a>
@endsection
