<div style="background-image:url(/img/backfround1.webp); background-repeat: no-repeat;
background-attachment: 100%;
background-size: cover;">
@extends('layouts.index')
@section('content')
<div class="container my-5 ">
{{-- <table class="table table-striped table-bordered table-hover table">
 <thead>
    <tr>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Age</th>
        <th>Tel</th>
        <th>Email</th>
        <th>Genre</th>
        <th>Pays de Joueur</th>
        <th>Role</th>
        <th>Photo</th>
        <th>Equipe</th>
    </tr>
 </thead>
 <tbody>
    <tr>
        <td>{{$joueurs->nom}}</td>
        <td>{{$joueurs->prenom}}</td>
        <td>{{$joueurs->age}}</td>
        <td>{{$joueurs->telephone}}</td>
        <td>{{$joueurs->email}}</td>
        <td>{{$joueurs->genre}}</td>
        <td>{{$joueurs->pays}}</td>
        <td>{{$joueurs->role->role}}</td>
        <td width="10%">
        <img width="100%" class="rounded-pill" src="{{asset('storage/img/'.$joueurs->photo->photo)}}" alt="">
        </td>
        <td>{{$joueurs->equipe->nomdeclub}}</td>
    </tr>
 </tbody>
</table> --}}

<div class="row  d-flex justify-content-center align-items-center"  >
    <div class="col-sm-6 text-center ">
      <div class="card  rounded  " >
        <div class="card-body opacity-25 p-5   bg-info  rounded ">
            <h1>Nom : {{$joueurs->nom}}</h1>
            <p>Prenom : {{$joueurs->prenom}},  Age : {{$joueurs->age}}</p>
            <p>Tel : {{$joueurs->telephone}}, Email : {{$joueurs->email}}</p>
            <p>Genre : {{$joueurs->genre}}, Pays de Joueur : {{$joueurs->pays}}</p>
            <p>Role : {{$joueurs->role->role}}, Photo :  <img width="10%" class="rounded-pill" src="{{asset('storage/img/'.$joueurs->photo->photo)}}" alt=""></p>

            <p>Equipe : {{$joueurs->equipe->nomdeclub}}</p>
        </div>
      </div>
    </div>
  </div>

</div>
</div>
@endsection
