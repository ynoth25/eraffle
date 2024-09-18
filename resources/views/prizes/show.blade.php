@extends('layouts.app')

@section('content')
    <h1>Prize Details</h1>

    <p><strong>Prize Name:</strong> {{ $prize->name }}</p>
    <p><strong>Description:</strong> {{ $prize->description }}</p>
    <p><strong>Value:</strong> {{ $prize->value }}</p>

    @if($promo)
        <h2>Associated Promo</h2>
        <p><strong>Promo Name:</strong> {{ $promo->name }}</p>
        <p><strong>Description:</strong> {{ $promo->description }}</p>
        <p><strong>Start Date:</strong> {{ $promo->start_date }}</p>
        <p><strong>End Date:</strong> {{ $promo->end_date }}</p>
    @else
        <p>No associated promo found.</p>
    @endif
@endsection
