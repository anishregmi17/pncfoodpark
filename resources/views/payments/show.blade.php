@extends('layouts.app')

@section('content')
    <h1>Payment Details</h1>
    <p>Invoice: Invoice #{{ $payment->invoice_id }}</p>
    <p>Amount: ${{ $payment->amount }}</p>
    <p>Payment Date: {{ $payment->payment_date }}</p>
    <a href="{{ route('payments.index') }}">Back to Payments</a>
@endsection
