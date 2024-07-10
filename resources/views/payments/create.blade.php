@extends('layouts.app')

@section('content')
    <h1>Create Payment</h1>
    <form action="{{ route('payments.store') }}" method="POST">
        @csrf
        <div>
            <label for="invoice_id">Invoice:</label>
            <select id="invoice_id" name="invoice_id" required>
                @foreach ($invoices as $invoice)
                    <option value="{{ $invoice->id }}">Invoice #{{ $invoice->id }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="amount">Amount:</label>
            <input type="number" id="amount" name="amount" step="0.01" required>
        </div>
        <div>
            <label for="payment_date">Payment Date:</label>
            <input type="date" id="payment_date" name="payment_date" required>
        </div>
        <button type="submit">Create</button>
    </form>
@endsection
