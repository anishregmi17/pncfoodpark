@extends('layouts.app')

@section('content')
    <h1>Staff Member Details</h1>
    <p>Name: {{ $staffMember->name }}</p>
    <p>Email: {{ $staffMember->email }}</p>
    <p>Phone: {{ $staffMember->phone }}</p>
    <p>Position: {{ $staffMember->position }}</p>
    <a href="{{ route('restaurant-staff.index') }}">Back to Staff Members</a>
@endsection
