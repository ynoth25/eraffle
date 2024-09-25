@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">{{ __('Entry Details') }}</div>

        <div class="card-body">
            <div class="row mb-3">
                <label class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                <div class="col-md-6">
                    <p>{{ $entry->name }}</p>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>
                <div class="col-md-6">
                    <p>{{ $entry->email }}</p>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-md-4 col-form-label text-md-end">{{ __('Phone') }}</label>
                <div class="col-md-6">
                    <p>{{ $entry->phone }}</p>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-md-4 col-form-label text-md-end">{{ __('Address') }}</label>
                <div class="col-md-6">
                    <p>{{ $entry->address }}</p>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-md-4 col-form-label text-md-end">{{ __('Serial Number') }}</label>
                <div class="col-md-6">
                    <p>{{ $entry->serial_number }}</p>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-md-4 col-form-label text-md-end">{{ __('Status') }}</label>
                <div class="col-md-6">
                    <p>{{ $entry->status }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
