<!-- resources/views/validations/show.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Validation Details</h1>

    <div class="mb-3">
        <strong>Entry:</strong> {{ $validation->entry->id ?? 'No Entry' }}
    </div>
    <div class="mb-3">
        <strong>Validated By:</strong> {{ $validation->admin->name ?? 'No Admin' }}
    </div>
    <div class="mb-3">
        <strong>Validation Code:</strong> {{ $validation->validation_code }}
    </div>
    <div class="mb-3">
        <strong>Status:</strong> {{ $validation->validation_status }}
    </div>
    <div class="mb-3">
        <strong>Comments:</strong> {{ $validation->comments }}
    </div>
    <div class="mb-3">
        <strong>Validation Date:</strong> {{ $validation->validation_date }}
    </div>

    <a href="{{ route('validations.edit', $validation->id) }}" class="btn btn-warning">Edit</a>
    <a href="{{ route('validations.index') }}" class="btn btn-primary">Back to List</a>
@endsection
