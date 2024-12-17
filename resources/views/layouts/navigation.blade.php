<style>
    .navbar-container {
        width: 100%;
        color: rgb(255, 255, 255);
        background-color: #55a44c;
        border-radius: 10px;
    }

    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1rem;
    }

    .nav-links {
        list-style: none;
        margin-bottom: 0%;
        display: flex;
    }

    .nav-links li {
        margin-right: 1.5rem;
    }

    .nav-links a {
        text-decoration: none;
        /* border-bottom: 1px  solid #55a44c; */
        /* box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px; */
        border-radius: 10px;
        color: rgb(0, 0, 0);
        padding: 10px 15px;
        font-size: 16px;
        transition: background-color 0.3s ease;
    }

    .nav-active {
        background-color: #55a44c;
        /* Highlight active link */
        border-radius: 4px;
    }

    .nav-links a:hover {
        background-color: #55a44c;
        border-radius: 10px;
    }

    .logout-button {
        background-color: #113219;
        color: rgb(255, 255, 255);
        padding: 8px 15px;
        font-size: 14px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .logout-button:hover {
        background-color: #113219;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .navbar {
            flex-direction: column;
        }

        .nav-links {
            flex-direction: column;
            align-items: center;
            width: 100%;
        }

        .nav-links li {
            margin: 10px 0;
        }

        .logout-button {
            margin-top: 10px;
            width: 100%;
        }
    }
</style>

<div class="navbar-container">
    <nav class="navbar">
        <ul class="nav-links">
            <li><a href="{{ route('home') }}" class="{{ request()->is('/') ? 'nav-active' : '' }}">Home</a></li>
            <li><a href="{{ route('promos.index') }}"
                    class="{{ request()->is('/promos') ? 'nav-active' : '' }}">Promos</a></li>
            <li><a href="{{ route('prizes.index') }}"
                    class="{{ request()->is('/prizes') ? 'nav-active' : '' }}">Prizes</a></li>
            <li><a href="{{ route('validations.index') }}"
                    class="{{ request()->is('/validations') ? 'nav-active' : '' }}">Validation</a></li>
            <li><a href="{{ route('entries.index') }}"
                    class="{{ request()->is('/entries') ? 'nav-active' : '' }}">Entries</a></li>
            <li><a href="{{ route('raffle_picks.create') }}"
                    class="{{ request()->is('/raffle_picks') ? 'nav-active' : '' }}">Raffle</a></li>
            <li><a href="{{ route('users.list') }}"
                    class="{{ request()->is('/users') ? 'nav-active' : '' }}">Users</a></li>
        </ul>
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();"
            class="logout-button"style="color: white">Logout</a>
    </nav>
</div>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
