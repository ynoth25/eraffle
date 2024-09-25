@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">{{ __('Raffle Picks') }}</div>

        <div class="card-body">
            <form method="GET" action="{{ route('raffle_picks.index') }}">
                <div class="row mb-3 align-items-center">
                    <div class="col-md-4">
                        <select id="promoSelect" name="promo_id" class="form-select">
                            <option value="" selected>{{ __('Choose a promo') }}</option>
                            @foreach($promos as $promo)
                                <option value="{{ $promo->id }}" {{ request('promo_id') == $promo->id ? 'selected' : '' }}>{{ $promo->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-auto">
                        <button type="submit" class="btn btn-primary">{{ __('Search') }}</button>
                    </div>
                </div>
            </form>
            <br>
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
                    <th>
                        <a href="{{ route('raffle_picks.create')}}">
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
@endsection
