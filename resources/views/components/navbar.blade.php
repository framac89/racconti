<nav class="navbar navbar-expand-lg pink m-1 rounded">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">LOGO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pagina1') }}">Info</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pagina2') }}">Pagina 2</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mx-4" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Benvenuto! @guest Sei registrato? @endguest   @auth
                            {{Auth::user()->name }}
                        @endauth
                    </a>
                    <ul class="dropdown-menu pink">
                        @guest
                        <li><a class="dropdown-item" href="{{ route('register') }}">Registrati</a></li>
                        <li><a class="dropdown-item" href="{{ route('login') }}">Accedi</a></li>
                        @endguest
                        @auth
                            <li>
                                <a href="#" class="dropdown-item"
                                    onclick="event.preventDefault();document.querySelector('#form-logout').submit();">Logout</a>
                                <form action="{{ route('logout') }}" method="POST" class="d-none" id="form-logout">@csrf
                                </form>
                            </li>
                        @endauth
                    </ul>
                </li>
            </ul>

        </div>
    </div>
</nav>
