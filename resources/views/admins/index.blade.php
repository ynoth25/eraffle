<!-- resources/views/promos/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Administrators</h1>

    <!-- Search Form -->
    <form action="{{ route('admins.index') }}" method="GET" class="form-inline mb-3">
        <input type="text" name="search" class="form-control mr-2" placeholder="Search Promos" value="{{ request('search') }}">
        <button type="submit" class="btn btn-primary">Search</button>
        <a href="{{ route('admins.index') }}" class="btn btn-secondary ml-2">Reset</a>

        <!-- Per Page Dropdown -->
        <label for="per_page" class="ml-3">Items per page:</label>
        <select name="per_page" id="per_page" class="form-control ml-2" onchange="this.form.submit()">
            <option value="5" {{ request('per_page') == 5 ? 'selected' : '' }}>5</option>
            <option value="10" {{ request('per_page') == 10 ? 'selected' : '' }}>10</option>
            <option value="20" {{ request('per_page') == 20 ? 'selected' : '' }}>20</option>
            <option value="50" {{ request('per_page') == 50 ? 'selected' : '' }}>50</option>
        </select>
    </form>

    <a href="{{ route('admins.create') }}" class="btn btn-primary mb-3">Create Promo</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @forelse($admins as $admin)
            <tr>
                <td>{{ $admin->name }}</td>
                <td>{{ $admin->email }}</td>
                <td>{{ $admin->role }}</td>
                <td>
                    <a href="{{ route('admins.show', $admin->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('admins.edit', $admin->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('admins.destroy', $admin->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4">No admins found.</td>
            </tr>
        @endforelse
        </tbody>
    </table>

    <!-- Pagination Links (Maintains Search Query and Per Page Selection) -->
    <div class="mt-3">
        {{ $admins->appends(['search' => request('search'), 'per_page' => request('per_page')])->links() }}
    </div>
@endsection
