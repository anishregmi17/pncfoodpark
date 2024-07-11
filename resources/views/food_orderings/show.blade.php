@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Food Ordering Details</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Customer: {{ $foodOrdering->customer->name }}</h5>
                <p class="card-text">
                    <strong>Food Item:</strong> {{ $foodOrdering->foodItem->name }}<br>
                    <strong>Quantity:</strong> {{ $foodOrdering->quantity }}<br>
                    <strong>Status:</strong>
                    @if ($foodOrdering->status == 'delivered')
                        <span class="badge badge-success">Delivered</span>
                    @else
                        <span class="badge badge-warning">Not Delivered</span>
                    @endif
                </p>
            </div>
            <div class="card-footer">
                <a href="{{ route('food-orderings.index') }}" class="btn btn-primary">Back to List</a>
            </div>
        </div>
    </div>
@endsection
