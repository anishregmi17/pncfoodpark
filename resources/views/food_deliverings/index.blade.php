@extends('layouts.app')

@section('content')
    <h1>Food Deliverings</h1>
    <a href="{{ route('food-deliverings.create') }}">Create Food Delivering</a>
    <ul>
        @foreach ($foodDeliverings as $foodDelivering)
            <li>
                <a href="{{ route('food-deliverings.show', $foodDelivering->id) }}">Delivery #{{ $foodDelivering->id }}</a>
                <a href="{{ route('food-deliverings.edit', $foodDelivering->id) }}">Edit</a>
                <form action="{{ route('food-deliverings.destroy', $foodDelivering->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
