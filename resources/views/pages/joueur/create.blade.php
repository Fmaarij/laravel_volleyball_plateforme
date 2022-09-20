<div class="h-100"
    style="background-image:url(/img/backfround1.webp); background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;">

    @extends('layouts.index')

    @section('content')
        <div class="container my-5">
            <form action="/createjoueur" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row  ">
                    <div class="col">

                    <div class="pb-3">
                        <input class="form-control text-light" style="background: transparent; " type="text"
                            name="nom" placeholder="Nom">
                    </div>
                    <div class="pb-3">
                        <input class="form-control text-light" style="background: transparent; "type="text"
                            name="prenom" placeholder="Prenom">
                    </div>
                    <div class="pb-3">
                        <input class="form-control text-light" style="background: transparent; "type="text"
                            name="age" placeholder="age">
                    </div>
                    <div class="pb-3">
                        <select name="role_id" id="">
                            @foreach ($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->role }}</option>
                            @endforeach
                        </select>
                    </div>



                <div class="pb-3">
                    <input class="form-control text-light" style="background: transparent; "type="text"
                        name="telephone" placeholder="Telephone">
                </div>

                {{-- <div class="pb-3"> --}}
                    {{-- <select name="continent_id" id=""> --}}
                        {{-- @foreach ($continents as $continent) --}}

                        {{-- @if ($continent->continent != $continent->equipe->continent_id) --}}
                        {{-- <option value="{{ $continent->id }}">{{ $continent->continent }}</option> --}}
                        {{-- @endif --}}
                        {{-- @endforeach --}}
                    {{-- </select> --}}

                {{-- </div> --}}
                <div class="pb-3">
                    <input class="form-control text-light" style="background: transparent; "name="email"
                        placeholder="email ">
                </div>
                <div class="pb-3">
                    <input class="form-control text-light" style="background: transparent; "name="genre"
                        placeholder="genre   ">
                </div>
            </div>

            <div class="col">

                <div class="pb-3">
                    <input class="form-control text-light" style="background: transparent; "name="pays"
                        placeholder="pays de joueur   ">
                </div>
                <div class="pb-3">
                    {{-- <input class="form-control text-light" style="background: transparent; "name="equipe_id"
                        placeholder="Equipe Id   "> --}}
                        <select name="equipe_id" id="">
                            @foreach ($equipes as $equipe )
                            <option value="{{$equipe->id}}">{{$equipe->nomdeclub}}</option>
                            @endforeach
                        </select>
                </div>

                <div class="pb-3">
                    <input class="form-control text-light" style="background: transparent; "type="file"
                        class="btn btn-yellow" name='photo' placeholder="photo   ">
                </div>
                <div class="pb-3">
                    <button type="submit" class="btn btn-light">Ajouter</button>
                </div>
            </div>
            <div class="col">
            </div>
            <div class="col">
            </div>
            </div>
        </div>
        </form>

    </div>
    </div>
@endsection
