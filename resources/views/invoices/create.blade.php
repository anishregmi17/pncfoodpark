@extends('layouts.app')

@section('content')
    <h1>Create Invoice</h1>
    <form action="{{ route('invoices.store') }}" method="POST">
        @csrf
        <label>Food Ordering:</label>
        <select name="food_ordering_id" required>
            @foreach ($foodOrderings as $foodOrdering)
                <option value="{{ $foodOrdering->id }}">{{ $foodOrdering->id }} - {{ $foodOrdering->customer->name }} - {{ $foodOrdering->foodItem->name }}</option>
            @endforeach
        </select>
        <label>Amount:</label>
        <input type="number" name="amount" required>
        <label>Status:</label>
        <input type="text" name="status" required>
        <button type="submit">Create</button>
    </form>
@endsection
