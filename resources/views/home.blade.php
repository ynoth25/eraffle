@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">{{ __('Statistics Overview') }}</div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="card text-white bg-primary mb-3">
                        <div class="card-header">Total Promos</div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $totalPromos }}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-success mb-3">
                        <div class="card-header">Total Prizes</div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $totalPrizes }}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-warning mb-3">
                        <div class="card-header">Total Entries</div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $totalEntries }}</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card text-white bg-info mb-3">
                        <div class="card-header">Total Raffle Picks</div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $totalRafflePicks }}</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card text-white bg-info mb-3">
                        <div class="card-header">Total Raffle Winners</div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $winningRafflePicks }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
