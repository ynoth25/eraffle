<!-- resources/views/faqs/show.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>FAQ Details</h1>

    <p><strong>Question:</strong> {{ $faq->question }}</p>
    <p><strong>Answer:</strong> {{ $faq->answer }}</p>

    <a href="{{ route('faqs.edit', $faq->id) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('faqs.destroy', $faq->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
    </form>
    <a href="{{ route('faqs.index') }}" class="btn btn-secondary">Back to FAQ List</a>
@endsection
