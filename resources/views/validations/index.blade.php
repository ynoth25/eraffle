<!-- resources/views/prizes/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Prizes</h1>

    <!-- Search and Per Page Form -->
    <form action="{{ route('validations.index') }}" method="GET" class="form-inline mb-3">
        <input type="text" name="search" class="form-control mr-2" placeholder="Search Prizes" value="{{ request('search') }}">
        <button type="submit" class="btn btn-primary">Search</button>
        <a href="{{ route('validations.index') }}" class="btn btn-secondary ml-2">Reset</a>

        <!-- Per Page Dropdown -->
        <label for="per_page" class="ml-3">Items per page:</label>
        <select name="per_page" id="per_page" class="form-control ml-2" onchange="this.form.submit()">
            <option value="5" {{ request('per_page') == 5 ? 'selected' : '' }}>5</option>
            <option value="10" {{ request('per_page') == 10 ? 'selected' : '' }}>10</option>
            <option value="20" {{ request('per_page') == 20 ? 'selected' : '' }}>20</option>
            <option value="50" {{ request('per_page') == 50 ? 'selected' : '' }}>50</option>
        </select>
    </form>

    <a href="{{ route('validations.create') }}" class="btn btn-primary mb-3">Create Prize</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
        <tr>
            <th>Entry</th>
            <th>Validated By</th>
            <th>Validation Code</th>
            <th>Status</th>
            <th>Comments</th>
            <th>Validation Date</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @forelse($validations as $validation)
            <tr>
                <td>{{ $validation->entry->id ?? 'No Entry' }}</td>
                <td>{{ $validation->admin->name ?? 'No Admin' }}</td>
                <td>{{ $validation->validation_code }}</td>
                <td>{{ $validation->validation_status }}</td>
                <td>{{ $validation->comments }}</td>
                <td>{{ $validation->validation_date }}</td>
                <td>
                    <a href="{{ route('validations.show', $validation->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('validations.edit', $validation->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('validations.destroy', $validation->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="7">No validations found.</td>
            </tr>
        @endforelse
        </tbody>
    </table>

    <!-- Pagination Links -->
    <div class="mt-3">
        {{ $validations->appends(['search' => request('search'), 'per_page' => request('per_page')])->links() }}
    </div>
@endsection
