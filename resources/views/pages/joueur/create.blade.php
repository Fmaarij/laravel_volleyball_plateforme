<div class="h-200"
    style="background-image:url(/img/backfround1.webp); background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;">

    @extends('layouts.index')

    @section('content')
        {{-- <div class="container my-5"> --}}
        <div class="container my-5">

                <form action="/createjoueur" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row ">
                        <div class="pb-3">
                            <input class="form-control" type="text" name="nom" value="Nom">
                        </div>
                        <div class="pb-3">
                            <input class="form-control" type="text" name="prenom" value="Prenom">
                        </div>
                        <div class="pb-3">
                            <input class="form-control" type="text" name="age" value="21">
                        </div>
                        <div class="pb-3">
                            <input class="form-control" type="text" name="role" value="1">
                        </div>
                    </div>
                    <div class="pb-3">
                        <input class="form-control" type="text" name="telephone" value="0487512546">
                    </div>
                    <div class="pb-3">
                        <input class="form-control" type="text" name="continent" value="Asie">
                    </div>
                    <div class="pb-3">
                        <input class="form-control" name="email" value="Eva@gmail.com   ">
                    </div>
                    <div class="pb-3">
                        <input class="form-control" name="genre" value="genre   ">
                    </div>
                    <div class="pb-3">
                        <input class="form-control" name="pays" value="pays de joueur   ">
                    </div>
                    <div class="pb-3">
                        {{-- <input class="form-control" type="text" class="btn btn-yellow" name='nomdeclub'   value="nomdeclub   "> --}}
                        <select name="nomdeclub" id="">
                            <option value="JetteVolly">JetteVolly</option>
                            <option value="MolenVolly">MolenVolly</option>
                            <option value="BruxellesVolly">BruxellesVolly</option>
                            <option value="IxellesVolly">IxellesVolly</option>
                        </select>
                    </div>
                    <div class="pb-3">
                        <input class="form-control" type="text" class="btn btn-yellow" name='ville' value="ville   ">
                    </div>
                    <div class="pb-3">
                        <input class="form-control" type="text" class="btn btn-yellow" name='pays'
                            value="pays de jeux   ">
                    </div>
                    <div class="pb-3">
                        <input class="form-control" type="text" class="btn btn-yellow" name='maxdejoueurparrole'
                            value="12   ">
                    </div>
                    <div class="pb-3">
                        <input class="form-control" type="file" class="btn btn-yellow" name='photo'
                            placeholder="photo   ">
                    </div>
                    <div class="pb-3">
                        <button type="submit" class="btn btn-light">Ajouter</button>
                    </div>

            </div>
            </form>

        </div>
    </div>
@endsection
