<!-- resources/views/promos/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Edit Admin</h1>

    @include('admins.form', ['admin' => $admin])
@endsection
