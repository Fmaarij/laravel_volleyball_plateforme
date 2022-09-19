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
                        <select name="role" id="">
                            @foreach ($roles as $role)
                                <option placeholder="{{ $role->id }}">{{ $role->role }}</option>
                            @endforeach
                        </select>
                    </div>



                <div class="pb-3">
                    <input class="form-control text-light" style="background: transparent; "type="text"
                        name="telephone" placeholder="Telephone">
                </div>

                <div class="pb-3">
                    <select name="continent" id="">
                        @foreach ($continents as $continent)

                        {{-- @if ($continent->continent != $continent->equipe->continent_id) --}}
                        <option value="{{ $continent->id }}">{{ $continent->continent }}</option>
                        {{-- @endif --}}
                        @endforeach
                    </select>
                    
                </div>
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
                    <select name="nomdeclub" id="">
                        <option placeholder="JetteVolly">JetteVolly</option>
                        <option placeholder="MolenVolly">MolenVolly</option>
                        <option placeholder="BruxellesVolly">BruxellesVolly</option>
                        <option placeholder="IxellesVolly">IxellesVolly</option>
                    </select>
                </div>

                <div class="pb-3">
                    <input class="form-control text-light" style="background: transparent; "type="text"
                        class="btn btn-yellow" name='ville' placeholder="ville   ">
                </div>
                <div class="pb-3">
                    <input class="form-control text-light" style="background: transparent; "type="text"
                        class="btn btn-yellow" name='pays' placeholder="pays de jeux   ">
                </div>



                <div class="pb-3">
                    <input class="form-control text-light" style="background: transparent; "type="text"
                        class="btn btn-yellow" name='maxdejoueurparrole' placeholder="12   ">
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
