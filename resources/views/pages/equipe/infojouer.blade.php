@extends('layouts.index')
@section('content')
<div class="container my-5">
<table class="table table-striped table-bordered table-hover table">
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
    {{-- @foreach ($joueurs as $joueur ) --}}

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
    {{-- @endforeach --}}
 </tbody>
</table>
</div>
@endsection
