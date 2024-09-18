@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Raffle Draw') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('raffle_picks.store') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Entry') }}</label>

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
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Prize') }}</label>

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

                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Draw') }}
                                    </button>
                                </div>
                                <div class="col-md-6 offset-md-4">
                                    <a href="{{ route('raffle_picks.index') }}">
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
