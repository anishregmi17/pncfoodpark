@extends('layouts.app')

@section('content')
    <h1>Restaurant Staff</h1>
    <a href="{{ route('restaurant-staff.create') }}" class="btn btn-primary mb-3">Create Staff</a>
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Name</th>
                <th>Role</th>
                <th>Contact</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($staff as $staffMember)
                <tr>
                    <td>
                        <a href="{{ route('restaurant-staff.show', $staffMember->id) }}">{{ $staffMember->name }}</a>
                    </td>
                    <td>{{ $staffMember->role }}</td>
                    <td>{{ $staffMember->contact }}</td>
                    <td>
                        <a href="{{ route('restaurant-staff.edit', $staffMember->id) }}"
                            class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('restaurant-staff.destroy', $staffMember->id) }}" method="POST"
                            style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
