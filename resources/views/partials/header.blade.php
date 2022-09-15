<nav class="navbar navbar-expand-lg navbar-light bg-light">
    {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
             {{-- <li class="nav-item active">
                <a class="nav-link" href="#">Acceuil <span class="sr-only">(current)</span></a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link" href="{{route('equipeindex')}}">Equipe</a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" href="">Ajouté une équipe</a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link " href="{{route('joueurindex')}}">Jouers</a>

            </li>
            <li>
                <a class="nav-link " href="{{route('joueurcreate')}}">Ajouter un jouer</a>
            </li>
        </ul>
    </div>
</nav>
