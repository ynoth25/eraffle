<!-- resources/views/prizes/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Edit Raffle</h1>

    <form action="{{ route('raffle_picks.update', $rafflePick->id) }}" method="POST">
        @method('PUT')
        @include('raffle_picks.form', ['buttonText' => 'Update Raffle Pick'])
    </form>
@endsection
