@extends('layouts.app')

@section('content')
    <h1>Edit Payment</h1>
    <form action="{{ route('payments.update', $payment->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Invoice:</label>
        <select name="invoice_id" required>
            @foreach ($invoices as $invoice)
                <option value="{{ $invoice->id }}" {{ $invoice->id == $payment->invoice_id ? 'selected' : '' }}>
                    {{ $invoice->id }} - {{ $invoice->foodOrdering->customer->name }}
                </option>
            @endforeach
        </select>
        <label>Amount:</label>
        <input type="number" name="amount" value="{{ $payment->amount }}" required>
        <label>Method:</label>
        <input type="text" name="method" value="{{ $payment->method }}" required>
        <button type="submit">Update</button>
    </form>
@endsection
