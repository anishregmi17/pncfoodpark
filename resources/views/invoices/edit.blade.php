@extends('layouts.app')

@section('content')
    <h1>Edit Invoice</h1>
    <form action="{{ route('invoices.update', $invoice->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="food_ordering_id">Food Ordering:</label>
            <select id="food_ordering_id" name="food_ordering_id" required>
                @foreach ($foodOrderings as $foodOrdering)
                    <option value="{{ $foodOrdering->id }}" {{ $foodOrdering->id == $invoice->food_ordering_id ? 'selected' : '' }}>Order #{{ $foodOrdering->id }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="amount">Amount:</label>
            <input type="number" id="amount" name="amount" step="0.01" value="{{ $invoice->amount }}" required>
        </div>
        <button type="submit">Update</button>
    </form>
@endsection
