<!-- resources/views/promos/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Edit Promo</h1>

    @include('promos.form', ['promo' => $promo])
@endsection
