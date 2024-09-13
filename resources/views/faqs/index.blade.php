<!-- resources/views/faqs/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>FAQs</h1>

    <form method="GET" action="{{ route('faqs.index') }}" class="mb-3">
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

    <a href="{{ route('faqs.create') }}" class="btn btn-success mb-3">Create New FAQ</a>

    <table class="table">
        <thead>
        <tr>
            <th>Question</th>
            <th>Answer</th>
            <th>Promo</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @forelse($faqs as $faq)
            <tr>
                <td>{{ $faq->question }}</td>
                <td>{{ $faq->answer }}</td>
                <td>{{ $faq->promo->name ?? 'No Promo' }}</td> <!-- Display the promo name -->
                <td>
                    <a href="{{ route('faqs.show', $faq->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('faqs.edit', $faq->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('faqs.destroy', $faq->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4">No FAQs found.</td>
            </tr>
        @endforelse
        </tbody>
    </table>

    {{ $faqs->appends(['search' => $search, 'per_page' => $perPage])->links() }}
@endsection
