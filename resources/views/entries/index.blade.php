@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Entries') }}</div>

                    <div class="card-body">
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
            </div>
        </div>
    </div>
@endsection
