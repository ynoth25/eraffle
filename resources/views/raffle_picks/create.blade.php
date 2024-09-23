@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Raffle Draw') }}</div>

                    <div class="card-body">
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <!-- Promo Details Section -->
                        <div class="row mb-3">
                            <label for="promo-name" class="col-md-4 col-form-label text-md-end">{{ __('Prize Code') }}</label>
                            <div class="col-md-6">
                                <input id="promo-name" type="text" class="form-control" value="{{ $prize?->code }}" readonly>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="promo-description" class="col-md-4 col-form-label text-md-end">{{ __('Prize Description') }}</label>
                            <div class="col-md-6">
                                <textarea id="promo-description" class="form-control" rows="3" readonly>{{ $prize?->description }}</textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="start-date" class="col-md-4 col-form-label text-md-end">{{ __('Quantity') }}</label>
                            <div class="col-md-6">
                                <input id="start-date" type="text" class="form-control" value="{{ $prize?->quantity }}" readonly>
                            </div>
                        </div>

                        <!-- Prize Section -->
                        <div class="row mb-3">
                            <label for="prize" class="col-md-4 col-form-label text-md-end">{{ __('Prize') }}</label>

                            <div class="col-md-6">
                                <input id="prize" type="text" class="form-control @error('prize') is-invalid @enderror" name="prize" value="{{ session('pickedPrize')->description ?? '' }}" readonly>

                                @error('prize')
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

                        <!-- Disable the draw button if no available prizes exist -->
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary"
                                    {{ !$prize ? 'disabled' : '' }}>
                                    {{ __('Draw') }}
                                </button>
                            </div>
                            <div class="col-md-6 offset-md-4 mt-2">
                                <a href="{{ route('raffle_picks.index', compact('promo')) }}">
                                    See winners
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
