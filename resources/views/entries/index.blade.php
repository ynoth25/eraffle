<!-- resources/views/entries/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Entries</h1>

    <form method="GET" action="{{ route('entries.index') }}" class="mb-3">
        <div class="form-group">
            <input type="text" name="search" class="form-control" placeholder="Search..." value="{{ $search }}">
        </div>
        <div class="form-group">
            <select name="per_page" class="form-control">
                <option value="10" {{ $perPage == 10 ? 'selected' : '' }}>10 per page</option>
                <option value="25" {{ $perPage == 25 ? 'selected' : '' }}>25 per page</option>
                <option value="50" {{ $perPage == 50 ? 'selected' : '' }}>50 per page</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Filter</button>
    </form>

    <a href="{{ route('entries.create') }}" class="btn btn-success mb-3">Create New Entry</a>

    <table class="table">
        <thead>
        <tr>
            <th>User</th>
            <th>Promo</th>
            <th>Submission Date</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @forelse($entries as $entry)
            <tr>
                <td>{{ $entry->user->name ?? 'No User' }}</td>
                <td>{{ $entry->promo->name ?? 'No Promo' }}</td>
                <td>{{ $entry->submission_date }}</td>
                <td>{{ $entry->status }}</td>
                <td>
                    <a href="{{ route('entries.show', $entry->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('entries.edit', $entry->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('entries.destroy', $entry->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">No entries found.</td>
            </tr>
        @endforelse
        </tbody>
    </table>

    {{ $entries->appends(['search' => $search, 'per_page' => $perPage])->links() }}
@endsection
