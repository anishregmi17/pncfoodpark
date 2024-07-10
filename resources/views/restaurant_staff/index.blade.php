@extends('layouts.app')

@section('content')
    <h1>Restaurant Staff</h1>
    <a href="{{ route('restaurant-staff.create') }}">Create Staff</a>
    <ul>
        @foreach ($staff as $staffMember)
            <li>
                <a href="{{ route('restaurant-staff.show', $staffMember->id) }}">{{ $staffMember->name }}</a>
                <a href="{{ route('restaurant-staff.edit', $staffMember->id) }}">Edit</a>
                <form action="{{ route('restaurant-staff.destroy', $staffMember->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
