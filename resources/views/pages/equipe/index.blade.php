@extends('layouts.index')
@section('content')
<div class="container my-5">
<table class="table table-striped table-bordered table-hover table">
 <thead>
    <tr>
        <th>Nom de l'équipe</th>
        <th>Ville</th>
        <th>Nombre de joueurs sur/maximum de place </th>
        <th>Show</th>
    </tr>
 </thead>
 <tbody>
    @foreach ($equipes as $equipe )

    <tr>
        {{-- {{dd($joueurs)}} --}}
        {{-- @if($joueurs->joueurs->equipe_id ==  $equipe->nomdeclub ) --}}
        <td>{{$equipe->nomdeclub}}</td>
        <td>{{$equipe->ville}}</td>
        <td>{{$equipe->maxdejoueurparrole}}</td>
        <td>
            <a href="/showequipe/{{$equipe->id}}">
                <button class="btn btn-outline-info">Show</button>
            </a>
        </td>
        {{-- @endif --}}
    </tr>
    @endforeach
 </tbody>
</table>
</div>
@endsection
