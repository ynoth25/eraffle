@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">{{ __('Entries') }}</div>

        <div class="card-body">
            <form method="GET" action="{{ route('entries.index') }}">
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
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Serial Number</th>
                    <th>Status</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @forelse($entries as $entry)
                    <tr>
                        <td>{{ $entry->name}}</td>
                        <td>{{ $entry->email}}</td>
                        <td>{{ $entry->phone}}</td>
                        <td>{{ $entry->address}}</td>
                        <td>{{ $entry->serial_number}}</td>
                        <td>{{ $entry->status}}</td>
                        <td>
                            <a href="{{ route('entries.show', ['entry' => $entry->id]) }}">
                                View
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">No entries found.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
