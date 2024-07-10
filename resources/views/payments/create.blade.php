@extends('layouts.app')

@section('content')
    <h1>Create Payment</h1>
    <form action="{{ route('payments.store') }}" method="POST">
        @csrf
        <div>
            <label for="invoice_id">Invoice:</label>
            <select id="invoice_id" name="invoice_id" required>
                @foreach ($invoices as $invoice)
                    <option value="{{ $invoice->id }}">Invoice #{{ $invoice->id }} - Customer: {{ $invoice->foodOrdering->customer->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="amount">Amount:</label>
            <input type="number" id="amount" name="amount" step="0.01" required>
        </div>
        <div>
            <label for="method">Method:</label>
            <input type="text" id="method" name="method" required>
        </div>
        <button type="submit">Create</button>
    </form>
@endsection
