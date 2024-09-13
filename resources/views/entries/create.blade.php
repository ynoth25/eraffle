<!-- resources/views/prizes/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Create Prize</h1>

    <form action="{{ route('entries.store') }}" method="POST">
        @include('entries.form', ['buttonText' => 'Create Entry'])
    </form>
@endsection
