@extends('layout')

@section('content')
    <h1>Books Table</h1>
    <table class="table table-bordered" id="books-table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Description</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            <!-- Data will be appended here by JavaScript -->
        </tbody>
    </table>
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            fetch('{{ route('api.books.index') }}')
                .then(response => response.json())
                .then(data => {
                    const tableBody = document.querySelector('#books-table tbody');
                    data.forEach(book => {
                        const row = document.createElement('tr');
                        row.innerHTML = `
                            <td>${book.title}</td>
                            <td>${book.author}</td>
                            <td>${book.description}</td>
                            <td>${book.image ? `<img src="/storage/${book.image}" alt="Book Image" style="width:50px;">` : ''}</td>
                        `;
                        tableBody.appendChild(row);
                    });
                })
                .catch(error => console.error('Error fetching data:', error));
        });
    </script>
@endsection
