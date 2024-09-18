@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Prize Details') }}</div>

                    <div class="card-body">
                        <div class="row mb-3">
                            <label for="code" class="col-md-4 col-form-label text-md-end">{{ __('Code') }}</label>

                            <div class="col-md-6">
                                <p id="code" class="form-control-plaintext">{{ $prize->code }}</p>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <p id="description" class="form-control-plaintext">{{ $prize->description }}</p>
                            </div>
                        </div>

                        @if($prize->file)
                            <div class="row mb-3">
                                <label for="file" class="col-md-4 col-form-label text-md-end">{{ __('Uploaded File') }}</label>

                                <div class="col-md-6">
                                    <a href="{{ Storage::url($prize->file) }}" class="btn btn-primary" target="_blank">
                                        {{ __('View File') }}
                                    </a>
                                </div>
                            </div>
                        @endif

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
                                <a href="{{ route('prizes.edit', $prize->id) }}" class="btn btn-primary">
                                    {{ __('Edit') }}
                                </a>
                                <a href="{{ url()->previous() }}" class="btn btn-secondary">
                                    {{ __('Back') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
