@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">{{ __('Promos') }}</div>

        <div class="card-body">
            <table class="table">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Terms & Conditions</th>
                    <th>
                        <div>
                            <a href="{{ route('promos.create')}}" class="btn btn-success">
                                {{ __('Create Promo    ') }}
                            </a>
                        </div>
                    </th>
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
                            <a href="{{ route('promos.edit', ['promo' => $promo->id]) }}" class="me-3 btn btn-success">
                                Edit
                            </a>
                            <form action="{{ route('promos.destroy', $promo->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this promo?');" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">No promos found.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
        </div>
    </div>
@endsection
