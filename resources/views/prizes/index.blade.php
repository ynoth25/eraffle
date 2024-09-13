<!-- resources/views/prizes/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Prizes</h1>

    <!-- Search and Per Page Form -->
    <form action="{{ route('prizes.index') }}" method="GET" class="form-inline mb-3">
        <input type="text" name="search" class="form-control mr-2" placeholder="Search Prizes" value="{{ request('search') }}">
        <button type="submit" class="btn btn-primary">Search</button>
        <a href="{{ route('prizes.index') }}" class="btn btn-secondary ml-2">Reset</a>

        <!-- Per Page Dropdown -->
        <label for="per_page" class="ml-3">Items per page:</label>
        <select name="per_page" id="per_page" class="form-control ml-2" onchange="this.form.submit()">
            <option value="5" {{ request('per_page') == 5 ? 'selected' : '' }}>5</option>
            <option value="10" {{ request('per_page') == 10 ? 'selected' : '' }}>10</option>
            <option value="20" {{ request('per_page') == 20 ? 'selected' : '' }}>20</option>
            <option value="50" {{ request('per_page') == 50 ? 'selected' : '' }}>50</option>
        </select>
    </form>

    <a href="{{ route('prizes.create') }}" class="btn btn-primary mb-3">Create Prize</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Value</th>
            <th>Promo ID</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @forelse($prizes as $prize)
            <tr>
                <td>{{ $prize->id }}</td>
                <td>{{ $prize->name }}</td>
                <td>{{ $prize->description }}</td>
                <td>{{ $prize->value }}</td>
                <td>{{ $prize->promo_id }}</td>
                <td>
                    <a href="{{ route('prizes.show', $prize->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('prizes.edit', $prize->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('prizes.destroy', $prize->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6">No prizes found.</td>
            </tr>
        @endforelse
        </tbody>
    </table>

    <!-- Pagination Links -->
    <div class="mt-3">
        {{ $prizes->appends(['search' => request('search'), 'per_page' => request('per_page')])->links() }}
    </div>
@endsection
