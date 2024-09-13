<!-- resources/views/promos/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Create Admin</h1>

    @include('admins.form', ['admin' => null])
@endsection
