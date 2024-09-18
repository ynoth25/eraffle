<!-- resources/views/promos/show.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Admin Details</h1>

    <div class="mb-3">
        <strong>Name:</strong> {{ $admin->name }}
    </div>
    <div class="mb-3">
        <strong>Email:</strong> {{ $admin->email }}
    </div>
    <div class="mb-3">
        <strong>Role:</strong> {{ $admin->role }}
    </div>


    <a href="{{ route('admins.index') }}" class="btn btn-primary">Back to List</a>
@endsection
