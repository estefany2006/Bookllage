<nav class="navbar navbar-expand-lg fixed-top" style="background-color: rgba(255, 255, 255, 0.3);">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center">
            <a class="navbar-brand fs-2" href="/#" style="font-family: 'Roboto Serif', serif">
                <img src="{{ asset('img/logonarbar.png') }}" class="img-fluid me-3" width="80px" height="80px" alt="logo">BOOKET
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse justify-content-end"  style="font-family: 'Roboto Serif', serif" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <x-nav.navlink label="Home" href="/" />
                <x-nav.navlink label="About us" href="/#about_us" />
                <x-nav.navlink label="Categories" href="/categories" />
                @guest
                    <x-nav.navlink label="Login" href="/login" />
                @endguest
                <x-nav.navlink label="Profile" href="/perfil" />
                @auth
                    <li class="nav-item mx-4">
                        <form action="/logout" method="POST">
                            @csrf
                            <button class="nav-link">Log out</button>
                        </form>
                    </li>
                    <li class="nav-item mx-4">
                        <div class="text-center">
                            <a class="btn btn-outline-dark mt-auto" href="/registerBook">Upload</a>
                        </div>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
