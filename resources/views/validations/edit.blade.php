<!-- resources/views/prizes/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Edit Validation</h1>

    <form action="{{ route('validations.update', $validation->id) }}" method="POST">
        @method('PUT')
        @include('validations.form', ['buttonText' => 'Update Validation'])
    </form>
@endsection
