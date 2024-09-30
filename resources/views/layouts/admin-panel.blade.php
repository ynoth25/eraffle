<style>
    /* Basic breadcrumb styling */
    .breadcrumb {
        list-style: none;
        display: flex;
        justify-content: flex-start;
        padding: 8px 16px;
        background-color: #f8f9fa;
        border-radius: 4px;
    }

    .breadcrumb-item {
        margin-right: 8px;
    }

    .breadcrumb-item a {
        text-decoration: none;
        color: #007bff;
        font-weight: bold;
    }

    .breadcrumb-item a:hover {
        text-decoration: underline;
    }

    .breadcrumb-item::after {
        content: ">";
        margin-left: 8px;
        color: #6c757d;
    }

    .breadcrumb-item:last-child::after {
        content: "";
    }

    .breadcrumb-item.active {
        font-weight: bold;
        color: #6c757d;
    }

    /* Mobile-friendly */
    @media (max-width: 600px) {
        .breadcrumb {
            flex-wrap: wrap;
        }
    }
</style>
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
            <a href="{{ route('raffle_picks.index') }}">Raffle</a>
        </li>
    </ol>
</nav>
