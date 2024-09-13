<!-- resources/views/promos/show.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Promo Details</h1>

    <div>
        <strong>Name:</strong> {{ $promo->name }}
    </div>

    <div>
        <strong>Description:</strong> {{ $promo->description }}
    </div>

    <div>
        <strong>Start Date:</strong> {{ $promo->start_date }}
    </div>

    <div>
        <strong>End Date:</strong> {{ $promo->end_date }}
    </div>

    <div>
        <strong>Terms and Conditions:</strong> {{ $promo->terms_and_conditions }}
    </div>

    <a href="{{ route('promos.index') }}" class="btn btn-primary">Back to List</a>
@endsection
