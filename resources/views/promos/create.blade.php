@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">{{ __('Create promos') }}</div>

        <div class="card-body">
            <form method="POST" action="{{ route('promos.store') }}" enctype="multipart/form-data">
                @csrf

                <!-- Name Field -->
                <div class="row mb-3">
                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $promo->name ?? '') }}">

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <!-- Description Field -->
                <div class="row mb-3">
                    <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>

                    <div class="col-md-6">
                        <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description', $promo->description ?? '') }}">

                        @error('description')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <!-- Start Date Field -->
                <div class="row mb-3">
                    <label for="start_date" class="col-md-4 col-form-label text-md-end">{{ __('Start Date') }}</label>

                    <div class="col-md-6">
                        <input id="start_date" type="text" class="form-control @error('start_date') is-invalid @enderror" name="start_date" value="{{ old('start_date', $promo->start_date ?? '') }}">

                        @error('start_date')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <!-- End Date Field -->
                <div class="row mb-3">
                    <label for="end_date" class="col-md-4 col-form-label text-md-end">{{ __('End Date') }}</label>

                    <div class="col-md-6">
                        <input id="end_date" type="text" class="form-control @error('end_date') is-invalid @enderror" name="end_date" value="{{ old('end_date', $promo->end_date ?? '') }}">

                        @error('end_date')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <!-- Terms & Conditions Field -->
                <div class="row mb-3">
                    <label for="terms_and_conditions" class="col-md-4 col-form-label text-md-end">{{ __('Terms & Conditions') }}</label>

                    <div class="col-md-6">
                        <input id="terms_and_conditions" type="text" class="form-control @error('terms_and_conditions') is-invalid @enderror" name="terms_and_conditions" value="{{ old('terms_and_conditions', $promo->terms_and_conditions ?? '') }}">

                        @error('terms_and_conditions')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <!-- Poster Image Field -->
                <div class="row mb-3">
                    <label for="poster" class="col-md-4 col-form-label text-md-end">{{ __('Poster') }}</label>

                    <div class="col-md-6">
                        <input id="poster" type="file" class="form-control @error('poster') is-invalid @enderror" name="poster">

                        @error('poster')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                <div class="row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Submit') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
