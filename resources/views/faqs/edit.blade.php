<!-- resources/views/faqs/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Edit FAQ</h1>

    <form action="{{ route('faqs.update', $faq->id) }}" method="POST">
        @include('faqs.form')
    </form>
@endsection
