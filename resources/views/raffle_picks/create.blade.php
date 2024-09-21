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

                        <form method="POST" action="{{ route('raffle_picks.store', compact('promo')) }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="entry" class="col-md-4 col-form-label text-md-end">{{ __('Entry') }}</label>

                                <div class="col-md-6">
                                    <input id="entry" type="text" class="form-control @error('entry') is-invalid @enderror" name="entry" value="{{ session('pickedEntry')->name ?? '' }}" readonly>

                                    @error('entry')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

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

                            <!-- Disable the draw button if no entries or available prizes exist -->
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary"
                                        {{ (!$prize || $entries->count() <= 0) ? 'disabled' : '' }}>
                                        {{ __('Draw') }}
                                    </button>
                                </div>
                                <div class="col-md-6 offset-md-4 mt-2">
                                    <a href="{{ route('raffle_picks.index', compact('promo')) }}">
                                        See winners
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
