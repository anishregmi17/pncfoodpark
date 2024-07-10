@extends('layouts.app')

@section('content')
    <h1>Customers</h1>
    <a href="{{ route('customers.create') }}">Create Customer</a>
    <ul>
        @foreach ($customers as $customer)
            <li>
                <a href="{{ route('customers.show', $customer->id) }}">{{ $customer->name }}</a>
                <a href="{{ route('customers.edit', $customer->id) }}">Edit</a>
                <form action="{{ route('customers.destroy', $customer->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
