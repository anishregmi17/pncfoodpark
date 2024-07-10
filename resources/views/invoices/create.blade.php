@extends('layouts.app')

@section('content')
    <h1>Create Invoice</h1>
    <form action="{{ route('invoices.store') }}" method="POST">
        @csrf
        <div>
            <label for="food_ordering_id">Food Ordering:</label>
            <select id="food_ordering_id" name="food_ordering_id" required>
                @foreach ($foodOrderings as $foodOrdering)
                    <option value="{{ $foodOrdering->id }}">Order #{{ $foodOrdering->id }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="amount">Amount:</label>
            <input type="number" id="amount" name="amount" step="0.01" required>
        </div>
        <button type="submit">Create</button>
    </form>
@endsection
