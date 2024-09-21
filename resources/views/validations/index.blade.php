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
                                <a href="{{ route('promos.index', compact('promo'))}}" class="btn btn-secondary">
                                    {{ __('Back to Promo List') }}
                                </a>
                            </div>
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
            </div>
        </div>
    </div>
@endsection
