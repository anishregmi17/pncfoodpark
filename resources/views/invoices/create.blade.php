@extends('layouts.app')

@section('content')
    <h1>Create Payment</h1>
    <form action="{{ route('payments.store') }}" method="POST">
        @csrf
        <label>Invoice:</label>
        <select name="invoice_id" required>
            @foreach ($invoices as $invoice)
                <option value="{{ $invoice->id }}">{{ $invoice->id }} - {{ $invoice->foodOrdering->customer->name }}</option>
            @endforeach
        </select>
        <label>Amount:</label>
        <input type="number" name="amount" required>
        <label>Method:</label>
        <input type="text" name="method" required>
        <button type="submit">Create</button>
    </form>
@endsection
