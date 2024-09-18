<!-- resources/views/prizes/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Create Raffle</h1>

    <form action="{{ route('raffle_picks.store') }}" method="POST">
        @include('raffle_picks.form', ['buttonText' => 'Create Raffle'])
    </form>
@endsection
