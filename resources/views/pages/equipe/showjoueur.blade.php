<div class="h-100" style="background-image:url(/img/volly.jpg); background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;">
@extends('layouts.index')
@section('content')
<div class="container my-5 ">
<table class="table table-striped table-bordered table-hover table text-light">
 <thead>
    <tr>
        <th>Nom de l'équipe</th>
        <th>Ville</th>
        <th>Nombre de joueurs sur/maximum de place </th>
        <th>Nom de joueur</th>
        <th>Prenom de joueur</th>
        <th>Role de joueur </th>
        <th>Info de Jouer</th>
    </tr>
 </thead>
 <tbody>
@foreach ($joueurs as $joueur )

<tr class="text-light">
    @if($joueur->equipe->nomdeclub == $equipes->nomdeclub)
    <td>{{$joueur->equipe->nomdeclub}}</td>
    <td>{{$joueur->equipe->ville}}</td>
    <td>{{$joueur->equipe->maxdejoueurparrole}}</td>
    <td>{{$joueur->nom}}</td>
    <td>{{$joueur->prenom}}</td>
    <td>{{$joueur->role->role}}</td>
     <td>
        <a href="/infojouer/{{$joueur->id}}">
            <button class="btn btn-outline-info">Info</button>
        </a>
    </td>
    @endif
</tr>
@endforeach
 </tbody>
</table>
</div>
</div>
@endsection
