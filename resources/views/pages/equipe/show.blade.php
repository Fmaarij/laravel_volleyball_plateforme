@extends('layouts.index')
@section('content')
<div class="container my-5">
<table class="table table-striped table-bordered table-hover table">
 <thead>
    <tr>
        <th>Nom de l'équipe</th>
        <th>Ville</th>
        <th>Nombre de joueurs sur/maximum de place </th>
        <th>Show les joueurs de cet equipe</th>
    </tr>
 </thead>
 <tbody>

    <tr>
        <td>{{$equipes->nomdeclub}}</td>
        <td>{{$equipes->ville}}</td>
        <td>{{$equipes->maxdejoueurparrole}}</td>
        <td>
            <a href="/showjoueur/{{$equipes->id}}">
                <button class="btn btn-outline-info">Show</button>
            </a>
        </td>
    </tr>
 </tbody>
</table>
</div>
@endsection
