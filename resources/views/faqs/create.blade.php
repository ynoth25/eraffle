<!-- resources/views/faqs/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Create FAQ</h1>

    <form action="{{ route('faqs.store') }}" method="POST">
        @include('faqs.form')
    </form>
@endsection
