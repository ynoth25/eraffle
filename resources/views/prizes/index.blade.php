@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Prizes') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                            <div class="text-end mb-3">
                                <a href="{{ route('promos.index')}}" class="btn btn-secondary">
                                    {{ __('Back to Promo List') }}
                                </a>
                            </div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Code</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>
                                    <div class="">
                                        <a href="{{ route('prizes.create', compact('promo'))}}" >
                                            {{ __('Create Prize') }}
                                        </a>
                                    </div>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($prizes as $prize)
                                <tr>
                                    <td>{{ $prize->code}}</td>
                                    <td>{{ $prize->description}}</td>
                                    <td>{{ $prize->status}}</td>
                                    <td>
                                        <a href="{{ route('prizes.edit', compact('prize', 'promo')) }}">
                                            Edit
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5">No prizes found.</td>
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
