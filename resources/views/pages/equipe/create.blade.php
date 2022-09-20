<div class="h-100" style="background-image:url(img/volly.jpg); background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;">
    @extends('layouts.index')
    @section('content')
        <div class="container my-5">
            <form action="/storeequpie" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="pb-3">
                            <input  class="form text-light" style="background: transparent; "type="text"
                            class="btn btn-yellow" name='nomdeclub' placeholder="nom de club   ">
                            {{-- <select name="nomdeclub" id=""> --}}
                                {{-- @foreach ($equipes as $equipe)
            <option value="{{$equipe->id}}">{{$equipe->nomdeclub}}</option>
            @endforeach --}}
                                {{-- <option placeholder="JetteVolly">JetteVolly</option>
                                <option placeholder="MolenVolly">MolenVolly</option>
                                <option placeholder="BruxellesVolly">BruxellesVolly</option>
                                <option placeholder="IxellesVolly">IxellesVolly</option> --}}
                            {{-- </select> --}}
                        </div>

                        <div class="pb-3">
                            <input  class="form text-light" style="background: transparent; "type="text"
                                class="btn btn-yellow" name='ville' placeholder="ville   ">
                        </div>
                        <div class="pb-3">
                            <input class="form text-light" style="background: transparent; "type="text"
                                class="btn btn-yellow" name='pays' placeholder="pays de jeux   ">
                        </div>



                        <div class="pb-3">
                            <input class="form text-light" style="background: transparent; "type="text"
                                class="btn btn-yellow" name='maxdejoueurparrole' placeholder="12   ">
                        </div>


                        <div class="pb-3">
                            <select name="continent_id" id="">
                                @foreach ($continents as $continent)
                                    {{-- @if ($continent->continent != $continent->equipe->continent_id) --}}
                                    <option value="{{ $continent->id }}">{{ $continent->continent }}</option>
                                    {{-- @endif --}}
                                @endforeach
                            </select>

                        </div>
                        <div class="pb-3">
                            <button type="submit" class="btn btn-light">Ajouter</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
