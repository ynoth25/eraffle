@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">{{ __('Prizes') }}</div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
                <form method="GET" action="{{ route('prizes.index') }}">
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

            <table class="table">
                <thead>
                <tr>
                    <th>Code</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>
                        <div class="col-md-4 text-end"> <!-- Adjust the width of the button here -->
                            <a href="{{ route('prizes.create')}}">
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
                            <a href="{{ route('prizes.edit', compact('prize')) }}" class="btn btn-secondary">
                                Edit
                            </a>
                            <form action="{{ route('prizes.destroy', $prize->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this prize?');" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
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
@endsection
