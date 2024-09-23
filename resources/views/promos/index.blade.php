@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Promos') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="text-end mb-2">
                            <a href="{{ route('promos.create')}}" class="btn btn-success">
                                {{ __('Create Promo    ') }}
                            </a>
                        </div>
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Terms & Conditions</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($promos as $promo)
                                <tr>
                                    <td>{{ $promo->name}}</td>
                                    <td>{{ $promo->description}}</td>
                                    <td>{{ $promo->start_date}}</td>
                                    <td>{{ $promo->end_date}}</td>
                                    <td>{{ $promo->terms_and_conditions}}</td>
                                    <td>
                                        <a href="{{ route('promos.edit', ['promo' => $promo->id]) }}" class="me-3">
                                            Edit
                                        </a>
                                        <a href="{{ route('prizes.index', compact('promo')) }}" class="me-3">
                                            Prizes
                                        </a>
                                        <a href="{{ route('entries.index', compact('promo')) }}" class="me-3">
                                            Entries
                                        </a>
                                        <a href="{{ route('validations.index', compact('promo')) }}" class="me-3">
                                            Serials
                                        </a>
                                        <a href="{{ route('raffle_picks.index', compact('promo')) }}" class="me-3">
                                            Raffles
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5">No promos found.</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
