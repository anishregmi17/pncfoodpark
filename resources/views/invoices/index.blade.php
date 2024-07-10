@extends('layouts.app')

@section('content')
    <h1>Invoices</h1>
    <a href="{{ route('invoices.create') }}">Create Invoice</a>
    <ul>
        @foreach ($invoices as $invoice)
            <li>
                <a href="{{ route('invoices.show', $invoice->id) }}">Invoice #{{ $invoice->id }}</a>
                <a href="{{ route('invoices.edit', $invoice->id) }}">Edit</a>
                <form action="{{ route('invoices.destroy', $invoice->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
