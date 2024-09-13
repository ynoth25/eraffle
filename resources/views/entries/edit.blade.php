<!-- resources/views/prizes/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Edit Prize</h1>

    <form action="{{ route('entries.update', $entry->id) }}" method="POST">
        @method('PUT')
        @include('entries.form', ['buttonText' => 'Edit Entry'])
    </form>
@endsection
