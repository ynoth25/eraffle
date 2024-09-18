@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
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
                            <label class="col-md-4 col-form-label text-md-end">{{ __('Status') }}</label>
                            <div class="col-md-6">
                                <p>{{ $entry->status }}</p>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">{{ __('Changa Sachet (Front)') }}</label>
                            <div class="col-md-6">
                                @if ($entry->sachet_front_image)
                                    <img src="{{ route('storage.show', ['disk' => 'sachets', 'filename' => $entry->sachet_front_image]) }}" alt="Sachet Front" class="img-fluid">
                                @else
                                    <p>No image available</p>
                                @endif
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">{{ __('Changa Sachet (Back)') }}</label>
                            <div class="col-md-6">
                                @if ($entry->sachet_back_image)
                                    <img src="{{ route('storage.show', ['disk' => 'sachets', 'filename' => $entry->sachet_back_image]) }}" alt="Sachet Back" class="img-fluid">
                                @else
                                    <p>No image available</p>
                                @endif
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">{{ __('ID (Front)') }}</label>
                            <div class="col-md-6">
                                @if ($entry->id_front_image)
                                    <img src="{{ route('storage.show', ['disk' => 'ids', 'filename' => $entry->id_front_image]) }}" alt="ID Front" class="img-fluid">
                                @else
                                    <p>No image available</p>
                                @endif
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">{{ __('ID (Back)') }}</label>
                            <div class="col-md-6">
                                @if ($entry->id_back_image)
                                    <img src="{{ route('storage.show', ['disk' => 'ids', 'filename' => $entry->id_back_image]) }}" alt="ID Back" class="img-fluid">
                                @else
                                    <p>No image available</p>
                                @endif
                            </div>
                        </div>

                        <a href="{{ url()->previous() }}" class="btn btn-secondary">
                            {{ __('Back') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
