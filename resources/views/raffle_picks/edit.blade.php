<!-- resources/views/prizes/edit.blade.php -->
@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Raffle Draw') }}</div>

                    <div class="card-body">
                        <form action="{{ route('raffle_picks.update', $rafflePick->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Entry') }}</label>

                                <div class="col-md-6">
                                    <input id="entry" type="text" class="form-control @error('entry') is-invalid @enderror" name="entry" value="{{ $rafflePick->entry->name ?? '' }}" readonly>

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
                                    <input id="prize" type="text" class="form-control @error('prize') is-invalid @enderror" name="prize" value="{{ $rafflePick->prize->description ?? '' }}" readonly>

                                    @error('prize')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Picked Date') }}</label>

                                <div class="col-md-6">
                                    <input id="pick_date" type="text" class="form-control @error('pick_date') is-invalid @enderror" name="pick_date" value="{{ $rafflePick->pick_date ?? '' }}" readonly>

                                    @error('pick_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Has User Won?') }}</label>

                                <div class="col-md-6">
                                    <input type="checkbox" id="is_winner" name="is_winner" value="1" {{ $rafflePick->is_winner ? 'checked' : '' }}>

                                    @error('pick_date')
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
                                        {{ __('Save') }}
                                    </button>
                                </div>
                                <div class="col-md-6 offset-md-4">
                                    <a href="{{ route('raffle_picks.index') }}">
                                        Back to list
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
