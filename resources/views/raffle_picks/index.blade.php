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
                        <div class="text-end">
                            <a href="{{ route('promos.index')}}" class="btn btn-secondary">
                                {{ __('Back to Promo List') }}
                            </a>
                        </div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Entry Name</th>
                                <th>Prize</th>
                                <th>Is Winner</th>
                                <th>
                                    <a href="{{ route('raffle_picks.create', compact('promo'))}}">
                                        {{ __('Raffle Draw') }}
                                    </a>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($rafflePicks as $rafflePick)
                                <tr>
                                    <td>
                                        <a href="{{ route('entries.show', ['entry' => $rafflePick->entry]) }}">
                                            {{ $rafflePick->entry->name}}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('prizes.show', ['prize' => $rafflePick->prize]) }}">
                                            {{ $rafflePick->prize->description}}
                                        </a>
                                    </td>
                                    <td>{{ $rafflePick->is_winner == true ? 'true':'false'}}</td>
                                    <td>
                                        <a href="{{ route('raffle_picks.edit', ['raffle_pick' => $rafflePick->id, 'promo' => $promo]) }}">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
