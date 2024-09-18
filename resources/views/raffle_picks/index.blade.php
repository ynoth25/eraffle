@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Raffle Picks') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table class="table">
                            <thead>
                            <tr>
                                <th>Entry Name</th>
                                <th>Prize</th>
                                <th>Is Winner</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($rafflePicks as $rafflePick)
                                <tr>
                                    <td>{{ $rafflePick->entry->name}}</td>
                                    <td>{{ $rafflePick->prize->description}}</td>
                                    <td>{{ $rafflePick->is_winner == true ? 'true':'false'}}</td>
                                    <td>
                                        <a href="{{ route('raffle_picks.edit', ['raffle_pick' => $rafflePick->id]) }}">
                                            Edit
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5">No raffle picks found.</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                            <div class="col-md-6 offset-md-4">
                                <a href="{{ route('raffle_picks.create') }}">
                                    Back to draw
                                </a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
