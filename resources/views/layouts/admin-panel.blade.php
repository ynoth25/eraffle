<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item {{ Request::routeIs('home') ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a>
        </li>
        <li class="breadcrumb-item {{ Request::routeIs('promos.index') ? 'active' : '' }}"><a
                href="{{ route('promos.index') }}">Promos</a></li>
        <li class="breadcrumb-item {{ Request::routeIs('prizes.index') ? 'active' : '' }}"><a
                href="{{ route('prizes.index') }}">Prizes</a></li>
        <li class="breadcrumb-item {{ Request::routeIs('validations.index') ? 'active' : '' }}"><a
                href="{{ route('validations.index') }}">Validations</a></li>
        <li class="breadcrumb-item {{ Request::routeIs('entries.index') ? 'active' : '' }}"><a
                href="{{ route('entries.index') }}">Entries</a></li>
        <li class="breadcrumb-item {{ Request::routeIs('raffle_picks.index') ? 'active' : '' }}">
            <a href="{{ route('promos.index') }}">Raffle</a>
        </li>
    </ol>
</nav>
