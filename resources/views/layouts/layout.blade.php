<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<div id="app">
    <main class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <!-- Sidebar -->
                    <div class="card">
                        <div class="card-header">{{ __('Admin Panel') }}</div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="list-group-item"><a href="{{ route('promos.index') }}">Promos</a></li>
                            <li class="list-group-item"><a href="{{ route('prizes.index') }}">Prizes</a></li>
                            <li class="list-group-item"><a href="{{ route('validations.index') }}">Validations</a></li>
                            <li class="list-group-item"><a href="{{ route('raffle_picks.index') }}">Entries</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    @yield('content')
                </div>
            </div>
        </div>
    </main>
</div>
</body>
</html>
