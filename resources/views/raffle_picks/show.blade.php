<!-- resources/views/validations/show.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Raffle Pick Details</h1>

    <div class="mb-3">
        <strong>Promo:</strong> {{ $rafflePick->promo->name ?? 'No Promo' }}
    </div>
    <div class="mb-3">
        <strong>Entry:</strong> {{ $rafflePick->entry->id ?? 'No Entry' }}
    </div>
    <div class="mb-3">
        <strong>Pick Date:</strong> {{ $rafflePick->pick_date }}
    </div>
    <div class="mb-3">
        <strong>Is Winner:</strong> {{ $rafflePick->is_winner ? 'Yes' : 'No' }}
    </div>

    <a href="{{ route('raffle_picks.edit', $rafflePick->id) }}" class="btn btn-warning">Edit</a>
    <a href="{{ route('raffle_picks.index') }}" class="btn btn-primary">Back to List</a>
@endsection
