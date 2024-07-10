@extends('layouts.app')

@section('content')
    <h1>Edit Customer</h1>
    <form action="{{ route('customers.update', $customer->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{ $customer->name }}">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ $customer->email }}">
        </div>
        <div>
            <label for="phone">Phone</label>
            <input type="text" id="phone" name="phone" value="{{ $customer->phone }}">
        </div>
        <div>
            <label for="address">Address</label>
            <input type="text" id="address" name="address" value="{{ $customer->address }}">
        </div>
        <button type="submit">Update</button>
    </form>
@endsection
