@extends('layouts.app')

@section('content')
    <h1>Invoice Details</h1>
    <p>Food Ordering: Order #{{ $invoice->food_ordering_id }}</p>
    <p>Amount: ${{ $invoice->amount }}</p>
    <a href="{{ route('invoices.index') }}">Back to Invoices</a>
@endsection
