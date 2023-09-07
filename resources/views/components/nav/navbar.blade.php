<x-layout>

    <div>
        <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center">
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('img/logonarbar.png') }}" class="img-fluid" width="80px" height="80px"
                            alt="logo">Booket
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item mx-5">
                            <x-nav.navlink label="Home" href="/" />
                        </li>
                        <li class="nav-item mx-5">
                            <x-nav.navlink label="About us" href="#about_us" />
                        </li>
                        <li class="nav-item mx-5">
                            @guest
                                <x-nav.navlink label="Login" href="/login" />
                            @endguest
                        </li>
                        <li class="nav-item mx-5">
                            <x-nav.navlink label="Perfil" href="/perfil" />
                        </li>
                        <li>
                            @auth
                            <li class="nav-item mx-5">
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button class="nav-link">Log out</button>
                                </form>
                            </li>
                        @endauth
                        </li>


                        <li class="nav-item mx-5">
                            <div class="text-center">
                                <a class="btn btn-outline-dark mt-auto" href="/registerBook">Upload</a>
                            </div>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>

    </div>

</x-layout>
