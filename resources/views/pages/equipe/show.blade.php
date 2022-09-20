<div class="h-100" style="background-image:url(/img/volly.jpg); background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;">
@extends('layouts.index')
@section('content')
<div class="container my-5">
<div class="row   "  >
    <div class="col-sm-6 text-center ">
      <div class="card  rounded-pill w-50 m-auto " >
        <div class="card-body opacity-25 w-100 p-5  m-auto bg-info  rounded-pill ">
          <h5 class="card-title">Nom De Club : {{$equipes->nomdeclub}}</h5>
          <p class="card-text">Ville De Club : {{$equipes->ville}}</p>
          <p>Nombre de jouer : 2/{{$equipes->maxdejoueurparrole}}</p>
          <a href="/showjoueur/{{$equipes->id}}" class="">
            <button class="btn btn-outline-light">Show joueurs</button>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
