<div
    style="background-image:url(img/volly.jpg); background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;">

    @extends('layouts.index')
    @section('content')
        <div class="container my-5">
            <div class="row">
                @foreach ($equipes as $equipe)
                    <div class="col-sm-6 text-center ">
                        <div class="card-body  rounded-pill w-100  m-auto ">
                            <div class="card-body opacity-25 w-100 m-auto bg-info  rounded-pill ">
                                <h5 class="card-title">Nom De Club : {{ $equipe->nomdeclub }}</h5>
                                <p class="card-text">Ville De Club : {{ $equipe->ville }}</p>

                                @if ($equipe->dejaajouter ==  $equipe->maxdejoueurparrole )
                                <p class="text-danger">Nombre de jouer : {{$equipe->dejaajouter}}/{{ $equipe->maxdejoueurparrole }}</p>
                                @else
                                <p>Nombre de jouer : {{$equipe->dejaajouter}}/{{ $equipe->maxdejoueurparrole }}</p>
                                @endif
                                <a href="/showequipe/{{ $equipe->id }}" class="">
                                    <button class="btn btn-outline-light">Show</button>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
