<!-- resources/views/entries/show.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Entry Details</h1>

    <p><strong>User:</strong> {{ $entry->user->name ?? 'No User' }}</p>
    <p><strong>Promo:</strong> {{ $entry->promo->name ?? 'No Promo' }}</p>
    <p><strong>Submission
@endsection
