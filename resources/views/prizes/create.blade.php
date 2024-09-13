<!-- resources/views/prizes/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Create Prize</h1>

    <form action="{{ route('prizes.store') }}" method="POST">
        @include('prizes.form', ['buttonText' => 'Create Prize'])
    </form>
@endsection
