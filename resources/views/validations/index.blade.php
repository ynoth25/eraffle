@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">{{ __('Sachet Serial #s') }}</div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
                <form method="GET" action="{{ route('validations.index') }}">
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
                    <th>Serial #</th>
                    <th>Status</th>
                    <th>Date Added</th>
                    <th>
                        <div class="">
                            <a href="{{ route('validations.create', compact('promo'))}}" >
                                {{ __('Add Serial Number') }}
                            </a>
                        </div>
                    </th>
                </tr>
                </thead>
                <tbody>
                @forelse($validations as $validation)
                    <tr>
                        <td>{{ $validation->serial_number}}</td>
                        <td>{{ $validation->status}}</td>
                        <td>{{ $validation->created_at}}</td>
                        <td>
                            <a href="{{ route('validations.edit', compact('validation','promo')) }}">
                                Edit
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">No serial numbers found.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
