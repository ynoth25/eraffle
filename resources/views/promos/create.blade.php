<!-- resources/views/promos/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Create Promo</h1>

    @include('promos.form', ['promo' => null])
@endsection
