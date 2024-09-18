<!-- resources/views/prizes/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Edit Prize</h1>

    <form action="{{ route('prizes.update', $prize->id) }}" method="POST">
        @method('PUT')
        @include('prizes.form', ['buttonText' => 'Update Prize'])
    </form>
@endsection
