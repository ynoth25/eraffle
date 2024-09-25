@extends('layouts.layout')

@section('content')
    <div class="card">
        <div class="card-header">{{ __('Edit Serial Number') }}</div>

        <div class="card-body">
            <form method="POST" action="{{ route('validations.update', compact('validation', 'promo')) }}">
                @csrf
                @method('PUT')

                <div class="row mb-3">
                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Serial #') }}</label>

                    <div class="col-md-6">
                        <input id="serial_number" type="text" class="form-control @error('serial_number') is-invalid @enderror" name="serial_number" value="{{ old('serial_number', $validation->serial_number ?? '') }}">

                        @error('serial_number')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Status') }}</label>

                    <div class="col-md-6">
                        <input id="status" type="text" class="form-control @error('status') is-invalid @enderror" name="status" value="{{ old('status', $validation->status ?? '') }}">

                        @error('status')
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
