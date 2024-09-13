<!-- resources/views/prizes/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Raffle Picks</h1>

    <!-- Search and Per Page Form -->
    <form action="{{ route('raffle_picks.index') }}" method="GET" class="form-inline mb-3">
        <input type="text" name="search" class="form-control mr-2" placeholder="Search Prizes" value="{{ request('search') }}">
        <button type="submit" class="btn btn-primary">Search</button>
        <a href="{{ route('raffle_picks.index') }}" class="btn btn-secondary ml-2">Reset</a>

        <!-- Per Page Dropdown -->
        <label for="per_page" class="ml-3">Items per page:</label>
        <select name="per_page" id="per_page" class="form-control ml-2" onchange="this.form.submit()">
            <option value="5" {{ request('per_page') == 5 ? 'selected' : '' }}>5</option>
            <option value="10" {{ request('per_page') == 10 ? 'selected' : '' }}>10</option>
            <option value="20" {{ request('per_page') == 20 ? 'selected' : '' }}>20</option>
            <option value="50" {{ request('per_page') == 50 ? 'selected' : '' }}>50</option>
        </select>
    </form>

    <a href="{{ route('raffle_picks.create') }}" class="btn btn-primary mb-3">Create Raffle</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
        <tr>
            <th>Promo</th>
            <th>Entry</th>
            <th>Pick Date</th>
            <th>Is Winner</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @forelse($rafflePicks as $rafflePick)
            <tr>
                <td>{{ $rafflePick->promo->name ?? 'No Promo' }}</td>
                <td>{{ $rafflePick->entry->id ?? 'No Entry' }}</td>
                <td>{{ $rafflePick->pick_date }}</td>
                <td>{{ $rafflePick->is_winner ? 'Yes' : 'No' }}</td>
                <td>
                    <a href="{{ route('raffle_picks.show', $rafflePick->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('raffle_picks.edit', $rafflePick->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('raffle_picks.destroy', $rafflePick->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">No raffle picks found.</td>
            </tr>
        @endforelse
        </tbody>
    </table>

    <!-- Pagination Links -->
    <div class="mt-3">
        {{ $rafflePicks->appends(['search' => request('search'), 'per_page' => request('per_page')])->links() }}
    </div>
@endsection
