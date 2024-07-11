@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mt-4 mb-3">Payments</h1>
        <a href="{{ route('payments.create') }}" class="btn btn-primary mb-3">Create Payment</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Invoice ID</th>
                    <th>Customer Name</th>
                    <th>Amount (Nrs)</th>
                    <th>Method</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($payments as $payment)
                    <tr>
                        <td>{{ $payment->id }}</td>
                        <td>{{ $payment->invoice_id }}</td>
                        <td>{{ $payment->invoice->foodOrdering->customer->name }}</td>
                        <td>{{ number_format($payment->amount, 2) }}</td>
                        <td>{{ ucfirst($payment->method) }}</td>
                        <td>{{ ucfirst($payment->invoice->status) }}</td>
                        <td>
                            <a href="{{ route('invoices.show', $payment->invoice_id) }}" class="btn btn-info">View Invoice</a>
                            {{-- <a href="{{ route('payments.edit', $payment->id) }}" class="btn btn-warning">Edit</a> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
