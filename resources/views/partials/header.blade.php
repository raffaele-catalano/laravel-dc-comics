<header>
    <nav class="navbar border-primary navbar-expand-lg bg-dark nav-tabs pb-0 pt-3">
        <div class="container-fluid">
            <div class="logo-container">
                <img src="/img/dc-logo.png" class="m-1 me-3" alt="logo">
            </div>
            <div class="collapse navbar-collapse text-danger" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link border-primary text-primary fw-bold fs-5 {{ Route::currentRouteName() === 'home' ? 'active' : '' }}"
                            href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link border-primary text-primary fw-bold fs-5 {{ Route::currentRouteName() === 'movies' ? 'active' : '' }}"
                            href="{{ route('comics.index') }}">Comics List</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
