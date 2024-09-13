<!-- resources/views/prizes/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Create Validation</h1>

    <form action="{{ route('validations.store') }}" method="POST">
        @include('validations.form', ['buttonText' => 'Create Validation'])
    </form>
@endsection
