<!-- resources/views/promos/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Promos</h1>

    <!-- Search Form -->
    <form action="{{ route('promos.index') }}" method="GET" class="form-inline mb-3">
        <input type="text" name="search" class="form-control mr-2" placeholder="Search Promos" value="{{ request('search') }}">
        <button type="submit" class="btn btn-primary">Search</button>
        <a href="{{ route('promos.index') }}" class="btn btn-secondary ml-2">Reset</a>

        <!-- Per Page Dropdown -->
        <label for="per_page" class="ml-3">Items per page:</label>
        <select name="per_page" id="per_page" class="form-control ml-2" onchange="this.form.submit()">
            <option value="5" {{ request('per_page') == 5 ? 'selected' : '' }}>5</option>
            <option value="10" {{ request('per_page') == 10 ? 'selected' : '' }}>10</option>
            <option value="20" {{ request('per_page') == 20 ? 'selected' : '' }}>20</option>
            <option value="50" {{ request('per_page') == 50 ? 'selected' : '' }}>50</option>
        </select>
    </form>

    <a href="{{ route('promos.create') }}" class="btn btn-primary mb-3">Create Promo</a>

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
            <th>Start Date</th>
            <th>End Date</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @forelse($promos as $promo)
            <tr>
                <td>{{ $promo->id }}</td>
                <td>{{ $promo->name }}</td>
                <td>{{ $promo->description }}</td>
                <td>{{ $promo->start_date }}</td>
                <td>{{ $promo->end_date }}</td>
                <td>
                    <a href="{{ route('promos.show', $promo->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('promos.edit', $promo->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('promos.destroy', $promo->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6">No promos found.</td>
            </tr>
        @endforelse
        </tbody>
    </table>

    <!-- Pagination Links (Maintains Search Query and Per Page Selection) -->
    <div class="mt-3">
        {{ $promos->appends(['search' => request('search'), 'per_page' => request('per_page')])->links() }}
    </div>
@endsection
