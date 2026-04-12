<nav class="navbar navbar-expand-lg border-bottom bg-bianco">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img id="logoNavbar" src="/media/logo.png" alt="Logo del sito" class="logo" width="100" height="100"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-marrone" aria-current="page" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Panini
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="{{route('panini.create')}}">Crea il tuo panino</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{route('panini.index')}}">Tutti i panini</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-marrone" href="{{route('contact.us')}}">Contattaci</a>
                </li>
                <li class="nav-item dropdown">
                    @auth
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Ciao {{\Illuminate\Support\Facades\Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('form-logout').submit();">Esci</a>
                            <form action="{{route('logout')}}" method="POST" style="display: none;" id="form-logout">@csrf</form>
                        </li>
                    </ul>
                    @else
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Ciao
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="{{route('login')}}">Accedi</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{route('register')}}">Registrati</a>
                        </li>
                    </ul>
                    @endauth
                </li>
            </ul>
        </div>
    </div>
</nav>