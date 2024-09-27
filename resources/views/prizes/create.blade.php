@extends('layouts.layout')

@section('content')
    <div class="card">
        <div class="card-header">{{ __('Create prize') }}</div>

        <div class="card-body">
            <form method="POST" action="{{ route('prizes.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="row mb-3">
                    <label for="promo" class="col-md-4 col-form-label text-md-end">{{ __('Select Promo') }}</label>

                    <div class="col-md-6">
                        <select id="promo" name="promo_id" class="form-select @error('promo_id') is-invalid @enderror">
                            <option value="" disabled selected>{{ __('Choose a promo') }}</option>
                            @foreach($promos as $promo)
                                <option value="{{ $promo->id }}">{{ $promo->name }}</option> <!-- Adjust to your promo's name attribute -->
                            @endforeach
                        </select>

                        @error('promo_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Code') }}</label>

                    <div class="col-md-6">
                        <input id="code" type="text" class="form-control @error('code') is-invalid @enderror" name="code" value="{{ old('code') }}">

                        @error('code')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>

                    <div class="col-md-6">
                        <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}">

                        @error('description')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Quantity') }}</label>

                    <div class="col-md-6">
                        <input id="quantity" type="number" class="form-control @error('quantity') is-invalid @enderror" name="quantity" value="{{ old('quantity', $prize->quantity ?? '') }}">

                        @error('quantity')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="file" class="col-md-4 col-form-label text-md-end">{{ __('Upload (Optional)') }}</label>

                    <div class="col-md-6">
                        <input type="file" name="file" id="file" class="form-control @error('file') is-invalid @enderror">
                        @error('file')
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
