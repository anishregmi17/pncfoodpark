@extends('layouts.app')

@section('content')
    <h1>Payments</h1>
    <a href="{{ route('payments.create') }}">Create Payment</a>
    <ul>
        @foreach ($payments as $payment)
            <li>
                <a href="{{ route('payments.show', $payment->id) }}">Payment #{{ $payment->id }}</a>
                <a href="{{ route('payments.edit', $payment->id) }}">Edit</a>
                <form action="{{ route('payments.destroy', $payment->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
