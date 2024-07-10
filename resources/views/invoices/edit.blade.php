@extends('layouts.app')

@section('content')
    <h1>Edit Invoice</h1>
    <form action="{{ route('invoices.update', $invoice->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Food Ordering:</label>
        <select name="food_ordering_id" required>
            @foreach ($foodOrderings as $foodOrdering)
                <option value="{{ $foodOrdering->id }}" {{ $foodOrdering->id == $invoice->food_ordering_id ? 'selected' : '' }}>
                    {{ $foodOrdering->id }} - {{ $foodOrdering->customer->name }} - {{ $foodOrdering->foodItem->name }}
                </option>
            @endforeach
        </select>
        <label>Amount:</label>
        <input type="number" name="amount" value="{{ $invoice->amount }}" required>
        <label>Status:</label>
        <input type="text" name="status" value="{{ $invoice->status }}" required>
        <button type="submit">Update</button>
    </form>
@endsection
