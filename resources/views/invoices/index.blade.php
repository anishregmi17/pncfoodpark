@extends('layouts.app')

@section('content')
    <h1>Invoices</h1>
    <a href="{{ route('invoices.create') }}">Create New Invoice</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Food Ordering</th>
                <th>Customer</th>
                <th>Food Item</th>
                <th>Amount</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($invoices as $invoice)
                <tr>
                    <td>{{ $invoice->id }}</td>
                    <td>{{ $invoice->foodOrdering->id }}</td>
                    <td>{{ $invoice->foodOrdering->customer->name }}</td>
                    <td>{{ $invoice->foodOrdering->foodItem->name }}</td>
                    <td>{{ $invoice->amount }}</td>
                    <td>{{ $invoice->status }}</td>
                    <td>
                        <a href="{{ route('invoices.show', $invoice->id) }}">View</a>
                        <a href="{{ route('invoices.edit', $invoice->id) }}">Edit</a>
                        <form action="{{ route('invoices.destroy', $invoice->id) }}" method="POST" style="display:inline">
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
