@extends('layouts.app')

@section('content')
    <h1>Invoice Details</h1>
    <p><strong>ID:</strong> {{ $invoice->id }}</p>
    <p><strong>Food Ordering ID:</strong> {{ $invoice->foodOrdering->id }}</p>
    <p><strong>Customer:</strong> {{ $invoice->foodOrdering->customer->name }}</p>
    <p><strong>Food Item:</strong> {{ $invoice->foodOrdering->foodItem->name }}</p>
    <p><strong>Amount:</strong> {{ $invoice->amount }}</p>
    <p><strong>Status:</strong> {{ $invoice->status }}</p>
    <a href="{{ route('invoices.edit', $invoice->id) }}">Edit</a>
    <form action="{{ route('invoices.destroy', $invoice->id) }}" method="POST" style="display:inline">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
    <a href="{{ route('invoices.index') }}">Back to List</a>
@endsection
