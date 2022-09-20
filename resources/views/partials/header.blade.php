{{-- navbar navbar-expand-lg navbar-light bg-light --}}
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Logo</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{route('equipeindex')}}">Equipe</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('equipecreate')}}">Ajouter une équipe</a>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="{{route('joueurindex')}}">Joueurs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('joueurcreate')}}">Ajouter Un joueur</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
