@extends('layouts.app')

@section('content')
    <h1>Customer Details</h1>
    <p>Name: {{ $customer->name }}</p>
    <p>Email: {{ $customer->email }}</p>
    <p>Phone: {{ $customer->phone }}</p>
    <p>Address: {{ $customer->address }}</p>
    <a href="{{ route('customers.index') }}">Back to Customers</a>
@endsection
