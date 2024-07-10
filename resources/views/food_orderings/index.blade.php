@extends('layouts.app')

@section('content')
    <h1>Food Orderings</h1>
    <a href="{{ route('food-orderings.create') }}">Create New Food Ordering</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Customer</th>
                <th>Food Item</th>
                <th>Quantity</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($foodOrderings as $foodOrdering)
                <tr>
                    <td>{{ $foodOrdering->id }}</td>
                    <td>{{ $foodOrdering->customer->name }}</td>
                    <td>{{ $foodOrdering->foodItem->name }}</td>
                    <td>{{ $foodOrdering->quantity }}</td>
                    <td>{{ $foodOrdering->status }}</td>
                    <td>
                        <a href="{{ route('food-orderings.show', $foodOrdering->id) }}">View</a>
                        <a href="{{ route('food-orderings.edit', $foodOrdering->id) }}">Edit</a>
                        <form action="{{ route('food-orderings.destroy', $foodOrdering->id) }}" method="POST"
                            style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
