@extends('layouts.app')

@section('content')
    <h1>Edit Payment</h1>
    <form action="{{ route('payments.update', $payment->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="invoice_id">Invoice:</label>
            <select id="invoice_id" name="invoice_id" required>
                @foreach ($invoices as $invoice)
                    <option value="{{ $invoice->id }}" {{ $invoice->id == $payment->invoice_id ? 'selected' : '' }}>Invoice #{{ $invoice->id }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="amount">Amount:</label>
            <input type="number" id="amount" name="amount" step="0.01" value="{{ $payment->amount }}" required>
        </div>
        <div>
            <label for="payment_date">Payment Date:</label>
            <input type="date" id="payment_date" name="payment_date" value="{{ $payment->payment_date }}" required>
        </div>
        <button type="submit">Update</button>
    </form>
@endsection
