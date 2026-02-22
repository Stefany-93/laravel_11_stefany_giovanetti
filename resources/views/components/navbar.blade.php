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
                <li class="nav-item">
                    <a class="nav-link text-marrone" href="{{route('menu')}}">Menù</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-marrone" href="{{route('crea')}}">Crea il tuo panino</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-marrone" href="{{route('panini.index')}}">I tuoi panini</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-marrone" href="{{route('contact.us')}}">Contattaci</a>
                </li>
            </ul>
        </div>
    </div>
</nav>