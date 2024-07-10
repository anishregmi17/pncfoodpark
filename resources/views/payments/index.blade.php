@extends('layouts.app')

@section('content')
    <h1>Payments</h1>
    <a href="{{ route('payments.create') }}">Create New Payment</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Invoice</th>
                <th>Customer</th>
                <th>Amount</th>
                <th>Method</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($payments as $payment)
                <tr>
                    <td>{{ $payment->id }}</td>
                    <td>{{ $payment->invoice->id }}</td>
                    <td>{{ $payment->invoice->foodOrdering->customer->name }}</td>
                    <td>{{ $payment->amount }}</td>
                    <td>{{ $payment->method }}</td>
                    <td>
                        <a href="{{ route('payments.show', $payment->id) }}">View</a>
                        <a href="{{ route('payments.edit', $payment->id) }}">Edit</a>
                        <form action="{{ route('payments.destroy', $payment->id) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
